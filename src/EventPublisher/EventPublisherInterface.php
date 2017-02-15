<?php

namespace Mannion007\Interfaces\EventPublisher;

use Mannion007\Interfaces\Event\EventInterface;

interface EventPublisherInterface
{
    public function publish(EventInterface $event);
}
