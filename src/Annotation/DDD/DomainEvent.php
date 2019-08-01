<?php
declare(strict_types=1);

namespace AlpEs\Common\Domain\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * A domain object that defines an event (something that happens).
 * A domain event is an event that domain experts care about.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class DomainEvent
{

}
