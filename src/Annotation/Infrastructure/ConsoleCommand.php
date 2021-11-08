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
#[\Attribute(\Attribute::TARGET_CLASS)]
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

    public function __construct(string $commandName, string $description = '')
    {
        $this->commandName = $commandName;
        $this->description = $description;
    }

    public function getCommandName(): string
    {
        return $this->convertMultiLine($this->commandName);
    }

    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}
