<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;

/**
 * (ST25) Validate shipments as received (limited to 1000 shipments at a time)
 */
#[ApiOperation('ST25')]
abstract class AbstractReceiveShipmentsRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/receive';
}
