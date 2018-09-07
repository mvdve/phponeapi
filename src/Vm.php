<?php

namespace PHPOneAPI;

/**
 * Class Vm
 * @package PHPOneAPI
 */
class Vm extends Element {

    const STATE_INIT = 0;
    const STATE_PENDING = 1;
    const STATE_HOLD = 2;
    const STATE_ACTIVE = 3;
    const STATE_STOPPED = 4;
    const STATE_SUSPENDED = 5;
    const STATE_DONE = 6;
    const STATE_POWEROFF = 8;
    const STATE_UNDEPLOYED = 9;
    const STATE_CLONING = 10;
    const STATE_CLONING_FAILURE = 11;

    /**
     * Get the info from a vm.
     *
     * @param int $id
     *
     * @return mixed
     */
    public function info($id) {
        return $this->client->call('one.vm.info', [
            intval($id)
        ]);
    }

    /**
     * Perform an action an a vm. See Open Nebula documentation for available actions.
     *
     * @param string $action
     * @param int $id
     *
     * @return mixed
     *
     * @see https://docs.opennebula.org/5.2/integration/system_interfaces/api.html#one-vm-action
     */
    public function action($action, $id) {
        return $this->client->call('one.vm.action', [
            $action,
            intval($id)
        ]);
    }
}
