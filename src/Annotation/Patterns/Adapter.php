<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * The adapter pattern is a software design pattern that allows the
 * interface of an existing class to be used from another interface.
 *
 * The adapter contains an instance of the class it wraps, and
 * delegates calls to the instance of the wrapped object
 *
 * @see https://en.wikipedia.org/wiki/Adapter_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Adapter implements LivingDocumentationAnnotation
{
}
