<?php
namespace Headsnet\LivingDocumentation\Annotation\Infrastructure;

use Doctrine\Common\Annotations\Annotation;
use Headsnet\LivingDocumentation\Annotation\BaseAnnotation;
use Headsnet\LivingDocumentation\Annotation\LivingDocumentationAnnotation;

/**
 * Use this annotation to augment code that sends an SMS message.
 *
 * This will then be shown in the SMS Messages Report
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
final class SmsMessage extends BaseAnnotation implements LivingDocumentationAnnotation
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

    public function __construct(string $messageName, string $description = '')
    {
        $this->messageName = $messageName;
        $this->description = $description;
    }

    public function getMessageName(): string
    {
        return $this->convertMultiLine($this->messageName);
    }

    public function getDescription(): string
    {
        return $this->convertMultiLine($this->description);
    }
}
