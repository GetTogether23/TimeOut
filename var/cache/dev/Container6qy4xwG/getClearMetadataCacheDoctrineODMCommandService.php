<?php

namespace Container6qy4xwG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClearMetadataCacheDoctrineODMCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Doctrine\Bundle\MongoDBBundle\Command\ClearMetadataCacheDoctrineODMCommand' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\Command\ClearMetadataCacheDoctrineODMCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/ClearCache/MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/mongodb-odm-bundle/Command/ClearMetadataCacheDoctrineODMCommand.php';

        $container->privates['Doctrine\\Bundle\\MongoDBBundle\\Command\\ClearMetadataCacheDoctrineODMCommand'] = $instance = new \Doctrine\Bundle\MongoDBBundle\Command\ClearMetadataCacheDoctrineODMCommand();

        $instance->setName('doctrine:mongodb:cache:clear-metadata');

        return $instance;
    }
}
