<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Use this annotation on key components of the core domain.
 *
 * From Evans' book - "Flag each element of the CORE DOMAIN within the
 * primary repository of the model, without particularly trying to
 * elucidate its role. Make it effortless for a  developer to know what
 * is in or out of the CORE."
 *
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class CoreConcept extends BaseAnnotation implements LivingDocumentationAnnotation
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
