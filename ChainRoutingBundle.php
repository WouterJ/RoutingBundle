<?php

namespace Symfony\Cmf\Bundle\ChainRoutingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Cmf\Bundle\ChainRoutingBundle\DependencyInjection\ChainRouterPass;

/**
 * Bundle class
 */
class ChainRoutingBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ChainRouterPass());
    }
}
