<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * Use this annotation on key components of the core domain.
 *
 * From Evans' book - "Flag each element of the CORE DOMAIN within the
 * primary repository of the model, without particularly trying to
 * elucidate its role. Make it effortless for a  developer to know what
 * is in or out of the CORE."
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
final class CoreBehaviour extends BaseAnnotation implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
