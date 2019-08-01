<?php
declare(strict_types=1);

namespace AlpEs\Common\Domain\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * When an operation does not conceptually belong to any object.
 * Following the natural contours of the problem, you can implement
 * these operations in services.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class DomainService
{

}
