<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipment\AbstractDeleteShipmentRequest;

/**
 * (ST06) Delete shipments in shipping status
 */
#[ApiOperation('ST06')]
class DeleteShipmentsRequest extends AbstractDeleteShipmentRequest
{
}
