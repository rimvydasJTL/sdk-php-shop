<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Message\AbstractGetThreadDetailsRequest;

/**
 * (M10) Retrieve a thread
 */
#[ApiOperation('M10')]
class GetThreadDetailsRequest extends AbstractGetThreadDetailsRequest
{
}
