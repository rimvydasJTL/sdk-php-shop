<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Accept;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Accept\AbstractAcceptOrderRequest;

/**
 * (OR21) Accept or refuse order lines of an order which are in @see AbstractOrderStatus::WAITING_ACCEPTANCE state
 */
#[ApiOperation('OR21')]
class AcceptOrderRequest extends AbstractAcceptOrderRequest
{
}
