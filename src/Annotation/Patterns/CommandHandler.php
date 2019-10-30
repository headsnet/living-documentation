<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\Traits\IdempotentTrait;

/**
 * A Command Handler is a class that receives Command
 * objects from the Command Bus, and acts on them accordingly.
 *
 * Command Handlers live in the application layer and should
 * be a thin service that coordinates domain objects.
 *
 * @see https://en.wikipedia.org/wiki/Command_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class CommandHandler implements LivingDocumentationAnnotation
{
    use IdempotentTrait;

    public function __construct(array $values)
    {
        $this->idempotent = $values['idempotent'] ?? '';
    }
}
