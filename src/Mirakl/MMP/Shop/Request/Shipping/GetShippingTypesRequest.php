<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shipping\AbstractGetShippingTypesRequest;

/**
 * (SH12) List all active shipping methods
 */
#[ApiOperation('SH12')]
class GetShippingTypesRequest extends AbstractGetShippingTypesRequest
{
}
