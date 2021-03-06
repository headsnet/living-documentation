<?php

namespace Headsnet\LivingDocumentation\Annotation\Traits;

trait ImmutableTrait
{
    /**
     * @var bool
     */
    private $immutable = false;

    public function isImmutable(): bool
    {
        return $this->immutable;
    }
}
