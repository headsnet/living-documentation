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

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->value = $values['value'] ?? '';
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
