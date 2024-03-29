<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * A collection of objects that are bound together by a root entity,
 * otherwise known as an aggregate root. The aggregate root guarantees
 * the consistency of changes being made within the aggregate by
 * forbidding external objects from holding references to its members.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class AggregateRoot implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
