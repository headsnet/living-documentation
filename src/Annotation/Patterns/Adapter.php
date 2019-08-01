<?php
declare(strict_types=1);

namespace AlpEs\Common\Domain\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;

/**
 * The adapter pattern is a software design pattern that allows the
 * interface of an existing class to be used from another interface.
 *
 * The adapter contains an instance of the class it wraps, and
 * delegates calls to the instance of the wrapped object
 *
 * @see https://en.wikipedia.org/wiki/Adapter_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Adapter
{

}
