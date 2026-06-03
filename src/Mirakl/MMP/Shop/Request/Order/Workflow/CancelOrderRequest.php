<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Workflow;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR29) Cancel an order
 */
#[ApiOperation('OR29')]
class CancelOrderRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/cancel';
}
