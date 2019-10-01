<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\Traits\IdempotentTrait;

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
    use IdempotentTrait;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->idempotent = $values['idempotent'] ?? '';
    }
}
