<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;

/**
 * Methods for retrieving domain objects should delegate to
 * a specialized Repository object such that alternative
 * storage implementations may be easily interchanged.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Repository
{

}
