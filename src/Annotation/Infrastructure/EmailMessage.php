<?php
namespace Headsnet\LivingDocumentation\Annotation\Infrastructure;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Use this annotation to augment code that sends an email message.
 *
 * This will then be shown in the Email Messages Report
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
final class EmailMessage extends BaseAnnotation implements LivingDocumentationAnnotation
{
    /**
     * @var string
     * @Required
     */
    private $messageName;

    /**
     * @var string
     */
    private $description;

    /**
     * @param array $values
     */
    public function __construct(array $values)
    {
        $this->messageName = $values['messageName'];
        $this->description = $values['description'] ?? '';
    }

    /**
     * @return string
     */
    public function getMessageName(): string
    {
        return $this->convertMultiLine($this->messageName);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}
