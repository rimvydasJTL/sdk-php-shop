<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Message\AbstractGetThreadsRequest;

/**
 * (M11) List all threads
 */
#[ApiOperation('M11')]
class GetThreadsRequest extends AbstractGetThreadsRequest
{
}
