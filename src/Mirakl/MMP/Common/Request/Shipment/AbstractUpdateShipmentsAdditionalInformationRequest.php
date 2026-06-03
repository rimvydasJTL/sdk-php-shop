<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentCollection;

/**
 * (ST31) Update shipment additional information
 *
 * @method ShipmentCollection getShipments()
 * @method $this              setShipments(array|ShipmentCollection $shipments)
 */
#[ApiOperation('ST31')]
abstract class AbstractUpdateShipmentsAdditionalInformationRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/shipments/additional_information';

    /**
     * @var array
     */
    public $bodyParams = ['shipments'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipments' => [ShipmentCollection::class, 'create'],
    ];
}
