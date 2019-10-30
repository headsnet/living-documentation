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

    public function __construct(array $values)
    {
        $this->value = $values['value'] ?? '';
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
