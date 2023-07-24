<?php

namespace Container6qy4xwG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CalendarRepository' shared autowired service.
     *
     * @return \App\Repository\CalendarRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Repository/DocumentRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Repository/ServiceDocumentRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Repository/ServiceRepositoryTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Repository/ServiceDocumentRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/CalendarRepository.php';

        return $container->privates['App\\Repository\\CalendarRepository'] = new \App\Repository\CalendarRepository(($container->services['doctrine_mongodb'] ?? $container->load('getDoctrineMongodbService')));
    }
}
