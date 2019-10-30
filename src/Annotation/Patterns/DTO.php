<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\Traits\ImmutableTrait;

/**
 * A DTO class is a simple object containing primitive properties
 * used to transfer data between applications or application layers.
 *
 * @see https://en.wikipedia.org/wiki/Data_transfer_object
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class DTO implements LivingDocumentationAnnotation
{
    use ImmutableTrait;

    public function __construct(array $values)
    {
        $this->immutable = $values['immutable'] ?? '';
    }
}
