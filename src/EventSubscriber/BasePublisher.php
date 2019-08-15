<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\EventSubscriber;

use Headsnet\LivingDocumentation\Event\PublishDocumentation;
use Symfony\Component\Filesystem\Filesystem;
use Twig\Environment;
use Twig\Error\Error;

/**
 * @property string $template
 */
abstract class BasePublisher
{
    /**
     * @var Environment
     */
    protected $twig;

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
     *
     * @throws \Exception
     */
    public function build(PublishDocumentation $event)
    {
        if (empty($this->template))
        {
            throw new \Exception('Publisher template must be specified!');
        }

        try
        {
            $markdown = $this->twig->render(sprintf('%s.html.twig', $this->template), [
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
            sprintf('%s%s/%s.md', $event->getOutDir(), $event->getContext(), $this->template),
            $markdown
        );
    }
}
