<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

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
    /**
     * @var string
     * @Required
     */
    private $event;

    /**
     * @var string
     */
    private $description;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->event = $values['event'];
        $this->description = $values['description'] ?? '';
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->convertMultiLine($this->event);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}