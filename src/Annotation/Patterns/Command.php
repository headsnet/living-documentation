<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\SimpleValueAnnotation;

/**
 * A Command object is the message sent to a Command Bus,
 * which is subsequently handled by a Command Handler
 *
 * @see https://en.wikipedia.org/wiki/Command_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Command implements LivingDocumentationAnnotation
{
    use SimpleValueAnnotation;
}
