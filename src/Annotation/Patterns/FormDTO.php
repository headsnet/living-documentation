<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Headsnet\LivingDocumentation\Annotation\Traits\ImmutableTrait;

/**
 * A DTO class is a simple object containing primitive properties
 * used to transfer data between applications or application layers.
 *
 * Form DTO's are used as the data object for web forms, and avoid
 * coupling e.g. entities from the domain layer with forms which
 * live in the user interface layer.
 *
 * @see https://en.wikipedia.org/wiki/Data_transfer_object
 * @see https://stovepipe.systems/post/avoiding-entities-in-forms
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class FormDTO
{
    use ImmutableTrait;

    public function __construct(bool $immutable = false)
    {
        $this->immutable = $immutable;
    }
}
