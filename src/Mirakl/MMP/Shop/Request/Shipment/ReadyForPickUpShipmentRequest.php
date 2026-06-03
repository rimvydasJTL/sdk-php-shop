<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipment\AbstractShipmentsWorkflowRequest;

/**
 * (ST26) Validate shipments as ready to pick up
 */
#[ApiOperation('ST26')]
class ReadyForPickUpShipmentRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/ready_for_pick_up';
}
