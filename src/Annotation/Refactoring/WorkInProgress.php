<?php
namespace Headsnet\LivingDocumentation\Annotation\Refactoring;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Labels code that is only part way through a large refactoring.
 *
 * Often code goes through a series of small refactorings in order
 * to achieve a larger refactoring. Sometimes these all have to be
 * completed in order to be left with functioning code, however it
 * is often the case that the code is still fully functional before
 * the larger refactoring is fully completed.
 *
 * This annotation will highlight that the code is being worked on
 * and has not yet reached the intended destination.
 *
 * TIP: Include a link to your Issue Tracker in the description
 *
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
final class WorkInProgress extends BaseAnnotation implements LivingDocumentationAnnotation
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

    public function __construct(string $summary, string $description = '')
    {
        $this->summary = $summary;
        $this->description = $description;
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
