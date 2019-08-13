<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Invariants are business rules/enforcements/requirements that you
 * impose to maintain the integrity of an object at any given time.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Invariant implements LivingDocumentationAnnotation
{
    /**
     * @var string
     */
    public $description;
}
