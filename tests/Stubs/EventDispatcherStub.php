<?php

namespace LeagueTests\Stubs;

use Psr\EventDispatcher\EventDispatcherInterface;

class EventDispatcherStub implements EventDispatcherInterface {
    private array $events = [];
    
    public function dispatch(object $event)
    {
        if(array_key_exists(get_class($event), $this->events)) {
            $this->events[get_class($event)]($event);
        }
    }

    public function subscribeTo(string $event, callable $callback)
    {
        $this->events[$event] = $callback;
    }
}