<?php

namespace srag\Plugins\Opencast\UI\PaellaConfig;

use ILIAS\UI\Component\Input\Container\Form\Standard;
use ILIAS\UI\Component\Input\Field\UploadHandler;
use ILIAS\UI\Implementation\Component\Input\Field\Input;
use ilPlugin;
use srag\Plugins\Opencast\Model\Config\PluginConfig;
use srag\Plugins\Opencast\Util\FileTransfer\PaellaConfigStorageService;
use ILIAS\UI\Factory;
use ILIAS\UI\Renderer;

class PaellaConfigFormBuilder
{
    // Paella Player Path
    public const F_PAELLA_PLAYER_OPTION = 'paella_player_option';
    public const F_PAELLA_PLAYER_DEFAULT = 'pp_default';
    public const F_PAELLA_PLAYER_FILE = 'pp_file';
    public const F_PAELLA_PLAYER_LINK = 'pp_link';
    // Paella Player live Path
    public const F_PAELLA_PLAYER_LIVE_OPTION = 'paella_player_live_option';
    public const F_PAELLA_PLAYER_LIVE_DEFAULT = 'pp_default';
    public const F_PAELLA_PLAYER_LIVE_FILE = 'pp_live_file';
    public const F_PAELLA_PLAYER_LIVE_LINK = 'pp_live_link';

    /**
     * @var ilPlugin
     */
    private $plugin;
    /**
     * @var PaellaConfigStorageService
     */
    private $paellaStorageService;
    /**
     * @var Factory
     */
    private $ui_factory;

    /**
     * @var Renderer
     */
    private $ui_renderer;

    public function __construct(
        ilPlugin $plugin,
        UploadHandler $fileUploadHandler,
        PaellaConfigStorageService $paellaStorageService,
        Factory $ui_factory,
        Renderer $ui_renderer
    ) {
        $this->plugin = $plugin;
        $this->paellaStorageService = $paellaStorageService;
        $this->ui_factory = $ui_factory;
        $this->ui_renderer = $ui_renderer;
    }

    public function buildForm(string $form_action): Standard
    {
        $inputs = [];
        $inputs[self::F_PAELLA_PLAYER_OPTION] = $this->getPaellaPlayerPathInput(
            false,
            PluginConfig::getConfig(PluginConfig::F_PAELLA_OPTION),
            PluginConfig::getConfig(PluginConfig::F_PAELLA_URL) ?? ''
        );
        $inputs[self::F_PAELLA_PLAYER_LIVE_OPTION] = $this->getPaellaPlayerPathInput(
            true,
            PluginConfig::getConfig(PluginConfig::F_PAELLA_OPTION_LIVE),
            PluginConfig::getConfig(PluginConfig::F_PAELLA_URL_LIVE) ?? ''
        );
        return $this->ui_factory->input()->container()->form()->standard(
            $form_action,
            $inputs
        );
    }

    private function getPaellaPlayerPathInput(bool $live, string $option, string $url): Input
    {
        $f = $this->ui_factory->input()->field();
        $link = $this->ui_renderer->render(
            $this->ui_factory->link()->standard(
                $this->plugin->txt(self::F_PAELLA_PLAYER_DEFAULT . "_link"),
                $live ? PluginConfig::PAELLA_DEFAULT_PATH_LIVE : PluginConfig::PAELLA_DEFAULT_PATH
            )
        );

        return $f->switchableGroup([
            PluginConfig::PAELLA_OPTION_DEFAULT => $f->group([], $this->plugin->txt("pp_default_string") . " " . $link),
            PluginConfig::PAELLA_OPTION_URL => $f->group([
                'url' => $f->text($this->plugin->txt('link'))
                           ->withByline($this->plugin->txt('pp_link_info'))
                           ->withRequired(true)
                           ->withValue($url)
            ], $this->plugin->txt('pp_url'))
        ], $this->txt(self::F_PAELLA_PLAYER_OPTION))
                 ->withValue($option)
                 ->withRequired(true);
    }

    private function txt(string $string): string
    {
        return $this->plugin->txt('config_' . $string);
    }
}
