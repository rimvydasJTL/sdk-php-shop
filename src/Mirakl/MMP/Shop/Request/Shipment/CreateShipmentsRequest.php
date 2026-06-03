<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipment\AbstractCreateShipmentsRequest;

/**
 * (ST01) Create shipments (limited to 1000 shipments at a time)
 */
#[ApiOperation('ST01')]
class CreateShipmentsRequest extends AbstractCreateShipmentsRequest
{
}
