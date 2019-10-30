<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;
use Headsnet\LivingDocumentation\Annotation\Traits\IdempotentTrait;

/**
 * An Event Handler is a class that receives Event
 * objects from the Event Bus, and acts on them accordingly.
 *
 * Event Handlers live in the application layer and should
 * be a thin service that coordinates domain objects.
 *
 * @see https://en.wikipedia.org/wiki/Command_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class EventHandler extends BaseAnnotation implements LivingDocumentationAnnotation
{
    use IdempotentTrait;

    /**
     * @var string
     * @Required
     */
    private $event;

    /**
     * @var string
     */
    private $description;

    public function __construct(array $values)
    {
        $this->event = $values['event'];
        $this->description = $values['description'] ?? '';
        $this->idempotent = $values['idempotent'] ?? '';
    }

    public function getEvent(): string
    {
        return $this->convertMultiLine($this->event);
    }

    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}
