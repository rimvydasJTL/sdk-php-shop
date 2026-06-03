<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingZonesRequest;

/**
 * (SH11) List all shipping zones
 */
#[ApiOperation('SH11')]
class GetShippingZonesRequest extends AbstractGetShippingZonesRequest
{
}
