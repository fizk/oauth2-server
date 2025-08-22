<?php

namespace League\OAuth2\Server\Event;

use Psr\EventDispatcher\EventDispatcherInterface;

trait EventDispatcherAwareTrait
{
    private EventDispatcherInterface $eventDispatcher;

    public function getEventDispatcher(): EventDispatcherInterface
    {
        return $this->eventDispatcher ?? new class implements EventDispatcherInterface {
            public function dispatch(object $event)
            {}
        };
    }
    
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): static
    {
        $this->eventDispatcher = $eventDispatcher;
        return $this;
    }
}