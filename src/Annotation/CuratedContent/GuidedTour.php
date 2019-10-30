<?php
namespace Headsnet\LivingDocumentation\Annotation\CuratedContent;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * A Guided Tour annotation is used in multiple places to describe
 * a sequence of processing. For example, several Guided Tour annotations
 * can be used to lead the reader through the process of receiving a
 * request, processing data, dispatching events and returning a response etc.
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
final class GuidedTour extends BaseAnnotation implements LivingDocumentationAnnotation
{
    /**
     * @var string
     * @Required
     */
    private $name;

    /**
     * @var string
     * @Required
     */
    private $description;

    /**
     * @var int
     * @Required
     */
    private $rank;

    public function __construct(array $values)
    {
        $this->name = $values['name'];
        $this->description = $values['description'];
        $this->rank = $values['rank'];
    }

    public function getName(): string
    {
        return $this->convertMultiLine($this->name);
    }

    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }

    public function getRank(): int
    {
        return $this->rank;
    }
}
