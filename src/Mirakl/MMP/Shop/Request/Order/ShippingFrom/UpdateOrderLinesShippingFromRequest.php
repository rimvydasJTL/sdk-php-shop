<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\ShippingFrom;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\ShippingFrom\AbstractUpdateOrderLinesShippingFromRequest;

/**
 * (OR07) Update order line shipping origin
 */
#[ApiOperation('OR07')]
class UpdateOrderLinesShippingFromRequest extends AbstractUpdateOrderLinesShippingFromRequest
{
}
