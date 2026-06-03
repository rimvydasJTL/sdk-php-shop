<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (ST82) List 1P shipments
 *
 * @method \DateTime getLastUpdatedFrom()
 * @method $this     setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method string[]  getOrderReference()
 * @method $this     setOrderReference(string[] $orderReference)
 * @method string[]  getShipmentReference()
 * @method $this     setShipmentReference(string[] $shipmentReference)
 */
#[ApiOperation('ST82')]
abstract class AbstractGetShipments1pRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipments/1p';

    /**
     * @var array
     */
    public $queryParams = [
        'last_updated_from',
        'order_reference',
        'shipment_reference',
    ];

    /**
     * @var array
     */
    protected $duplicatedQueryParams = ['order_reference', 'shipment_reference'];
}
