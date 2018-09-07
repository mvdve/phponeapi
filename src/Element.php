<?php

namespace PHPOneAPI;

/**
 * Class Element
 * @package PHPOneAPI
 */
class Element {

    /**
     * @var Client;
     */
    protected $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }
}
