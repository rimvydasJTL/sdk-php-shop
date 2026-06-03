<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipment\AbstractShipShipmentsRequest;

/**
 * (ST24) Validate shipments as shipped (limited to 1000 shipments at a time)
 */
#[ApiOperation('ST24')]
class ShipShipmentsRequest extends AbstractShipShipmentsRequest
{
}
