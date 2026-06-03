<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Message\AbstractGetOrderMessagesRequest;

/**
 * (M01) List messages of an order (sort by creation date)
 * By default, all sent and received messages are listed
 * Note: this resource supports pagination and will return 10 messages
 * @deprecated
 */
#[ApiOperation('M01')]
class GetOrderMessagesRequest extends AbstractGetOrderMessagesRequest
{
}
