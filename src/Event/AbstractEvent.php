<?php

declare(strict_types=1);

namespace League\OAuth2\Server\Event;

use Psr\EventDispatcher\StoppableEventInterface;

class AbstractEvent implements StoppableEventInterface
{
    private bool $propagationStopped = false;

    public function isPropagationStopped(): bool
    {
        return $this->propagationStopped;
    }

    public function stopPropagation(): self
    {
        $this->propagationStopped = true;

        return $this;
    }
}
