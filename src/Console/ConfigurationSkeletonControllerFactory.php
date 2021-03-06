<?php

namespace ZF\Doctrine\GraphQL\Console;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * @codeCoverageIgnore
 */
final class ConfigurationSkeletonControllerFactory implements
    FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $instance = new $requestedName($container);

        $console = $container->get('console');
        $instance->setConsole($console);

        return $instance;
    }
}
