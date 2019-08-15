<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Annotation;

/**
 * Class
 */
abstract class BaseAnnotation
{
    /**
     * {@inheritDoc}
     */
    protected function convertMultiLine(string $value): string
    {
        $value = str_replace(' * ', '', $value);
        $value = str_replace("\n", ' ', $value);
        $value = str_replace("\r", ' ', $value);
        $value = preg_replace("/\s+/", ' ', $value);

        return $value;
    }
}
