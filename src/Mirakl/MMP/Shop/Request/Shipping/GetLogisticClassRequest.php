<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipping\AbstractGetLogisticClassRequest;

/**
 * (SH31) List all logistic classes
 */
#[ApiOperation('SH31')]
class GetLogisticClassRequest extends AbstractGetLogisticClassRequest
{
}
