<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipment\AbstractUpdateShipmentTrackingsRequest;

/**
 * (ST23) Update carrier tracking information for shipments
 *
 * If the carrier is not registered, the complete tracking url can be provided.
 * Limited to 1000 shipments at a time.
 */
#[ApiOperation('ST23')]
class UpdateShipmentTrackingsRequest extends AbstractUpdateShipmentTrackingsRequest
{
}
