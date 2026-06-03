<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string       getId()
 * @method $this        setId(string $id)
 * @method ShippingFrom getShippingFrom()
 * @method $this        setShippingFrom(array|ShippingFrom $shippingFrom)
 */
class ShipmentSuccess extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_from' => [ShippingFrom::class, 'create'],
    ];
}
