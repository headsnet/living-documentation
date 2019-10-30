<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Annotation;

abstract class BaseAnnotation
{
    protected function convertMultiLine(string $value): string
    {
        $value = str_replace(' * ', '', $value);
        $value = str_replace("\n", ' ', $value);
        $value = str_replace("\r", ' ', $value);
        $value = preg_replace("/\s+/", ' ', $value);
        $value = str_replace(' *', "\n\n", $value); // Support blank lines in text as a paragraph

        return $value;
    }
}
