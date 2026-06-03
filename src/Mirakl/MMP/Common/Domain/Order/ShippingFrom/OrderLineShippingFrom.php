<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\ShippingFrom;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method OrderLineShippingFromAddress   getAddress()
 * @method $this                          setAddress(array|OrderLineShippingFromAddress $address)
 * @method OrderLineShippingFromWarehouse getWarehouse()
 * @method $this                          setWarehouse(array|OrderLineShippingFromWarehouse $warehouse)
 */
class OrderLineShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'   => [OrderLineShippingFromAddress::class, 'create'],
        'warehouse' => [OrderLineShippingFromWarehouse::class, 'create'],
    ];
}
