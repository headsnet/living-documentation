<?php

namespace Headsnet\LivingDocumentation\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Bundle extension.
 */
class HeadsnetLivingDocumentationExtension extends Extension implements PrependExtensionInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
		$loader->load('services.xml');
	}

    /**
     * @param ContainerBuilder $container
     */
    public function prepend(ContainerBuilder $container)
    {
        if (!$container->hasExtension('twig'))
        {
            return;
        }

        $path = dirname(__DIR__, 1).'/../templates';

        $container->prependExtensionConfig('twig', ['paths' => [$path]]);
    }

}
