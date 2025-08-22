<?php

namespace League\OAuth2\Server\EventEmitting;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcherAwareInterface
{
    public function getEventDispatcher(): EventDispatcherInterface;
    
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): static;
}