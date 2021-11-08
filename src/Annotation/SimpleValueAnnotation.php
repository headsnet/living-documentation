<?php

namespace Headsnet\LivingDocumentation\Annotation;

trait SimpleValueAnnotation
{
    /**
     * @var string
     *
     * @Required
     */
    private $value;

    public function __construct(string $value = '')
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
