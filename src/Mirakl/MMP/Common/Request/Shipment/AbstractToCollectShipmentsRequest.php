<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;

/**
 * (ST27) Validate the receipt of "Click & Collect" shipments in an operator store (limited to 1000 shipments at a time)
 */
#[ApiOperation('ST27')]
abstract class AbstractToCollectShipmentsRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/to_collect';
}
