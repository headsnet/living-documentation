<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * The abstract factory pattern provides a way to encapsulate a group of individual
 * factories that have a common theme without specifying their concrete classes.
 *
 * @see https://en.wikipedia.org/wiki/Abstract_factory_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class AbstractFactory implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
