<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class
 */
final class PublishDocumentation extends Event
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $context;

    /**
     * @var string
     */
    private $outDir;

    /**
     * @param array  $data
     * @param string $namespace
     * @param string $context
     * @param string $outDir
     */
    public function __construct(array $data, string $namespace, string $context, string $outDir)
    {
        $this->data = $data;
        $this->namespace = $namespace;
        $this->context = $context;
        $this->outDir = $outDir;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }

    /**
     * @return string
     */
    public function getOutDir(): string
    {
        return $this->outDir;
    }
}
