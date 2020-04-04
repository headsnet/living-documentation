<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * Use this annotation on components of an anti corruption layer.
 *
 * From Evans' book - "Create an isolating layer to provide clients with functionality in terms of
 * their own domain model. The layer talks to the other system through its existing interface,
 * requiring little or no modification to the other system. Internally, the layer translates in both
 * directions as necessary between the two models."
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class AntiCorruptionLayer extends BaseAnnotation implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
