<?php

/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

declare(strict_types=1);

namespace League\OAuth2\Server\Event;

use League\OAuth2\Server\Event\AbstractEvent;
use Psr\Http\Message\ServerRequestInterface;

class RequestEvent extends AbstractEvent
{
    public function __construct(private ServerRequestInterface $request)
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function getRequest(): ServerRequestInterface
    {
        return $this->request;
    }
}
