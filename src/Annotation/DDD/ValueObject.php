<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * An object that contains attributes but has no conceptual
 * identity. They should be treated as immutable.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class ValueObject extends BaseAnnotation implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
