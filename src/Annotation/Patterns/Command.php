<?php
namespace Headsnet\LivingDocumentation\Annotation\Patterns;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * A Command object is the message sent to a Command Bus,
 * which is subsequently handled by a Command Handler
 *
 * @see https://en.wikipedia.org/wiki/Command_pattern
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class Command implements LivingDocumentationAnnotation
{
    /**
     * @var string
     * @Required
     */
    private $value;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->value = $values['value'] ?? '';
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
