<?php
namespace Headsnet\LivingDocumentation\Annotation\Infrastructure;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Use this annotation to augment console commands.
 *
 * This can then be used to curate a list of available console
 * commands in the application, along with their descriptions.
 *
 * @Annotation
 * @Target({"CLASS"})
 */
final class ConsoleCommand extends BaseAnnotation implements LivingDocumentationAnnotation
{
    /**
     * @var string
     * @Required
     */
    private $commandName;

    /**
     * @var string
     * @Required
     */
    private $description;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->commandName = $values['commandName'];
        $this->description = $values['description'];
    }

    /**
     * @return string
     */
    public function getCommandName(): string
    {
        return $this->convertMultiLine($this->commandName);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}
