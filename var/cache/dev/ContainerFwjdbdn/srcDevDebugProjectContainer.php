<?php

namespace ContainerFwjdbdn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters = [];
    private $targetDirs = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'app\\controller\\defaultcontroller' => 'App\\Controller\\DefaultController',
            'app\\form\\invoicefieldstype' => 'App\\Form\\InvoiceFieldsType',
            'app\\form\\invoicetype' => 'App\\Form\\InvoiceType',
            'app\\repository\\invoicefieldsrepository' => 'App\\Repository\\InvoiceFieldsRepository',
            'app\\repository\\invoicerepository' => 'App\\Repository\\InvoiceRepository',
            'sensiolabs\\security\\command\\securitycheckercommand' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'sensiolabs\\security\\securitychecker' => 'SensioLabs\\Security\\SecurityChecker',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        ];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'validate_request_listener' => 'getValidateRequestListenerService',
        ];
        $this->fileMap = [
            'App\\Controller\\DefaultController' => 'getDefaultControllerService.php',
            'App\\Form\\InvoiceFieldsType' => 'getInvoiceFieldsTypeService.php',
            'App\\Form\\InvoiceType' => 'getInvoiceTypeService.php',
            'App\\Repository\\InvoiceFieldsRepository' => 'getInvoiceFieldsRepositoryService.php',
            'App\\Repository\\InvoiceRepository' => 'getInvoiceRepositoryService.php',
            'SensioLabs\\Security\\Command\\SecurityCheckerCommand' => 'getSecurityCheckerCommandService.php',
            'SensioLabs\\Security\\SecurityChecker' => 'getSecurityCheckerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.annotations' => 'getCache_AnnotationsService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService.php',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService.php',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache.validator' => 'getCache_ValidatorService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService.php',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService.php',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService.php',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService.php',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService.php',
            'doctrine.orm.proxy_cache_warmer' => 'getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService.php',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'doctrine_migrations.diff_command' => 'getDoctrineMigrations_DiffCommandService.php',
            'doctrine_migrations.dump_schema_command' => 'getDoctrineMigrations_DumpSchemaCommandService.php',
            'doctrine_migrations.execute_command' => 'getDoctrineMigrations_ExecuteCommandService.php',
            'doctrine_migrations.generate_command' => 'getDoctrineMigrations_GenerateCommandService.php',
            'doctrine_migrations.latest_command' => 'getDoctrineMigrations_LatestCommandService.php',
            'doctrine_migrations.migrate_command' => 'getDoctrineMigrations_MigrateCommandService.php',
            'doctrine_migrations.rollup_command' => 'getDoctrineMigrations_RollupCommandService.php',
            'doctrine_migrations.status_command' => 'getDoctrineMigrations_StatusCommandService.php',
            'doctrine_migrations.up_to_date_command' => 'getDoctrineMigrations_UpToDateCommandService.php',
            'doctrine_migrations.version_command' => 'getDoctrineMigrations_VersionCommandService.php',
            'file_locator' => 'getFileLocatorService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.registry' => 'getForm_RegistryService.php',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.entity' => 'getForm_Type_EntityService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.transformation_failure_handling' => 'getForm_TypeExtension_Form_TransformationFailureHandlingService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'logger' => 'getLoggerService.php',
            'maker.auto_command.make_auth' => 'getMaker_AutoCommand_MakeAuthService.php',
            'maker.auto_command.make_command' => 'getMaker_AutoCommand_MakeCommandService.php',
            'maker.auto_command.make_controller' => 'getMaker_AutoCommand_MakeControllerService.php',
            'maker.auto_command.make_crud' => 'getMaker_AutoCommand_MakeCrudService.php',
            'maker.auto_command.make_entity' => 'getMaker_AutoCommand_MakeEntityService.php',
            'maker.auto_command.make_fixtures' => 'getMaker_AutoCommand_MakeFixturesService.php',
            'maker.auto_command.make_form' => 'getMaker_AutoCommand_MakeFormService.php',
            'maker.auto_command.make_functional_test' => 'getMaker_AutoCommand_MakeFunctionalTestService.php',
            'maker.auto_command.make_migration' => 'getMaker_AutoCommand_MakeMigrationService.php',
            'maker.auto_command.make_registration_form' => 'getMaker_AutoCommand_MakeRegistrationFormService.php',
            'maker.auto_command.make_serializer_encoder' => 'getMaker_AutoCommand_MakeSerializerEncoderService.php',
            'maker.auto_command.make_serializer_normalizer' => 'getMaker_AutoCommand_MakeSerializerNormalizerService.php',
            'maker.auto_command.make_subscriber' => 'getMaker_AutoCommand_MakeSubscriberService.php',
            'maker.auto_command.make_twig_extension' => 'getMaker_AutoCommand_MakeTwigExtensionService.php',
            'maker.auto_command.make_unit_test' => 'getMaker_AutoCommand_MakeUnitTestService.php',
            'maker.auto_command.make_user' => 'getMaker_AutoCommand_MakeUserService.php',
            'maker.auto_command.make_validator' => 'getMaker_AutoCommand_MakeValidatorService.php',
            'maker.auto_command.make_voter' => 'getMaker_AutoCommand_MakeVoterService.php',
            'maker.console_error_listener' => 'getMaker_ConsoleErrorListenerService.php',
            'maker.doctrine_helper' => 'getMaker_DoctrineHelperService.php',
            'maker.file_manager' => 'getMaker_FileManagerService.php',
            'maker.generator' => 'getMaker_GeneratorService.php',
            'maker.renderer.form_type_renderer' => 'getMaker_Renderer_FormTypeRendererService.php',
            'maker.security_config_updater' => 'getMaker_SecurityConfigUpdaterService.php',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.dynamic' => 'getSwiftmailer_Mailer_Default_Transport_DynamicService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'uri_signer' => 'getUriSignerService.php',
            'validator' => 'getValidatorService.php',
            'validator.builder' => 'getValidator_BuilderService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'web_server.command.server_log' => 'getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => 'getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => 'getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => 'getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => 'getWebServer_Command_ServerStopService.php',
        ];
        $this->privates = [
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'App\\Form\\InvoiceFieldsType' => true,
            'App\\Form\\InvoiceType' => true,
            'App\\Repository\\InvoiceFieldsRepository' => true,
            'App\\Repository\\InvoiceRepository' => true,
            'SensioLabs\\Security\\Command\\SecurityCheckerCommand' => true,
            'SensioLabs\\Security\\SecurityChecker' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'cache.validator' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'doctrine_migrations.diff_command' => true,
            'doctrine_migrations.dump_schema_command' => true,
            'doctrine_migrations.execute_command' => true,
            'doctrine_migrations.generate_command' => true,
            'doctrine_migrations.latest_command' => true,
            'doctrine_migrations.migrate_command' => true,
            'doctrine_migrations.rollup_command' => true,
            'doctrine_migrations.status_command' => true,
            'doctrine_migrations.up_to_date_command' => true,
            'doctrine_migrations.version_command' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.type.choice' => true,
            'form.type.entity' => true,
            'form.type.form' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.transformation_failure_handling' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.validator' => true,
            'fragment.handler' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'maker.auto_command.make_auth' => true,
            'maker.auto_command.make_command' => true,
            'maker.auto_command.make_controller' => true,
            'maker.auto_command.make_crud' => true,
            'maker.auto_command.make_entity' => true,
            'maker.auto_command.make_fixtures' => true,
            'maker.auto_command.make_form' => true,
            'maker.auto_command.make_functional_test' => true,
            'maker.auto_command.make_migration' => true,
            'maker.auto_command.make_registration_form' => true,
            'maker.auto_command.make_serializer_encoder' => true,
            'maker.auto_command.make_serializer_normalizer' => true,
            'maker.auto_command.make_subscriber' => true,
            'maker.auto_command.make_twig_extension' => true,
            'maker.auto_command.make_unit_test' => true,
            'maker.auto_command.make_user' => true,
            'maker.auto_command.make_validator' => true,
            'maker.auto_command.make_voter' => true,
            'maker.console_error_listener' => true,
            'maker.doctrine_helper' => true,
            'maker.file_manager' => true,
            'maker.generator' => true,
            'maker.renderer.form_type_renderer' => true,
            'maker.security_config_updater' => true,
            'monolog.handler.console' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.request' => true,
            'monolog.logger.translation' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.view.listener' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.dynamic' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        ];
        $this->aliases = [
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.mailer.default.transport.real' => 'swiftmailer.mailer.default.transport.dynamic',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.dynamic',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\SaveSessionListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Packages.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\PackageInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Package.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\PathPackage.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\VersionStrategy\\VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\VersionStrategy\\EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Context\\ContextInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\asset\\Context\\RequestStackContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\TranslatorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Translation\\Translator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Formatter\\MessageFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\MessageSelector.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\TranslatorListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\ContainerAwareEventDispatcher.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\ControllerListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\ParamConverterListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\TemplateListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Templating\\TemplateGuesser.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\HttpCacheListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\EventListener\\IsGrantedListener.php';
            include_once $this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle\\Request\\ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\HandlerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\ResettableInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\StreamHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\ProcessorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Processor\\PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Handler\\ConsoleHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ConnectionRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\RegistryInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\AssetExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\InitRuntimeInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\InitRuntimeInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
            include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Log\\DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\monolog-bridge\\Logger.php';
            include_once $this->targetDirs[3].'\\vendor\\monolog\\monolog\\src\\Monolog\\Handler\\NullHandler.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\LoggingTranslator.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'kernel:loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.translation']) ? $this->services['monolog.logger.translation'] : $this->getMonolog_Logger_TranslationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8']);

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'};
        $b = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'};
        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('dev');
        $c->setDebug(true);
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : ($this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))) && false ?: '_'}, ($this->targetDirs[3].'\\src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addGlobal('app', $c);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), []);
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : ($this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this))) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : ($this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker())) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : ($this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : ($this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : ($this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : ($this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : ($this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : ($this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())) && false ?: '_'};
        }, 6)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : ($this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : ($this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : ($this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : ($this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : ($this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['maker.console_error_listener']) ? $this->services['maker.console_error_listener'] : ($this->services['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber())) && false ?: '_'};
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['maker.console_error_listener']) ? $this->services['maker.console_error_listener'] : ($this->services['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber())) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -128);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : ($this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())) && false ?: '_'}), NULL);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.null_internal']) ? $this->services['monolog.handler.null_internal'] : ($this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, NULL), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        }]));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(['translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : ($this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : ($this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : ($this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : ($this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : ($this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : ($this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : ($this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : ($this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : ($this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : ($this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader())) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : ($this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader())) && false ?: '_'};
        }]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.af.xlf')], 'ar' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ar.xlf')], 'az' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.az.xlf')], 'be' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.be.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.bg.xlf')], 'ca' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ca.xlf')], 'cs' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.cs.xlf')], 'cy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.da.xlf')], 'de' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.de.xlf')], 'el' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.el.xlf')], 'en' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.en.xlf')], 'es' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.es.xlf')], 'et' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.et.xlf')], 'eu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.eu.xlf')], 'fa' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.fa.xlf')], 'fi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.fi.xlf')], 'fr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.fr.xlf')], 'gl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.gl.xlf')], 'he' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.he.xlf')], 'hr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.hr.xlf')], 'hu' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.hu.xlf')], 'hy' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.id.xlf')], 'it' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.it.xlf')], 'ja' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ja.xlf')], 'lb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.lb.xlf')], 'lt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.lt.xlf')], 'lv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.lv.xlf')], 'mn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.nb.xlf')], 'nl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.nl.xlf')], 'nn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.no.xlf')], 'pl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.pl.xlf')], 'pt' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.pt.xlf')], 'pt_BR' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.pt_BR.xlf')], 'ro' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ro.xlf')], 'ru' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.ru.xlf')], 'sk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sk.xlf')], 'sl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sl.xlf')], 'sq' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Latn.xlf')], 'sv' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.sv.xlf')], 'th' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.th.xlf')], 'tl' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.tr.xlf')], 'uk' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.uk.xlf')], 'vi' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.vi.xlf')], 'zh_CN' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\form/Resources/translations\\validators.zh_CN.xlf')], 'zh_TW' => [0 => ($this->targetDirs[3].'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_TW.xlf')]]]);

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Twig\Loader\FilesystemLoader([], $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/templates'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'debug.container.dump' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'twig.default_path' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\log'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'WebServerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'SensioDistributionBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'MonologBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DoctrineCacheBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SwiftmailerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'SensioGeneratorBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ],
                'MakerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'TwigBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
            ]; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcDevDebugProjectContainer.xml'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ],
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => false,
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'srcDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'srcDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel:loadRoutes',
            'router.cache_class_prefix' => 'srcDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'console.command.ids' => [
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'doctrine_migrations.diff_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsdumpschemadoctrinecommand' => 'doctrine_migrations.dump_schema_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'doctrine_migrations.execute_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'doctrine_migrations.generate_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'doctrine_migrations.latest_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'doctrine_migrations.migrate_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsrollupdoctrinecommand' => 'doctrine_migrations.rollup_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'doctrine_migrations.status_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsuptodatedoctrinecommand' => 'doctrine_migrations.up_to_date_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'doctrine_migrations.version_command',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.symfony_bundle_makerbundle_command_makercommand' => 'maker.auto_command.make_migration',
            ],
            'console.lazy_command.ids' => [
                'SensioLabs\\Security\\Command\\SecurityCheckerCommand' => true,
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
                'sensio_distribution.security_checker.command' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine_migrations.diff_command' => true,
                'doctrine_migrations.dump_schema_command' => true,
                'doctrine_migrations.execute_command' => true,
                'doctrine_migrations.generate_command' => true,
                'doctrine_migrations.latest_command' => true,
                'doctrine_migrations.migrate_command' => true,
                'doctrine_migrations.rollup_command' => true,
                'doctrine_migrations.status_command' => true,
                'doctrine_migrations.up_to_date_command' => true,
                'doctrine_migrations.version_command' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'maker.auto_command.make_auth' => true,
                'maker.auto_command.make_command' => true,
                'maker.auto_command.make_controller' => true,
                'maker.auto_command.make_crud' => true,
                'maker.auto_command.make_entity' => true,
                'maker.auto_command.make_fixtures' => true,
                'maker.auto_command.make_form' => true,
                'maker.auto_command.make_functional_test' => true,
                'maker.auto_command.make_registration_form' => true,
                'maker.auto_command.make_serializer_encoder' => true,
                'maker.auto_command.make_serializer_normalizer' => true,
                'maker.auto_command.make_subscriber' => true,
                'maker.auto_command.make_twig_extension' => true,
                'maker.auto_command.make_unit_test' => true,
                'maker.auto_command.make_validator' => true,
                'maker.auto_command.make_voter' => true,
                'maker.auto_command.make_user' => true,
                'maker.auto_command.make_migration' => true,
            ],
        ];
    }
}
