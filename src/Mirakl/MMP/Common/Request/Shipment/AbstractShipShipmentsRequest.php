<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;

/**
 * (ST24) Validate shipments as shipped (limited to 1000 shipments at a time)
 */
#[ApiOperation('ST24')]
abstract class AbstractShipShipmentsRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/ship';
}
