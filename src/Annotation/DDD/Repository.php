<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * Methods for retrieving domain objects should delegate to
 * a specialized Repository object such that alternative
 * storage implementations may be easily interchanged.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Repository implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
