<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method DeliveryTimeRange getDeliveryTime()
 * @method $this             setDeliveryTime(array|DeliveryTimeRange $deliveryTime)
 * @method string            getSetBy()
 * @method $this             setSetBy(string $setBy)
 * @method string            getShippingTypeCode()
 * @method $this             setShippingTypeCode(string $shippingTypeCode)
 * @method string            getShippingZoneCode()
 * @method $this             setShippingZoneCode(string $shippingZoneCode)
 */
class DeliveryTime extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'delivery_time' => [DeliveryTimeRange::class, 'create'],
    ];
}
