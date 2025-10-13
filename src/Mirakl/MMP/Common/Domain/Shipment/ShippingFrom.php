<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method ShippingFromAddress   getAddress()
 * @method $this                 setAddress(ShippingFromAddress|array $shippingFromAddress)
 * @method ShippingFromWarehouse getWarehouse()
 * @method $this                 setWarehouse(ShippingFromWarehouse|array $shippingFromWarehouse)
 */
class ShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'   => [ShippingFromAddress::class, 'create'],
        'warehouse' => [ShippingFromWarehouse::class, 'create'],
    ];
}
