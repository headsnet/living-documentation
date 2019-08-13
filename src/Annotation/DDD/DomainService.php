<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * When an operation does not conceptually belong to any object.
 * Following the natural contours of the problem, you can implement
 * these operations in services.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class DomainService implements LivingDocumentationAnnotation
{

}
