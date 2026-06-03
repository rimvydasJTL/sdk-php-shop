<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getLogisticClassCode()
 * @method $this  setLogisticClassCode(string $logisticClassCode)
 * @method bool   getOverriddenByShop()
 * @method bool   isOverriddenByShop()
 * @method $this  setOverriddenByShop(bool $overriddenByShop)
 * @method Prices getPrices()
 * @method $this  setPrices(array|Prices $prices)
 * @method string getShippingMethodCode()
 * @method $this  setShippingMethodCode(string $shippingMethodCode)
 * @method string getShippingZoneCode()
 * @method $this  setShippingZoneCode(string $shippingZoneCode)
 */
class Configuration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'prices' => [Prices::class, 'create'],
    ];
}
