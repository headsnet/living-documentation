<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * An object that contains attributes but has no conceptual
 * identity. They should be treated as immutable.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class ValueObject implements LivingDocumentationAnnotation
{

}
