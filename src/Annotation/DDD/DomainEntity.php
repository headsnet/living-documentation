<?php
declare(strict_types=1);

namespace AlpEs\Common\Domain\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * An object that is not defined by its attributes, but rather
 * by a thread of continuity and its identity.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class DomainEntity
{

}
