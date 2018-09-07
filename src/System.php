<?php

namespace PHPOneAPI;

/**
 * Class System
 * @package PHPOneAPI
 */
class System extends Element {

    public function version() {
        return $this->client->call('one.system.version');
    }
}