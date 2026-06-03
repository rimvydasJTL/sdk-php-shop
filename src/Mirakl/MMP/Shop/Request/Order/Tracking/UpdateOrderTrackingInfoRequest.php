<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Tracking;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Tracking\AbstractUpdateOrderTrackingInfoRequest;

/**
 * (OR23) Update carrier tracking information of a given order
 */
#[ApiOperation('OR23')]
class UpdateOrderTrackingInfoRequest extends AbstractUpdateOrderTrackingInfoRequest
{
}
