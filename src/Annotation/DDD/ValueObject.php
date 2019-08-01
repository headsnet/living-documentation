<?php
declare(strict_types=1);

namespace AlpEs\Common\Domain\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * An object that contains attributes but has no conceptual
 * identity. They should be treated as immutable.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class ValueObject
{

}
