<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * An application service manipulates domain entities and
 * value objects to perform activity on the domain model
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class ApplicationService implements LivingDocumentationAnnotation
{
}
