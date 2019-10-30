<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * An infrastructure service lives in the infrastructure layer
 * and may be called by services in the application layer
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class InfrastructureService implements LivingDocumentationAnnotation
{
}
