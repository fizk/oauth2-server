<?php

namespace League\OAuth2\Server\Event;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcherAwareInterface
{
    public function getEventDispatcher(): EventDispatcherInterface;
    
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): static;
}