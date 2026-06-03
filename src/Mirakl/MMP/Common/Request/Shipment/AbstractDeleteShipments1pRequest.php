<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentCollection;

/**
 * (ST83) Delete 1P shipments
 *
 * @method ShipmentCollection getShipments()
 * @method $this              setShipments(array|ShipmentCollection $shipments)
 */
#[ApiOperation('ST83')]
abstract class AbstractDeleteShipments1pRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/shipments/1p/delete';

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
