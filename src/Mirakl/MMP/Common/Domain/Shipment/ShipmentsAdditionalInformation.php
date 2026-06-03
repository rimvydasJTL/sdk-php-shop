<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentUpdateErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentUpdateSuccessCollection;

/**
 * @method ShipmentUpdateErrorCollection   getShipmentUpdateErrors()
 * @method $this                           setShipmentUpdateErrors(array|ShipmentUpdateErrorCollection $shipmentUpdateErrors)
 * @method ShipmentUpdateSuccessCollection getShipmentUpdateSuccess()
 * @method $this                           setShipmentUpdateSuccess(array|ShipmentUpdateSuccessCollection $shipmentUpdateSuccess)
 */
class ShipmentsAdditionalInformation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_update_errors'  => [ShipmentUpdateErrorCollection::class, 'create'],
        'shipment_update_success' => [ShipmentUpdateSuccessCollection::class, 'create'],
    ];
}
