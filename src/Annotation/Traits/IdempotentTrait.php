<?php

namespace Headsnet\LivingDocumentation\Annotation\Traits;

trait IdempotentTrait
{
    /**
     * @var bool
     */
    private $idempotent = false;

    public function isIdempotent(): bool
    {
        return $this->idempotent;
    }
}
