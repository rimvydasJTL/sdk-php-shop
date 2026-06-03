<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Message\AbstractCreateOrderMessageRequest;

/**
 * (OR42) Post a message on an order
 * @deprecated
 */
#[ApiOperation('OR42')]
class CreateOrderMessageRequest extends AbstractCreateOrderMessageRequest
{
}
