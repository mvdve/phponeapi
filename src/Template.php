<?php

namespace PHPOneAPI;

/**
 * Class Template
 * @package PHPOneAPI
 */
class Template extends Element {

    /**
     * Instantiate a new VM from template.
     *
     * @param int $id
     * @param string $vm_name
     * @param bool $on_hold
     * @param string $extra_template
     * @param bool $private
     *
     * @return mixed
     */
    public function instantiate($id, $vm_name, $on_hold = false, $extra_template = '', $private = false) {
        $args = [$id, $vm_name, $on_hold, $extra_template, $private];

        return $this->client->call('one.template.instantiate', $args);
    }
}
