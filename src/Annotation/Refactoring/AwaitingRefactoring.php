<?php
namespace Headsnet\LivingDocumentation\Annotation\Refactoring;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * To keep track of items to refactor when planning an application-wide change.
 *
 * When many components in a system have to be refactored towards a new paradigm,
 * instead of attempting to perform these all at once, it is often better to keep
 * the application in a deployable state whilst picking off the refactorings one
 * at a time.
 *
 * This annotation can be used to label specific planned refactorings. It is then
 * searchable to provide a list of refactoring tasks not yet undertaken. Eventually
 * as all the refactorings are completed, the annotation will disappear from the
 * codebase.
 *
 * TIP: Include a link to your Issue Tracker in the description
 *
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 */
final class AwaitingRefactoring extends BaseAnnotation implements LivingDocumentationAnnotation
{
    /**
     * @var string
     * @Required
     */
    private $summary;

    /**
     * @var string
     */
    private $description;

    public function __construct(array $values)
    {
        $this->summary = $values['summary'];
        $this->description = $values['description'] ?? '';
    }

    public function getSummary(): string
    {
        return $this->convertMultiLine($this->summary);
    }

    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}
