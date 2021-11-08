<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * An infrastructure service lives in the infrastructure layer
 * and may be called by services in the application layer
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class InfrastructureService implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
