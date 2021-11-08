<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * A subclass that provides special behavior for particular cases.
 *
 * @see https://martinfowler.com/eaaCatalog/specialCase.html
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class SpecialCase implements LivingDocumentationAnnotation
{

}
