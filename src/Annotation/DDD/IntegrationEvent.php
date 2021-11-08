<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * An integration event is a Domain Event that is intended
 * to communicate activity to external Bounded Contexts.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class IntegrationEvent implements LivingDocumentationAnnotation
{
}
