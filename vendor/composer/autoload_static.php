<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf618280b835f1c6e99e4eb8d8a3e04f0
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\OpenCast\\' => 18,
            'srag\\CustomInputGUIs\\OpenCast\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\OpenCast\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\OpenCast\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
    );

    public static $classMap = array (
        'Metadata' => __DIR__ . '/../..' . '/src/Model/API/Metadata/Metadata.php',
        'MetadataField' => __DIR__ . '/../..' . '/src/Model/API/Metadata/Metadata.php',
        'ilInteractiveVideoTimePicker' => __DIR__ . '/../..' . '/classes/Util/class.ilInteractiveVideoTimePicker.php',
        'ilObjOpenCast' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCast.php',
        'ilObjOpenCastAccess' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCastAccess.php',
        'ilObjOpenCastGUI' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCastGUI.php',
        'ilObjOpenCastListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCastListGUI.php',
        'ilOpenCastConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilOpenCastConfigGUI.php',
        'ilOpenCastPlugin' => __DIR__ . '/../..' . '/classes/class.ilOpenCastPlugin.php',
        'srag\\CustomInputGUIs\\OpenCast\\CheckboxInputGUI\\AjaxCheckbox' => __DIR__ . '/..' . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
        'srag\\CustomInputGUIs\\OpenCast\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\ColorPickerInputGUI\\ColorPickerInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\OpenCast\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\OpenCast\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\OpenCast\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\OpenCast\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
        'srag\\CustomInputGUIs\\OpenCast\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\OpenCast\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\OpenCast\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\OpenCast\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\OpenCast\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\OpenCast\\Loader\\CustomInputGUIsLoaderDetector' => __DIR__ . '/..' . '/srag/custominputguis/src/Loader/CustomInputGUIsLoaderDetector.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\OpenCast\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\OpenCast\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\OpenCast\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\OpenCast\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\OpenCast\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\OpenCast\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\OpenCast\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\OpenCast\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\OpenCast\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\OpenCast\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\OpenCast\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\OpenCast\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\OpenCast\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\OpenCast\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\OpenCast\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\OpenCast\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\OpenCast\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\OpenCast\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\OpenCast\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\OpenCast\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\OpenCast\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\OpenCast\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\OpenCast\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\OpenCast\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\OpenCast\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\OpenCast\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\OpenCast\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\OpenCast\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\OpenCast\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\OpenCast\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\OpenCast\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\OpenCast\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\OpenCast\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\OpenCast\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginPhpAndXml' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginPhpAndXml.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\UpdatePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/UpdatePluginReadme.php',
        'srag\\Plugins\\Opencast\\Cache\\Cache' => __DIR__ . '/../..' . '/src/Cache/Cache.php',
        'srag\\Plugins\\Opencast\\Cache\\CacheFactory' => __DIR__ . '/../..' . '/src/Cache/CacheFactory.php',
        'srag\\Plugins\\Opencast\\Cache\\Service\\DB\\DBCacheAR' => __DIR__ . '/../..' . '/src/Cache/Service/DB/DBCacheAR.php',
        'srag\\Plugins\\Opencast\\Cache\\Service\\DB\\DBCacheService' => __DIR__ . '/../..' . '/src/Cache/Service/DB/DBCacheService.php',
        'srag\\Plugins\\Opencast\\Chat\\GUI\\ChatGUI' => __DIR__ . '/../..' . '/src/Chat/GUI/ChatGUI.php',
        'srag\\Plugins\\Opencast\\Chat\\GUI\\ChatHistoryGUI' => __DIR__ . '/../..' . '/src/Chat/GUI/ChatHistoryGUI.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\ChatroomAR' => __DIR__ . '/../..' . '/src/Chat/Model/ChatroomAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\ConfigAR' => __DIR__ . '/../..' . '/src/Chat/Model/ConfigAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\EventAR' => __DIR__ . '/../..' . '/src/Chat/Model/EventAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\MessageAR' => __DIR__ . '/../..' . '/src/Chat/Model/MessageAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\Token' => __DIR__ . '/../..' . '/src/Chat/Model/Token.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\TokenAR' => __DIR__ . '/../..' . '/src/Chat/Model/TokenAR.php',
        'srag\\Plugins\\Opencast\\Model\\API\\APIObject' => __DIR__ . '/../..' . '/src/Model/API/APIObject.php',
        'srag\\Plugins\\Opencast\\Model\\API\\Agent\\Agent' => __DIR__ . '/../..' . '/src/Model/API/Agent/Agent.php',
        'srag\\Plugins\\Opencast\\Model\\API\\Event\\EventRepository' => __DIR__ . '/../..' . '/src/Model/API/Event/EventRepository.php',
        'srag\\Plugins\\Opencast\\Model\\API\\Group\\Group' => __DIR__ . '/../..' . '/src/Model/API/Group/Group.php',
        'srag\\Plugins\\Opencast\\Model\\API\\Scheduling\\Scheduling' => __DIR__ . '/../..' . '/src/Model/API/Scheduling/Scheduling.php',
        'srag\\Plugins\\Opencast\\Model\\API\\Series\\SeriesRepository' => __DIR__ . '/../..' . '/src/Model/API/Series/SeriesRepository.php',
        'srag\\Plugins\\Opencast\\Model\\API\\WorkflowInstance\\WorkflowInstance' => __DIR__ . '/../..' . '/src/Model/API/WorkflowInstance/WorkflowInstance.php',
        'srag\\Plugins\\Opencast\\Model\\API\\WorkflowInstance\\WorkflowInstanceCollection' => __DIR__ . '/../..' . '/src/Model/API/WorkflowInstance/WorkflowInstanceCollection.php',
        'srag\\Plugins\\Opencast\\Model\\API\\WorkflowInstance\\WorkflowOperation' => __DIR__ . '/../..' . '/src/Model/API/WorkflowInstance/WorkflowOperation.php',
        'srag\\Plugins\\Opencast\\Model\\DTO\\DownloadDto' => __DIR__ . '/../..' . '/src/Model/DTO/DownloadDto.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\MDFieldConfigAR' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/MDFieldConfigAR.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\MDPrefillOption' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/MDPrefillOption.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDCatalogue' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDCatalogue.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDCatalogueFactory' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDCatalogueFactory.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDDataType' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDDataType.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDFieldDefinition' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDFieldDefinition.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsage' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsage.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsageDefault' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsageDefault.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsageRepository' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsageRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\PublicationSelector' => __DIR__ . '/../..' . '/src/Model/Publication/PublicationSelector.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Config\\WorkflowParameter' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Config/WorkflowParameter.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Config\\WorkflowParameterRepository' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Config/WorkflowParameterRepository.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Series\\SeriesWorkflowParameter' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Series/SeriesWorkflowParameter.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Series\\SeriesWorkflowParameterRepository' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Series/SeriesWorkflowParameterRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Workflow\\WorkflowAR' => __DIR__ . '/../..' . '/src/Model/Workflow/WorkflowAR.php',
        'srag\\Plugins\\Opencast\\Model\\Workflow\\WorkflowRepository' => __DIR__ . '/../..' . '/src/Model/Workflow/WorkflowRepository.php',
        'srag\\Plugins\\Opencast\\Traits\\Singleton' => __DIR__ . '/../..' . '/src/Traits/Singleton.php',
        'srag\\Plugins\\Opencast\\UI\\Input\\EventFormGUI' => __DIR__ . '/../..' . '/src/UI/Input/EventFormGUI.php',
        'srag\\Plugins\\Opencast\\UI\\Input\\FileUploadInputGUI' => __DIR__ . '/../..' . '/src/UI/Input/FileUploadInputGUI.php',
        'srag\\Plugins\\Opencast\\UI\\Input\\Plupload' => __DIR__ . '/../..' . '/src/UI/Input/Plupload.php',
        'srag\\Plugins\\Opencast\\UI\\Input\\xoctPluploadException' => __DIR__ . '/../..' . '/src/UI/Input/Plupload.php',
        'srag\\Plugins\\Opencast\\UI\\Modal\\EventModals' => __DIR__ . '/../..' . '/src/UI/Modal/EventModals.php',
        'srag\\Plugins\\Opencast\\UI\\Modal\\RepublishModal' => __DIR__ . '/../..' . '/src/UI/Modal/RepublishModal.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\LivePlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/LivePlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\PlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/PlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\PlayerDataBuilderFactory' => __DIR__ . '/../..' . '/src/Util/Player/PlayerDataBuilderFactory.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\StandardPlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/StandardPlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\StreamingPlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/StreamingPlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Transformator\\ACLtoXML' => __DIR__ . '/../..' . '/src/Util/Transformator/ACLtoXML.php',
        'srag\\Plugins\\Opencast\\Util\\Transformator\\MetadataToXML' => __DIR__ . '/../..' . '/src/Util/Transformator/MetadataToXML.php',
        'xoct' => __DIR__ . '/../..' . '/classes/class.xoct.php',
        'xoctAcl' => __DIR__ . '/../..' . '/classes/Series/Acl/class.xoctAcl.php',
        'xoctAclStandardSets' => __DIR__ . '/../..' . '/classes/Series/Acl/class.xoctAclStandardSets.php',
        'xoctAttachment' => __DIR__ . '/../..' . '/classes/Event/Publication/class.xoctAttachment.php',
        'xoctBase' => __DIR__ . '/../..' . '/classes/Request/class.xoctBase.php',
        'xoctChangeOwnerGUI' => __DIR__ . '/../..' . '/classes/Owner/class.xoctChangeOwnerGUI.php',
        'xoctChatHistoryModalGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctChatHistoryModalGUI.php',
        'xoctConf' => __DIR__ . '/../..' . '/classes/Conf/class.xoctConf.php',
        'xoctConfExportGUI' => __DIR__ . '/../..' . '/classes/Conf/Export/class.xoctConfExportGUI.php',
        'xoctConfFormGUI' => __DIR__ . '/../..' . '/classes/Conf/class.xoctConfFormGUI.php',
        'xoctConfGUI' => __DIR__ . '/../..' . '/classes/Conf/class.xoctConfGUI.php',
        'xoctCurl' => __DIR__ . '/../..' . '/classes/Request/class.xoctCurl.php',
        'xoctCurlError' => __DIR__ . '/../..' . '/classes/Request/class.xoctCurlError.php',
        'xoctCurlSettings' => __DIR__ . '/../..' . '/classes/Request/class.xoctCurlSettings.php',
        'xoctDataMapper' => __DIR__ . '/../..' . '/classes/class.xoctDataMapper.php',
        'xoctEvent' => __DIR__ . '/../..' . '/classes/Event/class.xoctEvent.php',
        'xoctEventAPI' => __DIR__ . '/../..' . '/classes/Service/class.xoctEventAPI.php',
        'xoctEventAdditions' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventAdditions.php',
        'xoctEventGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventGUI.php',
        'xoctEventRenderer' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventRenderer.php',
        'xoctEventTableGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventTableGUI.php',
        'xoctEventTileGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventTileGUI.php',
        'xoctException' => __DIR__ . '/../..' . '/classes/class.xoctException.php',
        'xoctGUI' => __DIR__ . '/../..' . '/classes/class.xoctGUI.php',
        'xoctIVTGroup' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctIVTGroup.php',
        'xoctIVTGroupGUI' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctIVTGroupGUI.php',
        'xoctIVTGroupParticipant' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctIVTGroupParticipant.php',
        'xoctIVTGroupParticipantGUI' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctIVTGroupParticipantGUI.php',
        'xoctInternalAPI' => __DIR__ . '/../..' . '/classes/Service/class.xoctInternalAPI.php',
        'xoctInternalApiException' => __DIR__ . '/../..' . '/classes/Service/class.xoctInternalApiException.php',
        'xoctInvitation' => __DIR__ . '/../..' . '/classes/Invitations/class.xoctInvitation.php',
        'xoctInvitationGUI' => __DIR__ . '/../..' . '/classes/Invitations/class.xoctInvitationGUI.php',
        'xoctLog' => __DIR__ . '/../..' . '/classes/class.xoctLog.php',
        'xoctMainGUI' => __DIR__ . '/../..' . '/classes/class.xoctMainGUI.php',
        'xoctMedia' => __DIR__ . '/../..' . '/classes/Event/Publication/class.xoctMedia.php',
        'xoctMigrationLog' => __DIR__ . '/../..' . '/classes/Migration/class.xoctMigrationLog.php',
        'xoctOpenCast' => __DIR__ . '/../..' . '/classes/Series/class.xoctOpenCast.php',
        'xoctPermissionTemplate' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplate.php',
        'xoctPermissionTemplateFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplateFormGUI.php',
        'xoctPermissionTemplateGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplateGUI.php',
        'xoctPermissionTemplateTableGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplateTableGUI.php',
        'xoctPlayerGUI' => __DIR__ . '/../..' . '/classes/Player/class.xoctPlayerGUI.php',
        'xoctProperties' => __DIR__ . '/../..' . '/classes/Series/Properties/class.xoctProperties.php',
        'xoctPublication' => __DIR__ . '/../..' . '/classes/Event/Publication/class.xoctPublication.php',
        'xoctPublicationMetadata' => __DIR__ . '/../..' . '/classes/Event/Publication/class.xoctPublicationMetadata.php',
        'xoctPublicationUsageFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationUsageFormGUI.php',
        'xoctPublicationUsageGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationUsageGUI.php',
        'xoctPublicationUsageTableGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationUsageTableGUI.php',
        'xoctReport' => __DIR__ . '/../..' . '/classes/Conf/Reports/class.xoctReport.php',
        'xoctReportOverviewGUI' => __DIR__ . '/../..' . '/classes/Conf/Reports/class.xoctReportOverviewGUI.php',
        'xoctReportOverviewTableGUI' => __DIR__ . '/../..' . '/classes/Conf/Reports/class.xoctReportOverviewTableGUI.php',
        'xoctReportingModalGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctReportingModalGUI.php',
        'xoctRequest' => __DIR__ . '/../..' . '/classes/Request/class.xoctRequest.php',
        'xoctRequestDummy' => __DIR__ . '/../..' . '/classes/Request/class.xoctRequestDummy.php',
        'xoctRequestSettings' => __DIR__ . '/../..' . '/classes/Request/class.xoctRequestSettings.php',
        'xoctScaMigration' => __DIR__ . '/../..' . '/classes/Migration/class.xoctScaMigration.php',
        'xoctScaMigrationGUI' => __DIR__ . '/../..' . '/classes/Migration/class.xoctScaMigrationGUI.php',
        'xoctSecureLink' => __DIR__ . '/../..' . '/classes/class.xoctSecureLink.php',
        'xoctSeries' => __DIR__ . '/../..' . '/classes/Series/class.xoctSeries.php',
        'xoctSeriesAPI' => __DIR__ . '/../..' . '/classes/Service/class.xoctSeriesAPI.php',
        'xoctSeriesFormGUI' => __DIR__ . '/../..' . '/classes/Series/class.xoctSeriesFormGUI.php',
        'xoctSeriesGUI' => __DIR__ . '/../..' . '/classes/Series/class.xoctSeriesGUI.php',
        'xoctSeriesWorkflowParameterTableGUI' => __DIR__ . '/../..' . '/classes/Series/WorkflowParameters/class.xoctSeriesWorkflowParameterTableGUI.php',
        'xoctSeriesWorkflowParametersFormGUI' => __DIR__ . '/../..' . '/classes/Series/WorkflowParameters/class.xoctSeriesWorkflowParametersFormGUI.php',
        'xoctUploadFile' => __DIR__ . '/../..' . '/classes/Request/class.xoctUploadFile.php',
        'xoctUser' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctUser.php',
        'xoctUserSetting' => __DIR__ . '/../..' . '/classes/Series/UserSettings/class.xoctUserSetting.php',
        'xoctUserSettings' => __DIR__ . '/../..' . '/classes/Series/UserSettings/class.xoctUserSettings.php',
        'xoctVideoPortalSettingsFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctVideoPortalSettingsFormGUI.php',
        'xoctWaiterGUI' => __DIR__ . '/../..' . '/classes/class.xoctWaiterGUI.php',
        'xoctWorkflowGUI' => __DIR__ . '/../..' . '/classes/Conf/Workflows/class.xoctWorkflowGUI.php',
        'xoctWorkflowParameterFormGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParameterFormGUI.php',
        'xoctWorkflowParameterGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParameterGUI.php',
        'xoctWorkflowParameterTableGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParameterTableGUI.php',
        'xoctWorkflowParametersFormGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParametersFormGUI.php',
        'xoctWorkflowTableGUI' => __DIR__ . '/../..' . '/classes/Conf/Workflows/class.xoctWorkflowTableGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf618280b835f1c6e99e4eb8d8a3e04f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf618280b835f1c6e99e4eb8d8a3e04f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf618280b835f1c6e99e4eb8d8a3e04f0::$classMap;

        }, null, ClassLoader::class);
    }
}
