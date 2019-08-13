<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\EventSubscriber;

use Headsnet\LivingDocumentation\Event\PublishDocumentation;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Filesystem\Filesystem;
use Twig\Environment;
use Twig\Error\Error;

/**
 * Publish a list of use-cases (application service commands)
 */
final class PublishUseCases implements EventSubscriberInterface
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            PublishDocumentation::class => ['build'],
        ];
    }

    /**
     * @param PublishDocumentation $event
     */
    public function build(PublishDocumentation $event)
    {
        try
        {
            $markdown = $this->twig->render('use-cases.html.twig', [
                'data' => $event->getData(),
                'namespace' => $event->getNamespace()
            ]);
        }
        catch (Error $e)
        {
            die('Error rendering output template:' . $e->getMessage());
        }

        $filesystem = new Filesystem();

        $filesystem->dumpFile(
            sprintf('%s%s/use-cases.md', $event->getOutDir(), $event->getContext()),
            $markdown
        );
    }
}
