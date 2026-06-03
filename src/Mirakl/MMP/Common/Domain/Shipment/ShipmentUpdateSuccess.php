<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentAdditionalInformationCollection;

/**
 * @method ShipmentAdditionalInformationCollection getShipmentAdditionalInformation()
 * @method $this                                   setShipmentAdditionalInformation(array|ShipmentAdditionalInformationCollection $shipmentAdditionalInformation)
 * @method string                                  getShipmentId()
 * @method $this                                   setShipmentId(string $shipmentId)
 */
class ShipmentUpdateSuccess extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_additional_information' => [ShipmentAdditionalInformationCollection::class, 'create'],
    ];
}
