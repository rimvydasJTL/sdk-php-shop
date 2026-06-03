<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentSuccessCollection;

/**
 * @method ShipmentErrorCollection   getShipmentErrors()
 * @method $this                     setShipmentErrors(array|ShipmentErrorCollection $shipmentErrors)
 * @method ShipmentSuccessCollection getShipmentSuccess()
 * @method $this                     setShipmentSuccess(array|ShipmentSuccessCollection $shipmentSuccess)
 */
class Shipments extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_errors'  => [ShipmentErrorCollection::class, 'create'],
        'shipment_success' => [ShipmentSuccessCollection::class, 'create'],
    ];
}
