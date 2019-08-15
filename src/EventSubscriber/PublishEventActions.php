<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Publish a list of event actions (EventHandlers)
 */
final class PublishEventActions extends BasePublisher implements EventSubscriberInterface
{
    protected $template = 'event-actions';
}
