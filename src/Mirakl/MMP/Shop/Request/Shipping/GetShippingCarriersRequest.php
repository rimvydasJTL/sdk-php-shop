<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingCarriersRequest;

/**
 * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
 */
#[ApiOperation('SH21')]
class GetShippingCarriersRequest extends AbstractGetShippingCarriersRequest
{
}
