<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Publish a list of email messages sent
 */
final class PublishEmailMessages extends BasePublisher implements EventSubscriberInterface
{
    protected $template = 'email-messages';
}
