<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentCollection;

/**
 * (ST07) Update shipment shipping origin
 *
 * @method ShipmentCollection getShipments()
 * @method $this              setShipments(array|ShipmentCollection $shipments)
 */
#[ApiOperation('ST07')]
abstract class AbstractUpdateShipmentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/shipments';

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
