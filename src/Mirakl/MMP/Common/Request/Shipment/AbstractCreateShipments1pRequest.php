<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentCollection;

/**
 * (ST81) Create 1P shipments
 *
 * @method ShipmentCollection getShipments()
 * @method $this              setShipments(array|ShipmentCollection $shipments)
 */
#[ApiOperation('ST81')]
abstract class AbstractCreateShipments1pRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/shipments/1p';

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
