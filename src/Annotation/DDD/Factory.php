<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Methods for creating domain objects should delegate
 * to a specialized Factory object such that alternative
 * implementations may be easily interchanged.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Factory implements LivingDocumentationAnnotation
{
}
