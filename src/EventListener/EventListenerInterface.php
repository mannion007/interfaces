<?php

namespace Mannion007\Interfaces\EventHandler;

use Mannion007\Interfaces\Event\EventInterface;

interface EventListenerInterface
{
    public function handle(EventInterface $event): void;
}
