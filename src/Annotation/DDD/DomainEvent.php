<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * A domain object that defines an event (something that happens).
 * A domain event is an event that domain experts care about.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class DomainEvent implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
