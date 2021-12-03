<?php

namespace srag\Plugins\Opencast\Model\WorkflowParameter\Config;

use DOMDocument;
use ilException;
use ilOpenCastPlugin;
use ilUtil;
use srag\DIC\OpenCast\DICTrait;
use srag\Plugins\Opencast\Model\WorkflowParameter\Series\SeriesWorkflowParameterRepository;
use xoctConf;
use xoctConfGUI;
use xoctException;
use xoctRequest;
use xoctWorkflowParameterGUI;

/**
 * Class xoctWorkflowParameterRepository
 *
 * @author Theodor Truffer <tt@studer-raimann.ch>
 */
class WorkflowParameterRepository {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilOpenCastPlugin::class;

	/**
	 * @var self
	 */
	protected static $instance;
	/**
	 * @var array
	 */
	protected $parameters;

	/**
	 * @return self
	 */
	public static function getInstance() {
		if (self::$instance == NULL) {
			$self = new self();
			self::$instance = $self;
		}
		return self::$instance;
	}


	/**
	 * @return array
	 * @throws xoctException
	 */
	public function loadParametersFromAPI() {
		xoctConf::setApiSettings();
		$workflow_id = xoctConf::getConfig(xoctConf::F_WORKFLOW);
		if (!$workflow_id) {
			throw new xoctException(xoctException::INTERNAL_ERROR, 'No Workflow defined in plugin configuration.');
		}
		$response = json_decode(xoctRequest::root()->workflowDefinition($workflow_id)->parameter('withconfigurationpanel', 'true')->get(), true);

		if ($response == false) {
			throw new xoctException(xoctException::INTERNAL_ERROR, "Couldn't fetch workflow information for workflow '$workflow_id'.");
		}

		if(!isset($response['configuration_panel'])) {
			throw new xoctException(xoctException::INTERNAL_ERROR, 'No configuration panel found for workflow with id = ' . $workflow_id);
		}

		try {
			return $this->parseConfigurationPanelHTML($response['configuration_panel']);
		} catch (ilException $e) {
			ilUtil::sendFailure(self::plugin()->translate('msg_workflow_params_parsing_failed') . ' ' . $e->getMessage(), true);
			self::dic()->ctrl()->redirectByClass([xoctConfGUI::class, xoctWorkflowParameterGUI::class]);
		}
	}


	/**
	 * @param $configuration_panel_html
	 *
	 * @return array
	 */
	protected function parseConfigurationPanelHTML($configuration_panel_html) {
		$dom = new DOMDocument();
		$dom->strictErrorChecking = false;
		$configuration_panel_html = trim(str_replace("\n", "", $configuration_panel_html));
		$dom->loadHTML($configuration_panel_html, LIBXML_NOCDATA | LIBXML_NOWARNING | LIBXML_NOERROR);
		$inputs = $dom->getElementsByTagName('input');
		$labels = $dom->getElementsByTagName('label');
		$workflow_parameters = [];
		/** @var DOMElement $input */
		foreach ($inputs as $input) {
			/** @var WorkflowParameter $xoctWorkflowParameter */
			$xoctWorkflowParameter = WorkflowParameter::findOrGetInstance($input->getAttribute('id'));
			if (!$xoctWorkflowParameter->getTitle()) {
				$name = $input->getAttribute('name');
				/** @var DOMElement $label */
				foreach ($labels as $label) {
					if ($label->getAttribute('for') == $name) {
						$xoctWorkflowParameter->setTitle($label->nodeValue);
						break;
					}
				}
			}
			if (!$xoctWorkflowParameter->getType()) {
//				$xoctWorkflowParameter->setType($input->getAttribute('type'));  // for now, only checkbox is supported
				$xoctWorkflowParameter->setType(WorkflowParameter::TYPE_CHECKBOX);
			}
			$workflow_parameters[] = $xoctWorkflowParameter;
		}
		return $workflow_parameters;
	}


	/**
	 * @param $ids int|int[] single or multiple
	 */
	public function deleteById($ids) {
		if (!is_array($ids)) {
			$ids = [$ids];
		}
		foreach ($ids as $id) {
			WorkflowParameter::find($id)->delete();
		}
		SeriesWorkflowParameterRepository::getInstance()->deleteParamsForAllObjectsById($ids);
	}


	/**
	 * @param     $id
	 * @param     $title
	 * @param     $type
	 *
	 * @param int $default_value_member
	 * @param int $default_value_admin
	 *
	 * @return WorkflowParameter
	 */
	public function createOrUpdate($id, $title, $type, $default_value_member = 0, $default_value_admin = 0) {
		if (!WorkflowParameter::where(array('id' => $id))->hasSets()) {
			$is_new = true;
		}
		/** @var WorkflowParameter $xoctWorkflowParameter */
		$xoctWorkflowParameter = WorkflowParameter::findOrGetInstance($id);
		$xoctWorkflowParameter->setTitle($title);
		$xoctWorkflowParameter->setType($type);
		$xoctWorkflowParameter->setDefaultValueMember($default_value_member);
		$xoctWorkflowParameter->setDefaultValueAdmin($default_value_admin);
		$xoctWorkflowParameter->store();

		if ($is_new) {
			SeriesWorkflowParameterRepository::getInstance()->createParamsForAllObjects($xoctWorkflowParameter);
		}

		return $xoctWorkflowParameter;
	}


	/**
	 *
	 */
	public function overwriteSeriesParameter() {
		/** @var WorkflowParameter $xoctWorkflowParameter */
		foreach (WorkflowParameter::get() as $xoctWorkflowParameter) {
			$sql = 'UPDATE ' . SeriesWorkflowParameter::TABLE_NAME .
				' SET value_member = ' . self::dic()->database()->quote($xoctWorkflowParameter->getDefaultValueMember(), 'integer') . ', ' .
				' value_admin = ' . self::dic()->database()->quote($xoctWorkflowParameter->getDefaultValueAdmin(), 'integer') .
				' WHERE param_id = ' . self::dic()->database()->quote($xoctWorkflowParameter->getId(), 'text');
			self::dic()->database()->query($sql);
		}
	}


	/**
	 * @return array
	 * @throws \srag\DIC\OpenCast\Exception\DICException
	 */
	public static function getSelectionOptions() {
		$options = [];
		foreach (WorkflowParameter::$possible_values as $value) {
			$options[$value] = self::plugin()->translate('workflow_parameter_value_' . $value, 'config');
		}
		return $options;
	}

    /**
     * @param bool $as_admin
     */
    public function getDefaultWorkflowParameters($as_admin = true) : array
    {
        $workflow_parameters = [];
        /** @var WorkflowParameter $xoctWorkflowParameter */
        foreach (WorkflowParameter::get() as $xoctWorkflowParameter) {
            $default_value = $as_admin ? $xoctWorkflowParameter->getDefaultValueAdmin() : $xoctWorkflowParameter->getDefaultValueMember();

            switch ($default_value) {
                case WorkflowParameter::VALUE_ALWAYS_ACTIVE:
                    $workflow_parameters[$xoctWorkflowParameter->getId()] = 1;
                    break;
                case WorkflowParameter::VALUE_ALWAYS_INACTIVE:
                    $workflow_parameters[$xoctWorkflowParameter->getId()] = 0;
                    break;
                default:
                    break;
            }
        }
        return $workflow_parameters;
    }
}