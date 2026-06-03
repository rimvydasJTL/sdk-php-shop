<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipment\AbstractGetShipmentsRequest;

/**
 * (ST11) List shipments (this resource supports seek pagination)
 */
#[ApiOperation('ST11')]
class GetShipmentsRequest extends AbstractGetShipmentsRequest
{
}
