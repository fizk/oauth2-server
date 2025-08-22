<?php

namespace LeagueTests\Stubs;

use Psr\EventDispatcher\EventDispatcherInterface;

class EventDispatcherStub implements EventDispatcherInterface {
    private array $events = [];
    
    public function dispatch(object $event)
    {
        if(array_key_exists($event->eventName(), $this->events)) {
            $this->events[$event->eventName()]($event);
        }
    }

    public function subscribeTo($name, $callback)
    {
        $this->events[$name] = $callback;
    }
}