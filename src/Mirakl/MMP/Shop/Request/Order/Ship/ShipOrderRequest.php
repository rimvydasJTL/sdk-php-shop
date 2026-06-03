<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Ship;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Ship\AbstractShipOrderRequest;

/**
 * (OR24) Valid the shipment of the order which is in @see AbstractOrderStatus::SHIPPING state
 */
#[ApiOperation('OR24')]
class ShipOrderRequest extends AbstractShipOrderRequest
{
}
