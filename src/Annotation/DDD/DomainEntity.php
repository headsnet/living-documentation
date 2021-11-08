<?php
declare(strict_types=1);
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * An object that is not defined by its attributes, but rather
 * by a thread of continuity and its identity.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class DomainEntity implements LivingDocumentationAnnotation
{
}
