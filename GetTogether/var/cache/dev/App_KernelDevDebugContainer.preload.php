<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerSHnD68h\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerSHnD68h/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerSHnD68h/getValidator_ExpressionService.php';
require __DIR__.'/ContainerSHnD68h/getValidator_EmailService.php';
require __DIR__.'/ContainerSHnD68h/getValidator_BuilderService.php';
require __DIR__.'/ContainerSHnD68h/getValidatorService.php';
require __DIR__.'/ContainerSHnD68h/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerSHnD68h/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerSHnD68h/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerSHnD68h/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerSHnD68h/getTwigService.php';
require __DIR__.'/ContainerSHnD68h/getSession_FactoryService.php';
require __DIR__.'/ContainerSHnD68h/getServicesResetterService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_AuthorizationCheckerService.php';
require __DIR__.'/ContainerSHnD68h/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerSHnD68h/getSecrets_VaultService.php';
require __DIR__.'/ContainerSHnD68h/getRouting_LoaderService.php';
require __DIR__.'/ContainerSHnD68h/getPropertyAccessorService.php';
require __DIR__.'/ContainerSHnD68h/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerSHnD68h/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerSHnD68h/getForm_TypeGuesser_Doctrine_MongodbService.php';
require __DIR__.'/ContainerSHnD68h/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerSHnD68h/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerSHnD68h/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerSHnD68h/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerSHnD68h/getForm_Type_MongodbDocumentService.php';
require __DIR__.'/ContainerSHnD68h/getForm_Type_FormService.php';
require __DIR__.'/ContainerSHnD68h/getForm_Type_FileService.php';
require __DIR__.'/ContainerSHnD68h/getForm_Type_EntityService.php';
require __DIR__.'/ContainerSHnD68h/getForm_Type_ColorService.php';
require __DIR__.'/ContainerSHnD68h/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerSHnD68h/getForm_ServerParamsService.php';
require __DIR__.'/ContainerSHnD68h/getForm_RegistryService.php';
require __DIR__.'/ContainerSHnD68h/getForm_FactoryService.php';
require __DIR__.'/ContainerSHnD68h/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerSHnD68h/getErrorControllerService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineOdm_Mongodb_Validator_UniqueService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineMongodb_Odm_StopwatchCommandLoggerService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineMongodb_Odm_PsrCommandLoggerService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineMongodb_Odm_DefaultDocumentManagerService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineMongodb_Odm_DefaultConnectionService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineMongodb_Odm_CommandLoggerRegistryService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineMongodbService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerSHnD68h/getDoctrineService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_Security_Access_DecisionManagerService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerSHnD68h/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerSHnD68h/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerSHnD68h/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerSHnD68h/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerSHnD68h/getCache_SystemClearerService.php';
require __DIR__.'/ContainerSHnD68h/getCache_SystemService.php';
require __DIR__.'/ContainerSHnD68h/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerSHnD68h/getCache_AppClearerService.php';
require __DIR__.'/ContainerSHnD68h/getCache_AppService.php';
require __DIR__.'/ContainerSHnD68h/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerSHnD68h/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerSHnD68h/getTemplateControllerService.php';
require __DIR__.'/ContainerSHnD68h/getRedirectControllerService.php';
require __DIR__.'/ContainerSHnD68h/getUserControllerService.php';
require __DIR__.'/ContainerSHnD68h/getResetPasswordControllerService.php';
require __DIR__.'/ContainerSHnD68h/getRegistrationControllerService.php';
require __DIR__.'/ContainerSHnD68h/getIndexControllerService.php';
require __DIR__.'/ContainerSHnD68h/getHomeControllerService.php';
require __DIR__.'/ContainerSHnD68h/getEventControllerService.php';
require __DIR__.'/ContainerSHnD68h/getChatControllerService.php';
require __DIR__.'/ContainerSHnD68h/getAuthenticationControllerService.php';
require __DIR__.'/ContainerSHnD68h/get_ServiceLocator_MGHEj8dService.php';
require __DIR__.'/ContainerSHnD68h/get_ServiceLocator_L1ae_QzService.php';
require __DIR__.'/ContainerSHnD68h/get_ServiceLocator_KfbR3DYService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\AuthenticationController';
$classes[] = 'App\Controller\ChatController';
$classes[] = 'App\Controller\EventController';
$classes[] = 'App\Controller\HomeController';
$classes[] = 'App\Controller\IndexController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Controller\ResetPasswordController';
$classes[] = 'App\Controller\UserController';
$classes[] = 'App\Security\AppCustomAuthenticator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerRegistry';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\CommandLoggerRegistry';
$classes[] = 'Doctrine\ODM\MongoDB\APM\CommandLogger';
$classes[] = 'MongoDB\Client';
$classes[] = 'Doctrine\ODM\MongoDB\DocumentManager';
$classes[] = 'Doctrine\ODM\MongoDB\Configuration';
$classes[] = 'Doctrine\ODM\MongoDB\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\ManagerConfigurator';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\PSRCommandLogger';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\APM\StopwatchCommandLogger';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/ec/ec8cb689222f7b256c2fc4f9de95ac6d3ba0cb20b9e87d45e47457be5b6bb0af.php';
require_once __DIR__.'/twig/ac/acb176ac070a2ae1a59e2562ce5c45ed126d702699ee10af34384862cf7363b9.php';
require_once __DIR__.'/twig/51/51d119b906a6c30ff55b6245973c07c0a76c249df7e5752197c1904f4b7aeeb0.php';
require_once __DIR__.'/twig/24/24ad60c3b2829269a811b5b1f4b588577b064cac64fd50ee7e6e9b8a04ea6e7e.php';
require_once __DIR__.'/twig/9d/9da525e88b67d43b9a70e90d75af70de5fb1fb9a594ad2070d5fe6ac1b146c6f.php';
require_once __DIR__.'/twig/15/15ededb4b2005153828c6f190460b284b052d28a92abf1fc0ba4c860aa4c94d7.php';
require_once __DIR__.'/twig/10/10aa602a82180db9d8c1c6ae09202a0612ed7848ae9ce8d66f3776f771222bfb.php';
require_once __DIR__.'/twig/12/120b43a031dc4ddcd693efe9f02912110ea6a24e1acbf6ad6487cb4c601fe0ac.php';
require_once __DIR__.'/twig/f2/f20ae1c62c5e66a988248bbe6970cb6916e1a03b1dbe14bd6a0f6e6bb82dafbb.php';
require_once __DIR__.'/twig/3e/3e4ee3d1b8296c8608debba926573ddb496f960edee2d47f67dcc5cba4fcee52.php';
require_once __DIR__.'/twig/92/92478caeebacee8479119de2dd6c9e9568951a90088732192954ffc8bf2703cd.php';
require_once __DIR__.'/twig/6c/6c2cd4a7e8dcaf8ffd84166ddf905f1dab5406ad6096b5fce6cc1dd310bbc010.php';
require_once __DIR__.'/twig/d4/d44db3c6dc0ae474920cf4ec782c8d30b56dff41842066e0760314525953ad3f.php';
require_once __DIR__.'/twig/af/af8c8afc7e74adc3aac1e9a0c5b8d19ce13f259cc515f7bbfdf5e760a3f7a01a.php';
require_once __DIR__.'/twig/30/305f936f1fea6713a907cea472454ebaa8e0c51416ec5efa09b13865546b3e01.php';
require_once __DIR__.'/twig/63/63a2b3b0076d199046675158f59660e8a444c90ee664614e90b5ff70c856651e.php';
require_once __DIR__.'/twig/da/da870a0f3ec45eee959befa4f6e727fecbd571574942ce7689c32505b5357366.php';
require_once __DIR__.'/twig/61/6191624acb65b1413be0b3c57b2124ae4a12ae5e1d6f8ba154f349225898ba2d.php';
require_once __DIR__.'/twig/12/12f95c3b61f6d4be753507a01d0601e763e4bb2e2e26b6d9c489ae7e1fc6ba78.php';
require_once __DIR__.'/twig/78/78199a50735c15cae8802a88f0441f19d64f2e0be9f1f4ae76e4109b62dba536.php';
require_once __DIR__.'/twig/04/04e6f6aa8f8a4e41ad643524ae743bb2ed3b6a987ff8b6db609b720fe1592ec8.php';
require_once __DIR__.'/twig/c8/c8d7055903f5f9985621956337598150f8a837f0a11bac1ee6bc511d89ce9ac2.php';
require_once __DIR__.'/twig/81/81c674f6e97254b68efbec37f4afcdf1d044515a5f30934a470459e2c9b02af3.php';
require_once __DIR__.'/twig/a8/a82a9faef0ed26de6d942a28a1229ffff4243f2864b935916159015a9d344a1e.php';
require_once __DIR__.'/twig/0b/0ba5a5b01e5f45a4cf7e1ef8f1a8277a99043da1c829d9e79d33d0ada7a2c118.php';
require_once __DIR__.'/twig/18/18bb7e98eb67133a65525a12223ecef4cec5ac54591a888907d76c56b83793b1.php';
require_once __DIR__.'/twig/a9/a9f76b0f3b80307ec5f867a37b8890b0abb4b5460dd4d2c104d690462b15cb35.php';
require_once __DIR__.'/twig/27/2756ace038742948ccd5764472adef39abffdc1cd81a5a8e46aa4e27e65ba0f3.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$preloaded = Preloader::preload($classes, $preloaded);
