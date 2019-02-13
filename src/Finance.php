<?php
namespace Finance;

use Finance\Core\GatewayFactory;

class Finance
{
    /**
     * @var GatewayFactory
     */
    protected static $factory;

    /**
     * @return GatewayFactory
     */
    public static function getFactory() {
        if (is_null(self::$factory)) {
            self::$factory = new GatewayFactory();
        }

        return self::$factory;
    }

    /**
     * @param $gatewayName
     * @return Core\Interfaces\GatewayInterface
     */
    public static function create($gatewayName) {
        return self::getFactory()->create($gatewayName);
    }
}
