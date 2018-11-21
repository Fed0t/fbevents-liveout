<?php

namespace Fed0t\LiveoutEvents\Clients;
use Http\Message\MessageFactory;
use Http\Discovery\MessageFactoryDiscovery;

class Guzzle
{
    public function __construct(MessageFactory $requestFactory = null) {
        $this->requestFactory = $requestFactory ?: MessageFactoryDiscovery::find(),
    }
}