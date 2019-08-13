<?php
namespace Headsnet\LivingDocumentation\Annotation\DDD;

use Doctrine\Common\Annotations\Annotation;
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
final class CoreConcept implements LivingDocumentationAnnotation
{
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
        $this->description = $values['description'];
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
