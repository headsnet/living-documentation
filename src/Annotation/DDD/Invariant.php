<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * Invariants are business rules/enforcements/requirements that you
 * impose to maintain the integrity of an object at any given time.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Invariant
{
    /**
     * @var string
     */
    public $description;
}
