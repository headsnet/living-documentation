<?php
declare(strict_types=1);

namespace AlpEs\Common\Domain\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * Methods for creating domain objects should delegate
 * to a specialized Factory object such that alternative
 * implementations may be easily interchanged.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Factory
{

}
