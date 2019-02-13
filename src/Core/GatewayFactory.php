<?php
namespace Finance\Core;

use Finance\Core\Interfaces\GatewayInterface;

class Gateway implements GatewayInterface {
    public function getName() {
        return 'My Payment Gateway';
    }
}

class GatewayFactory
{
    /**
     * @param $name
     * @return GatewayInterface
     */
    public function create($name) {
        return new Gateway();
    }
}
