<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * Methods for creating domain objects should delegate
 * to a specialized Factory object such that alternative
 * implementations may be easily interchanged.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Factory implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
