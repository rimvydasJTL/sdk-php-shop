<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Returns\AbstractReceiveReturnsRequest;

/**
 * (RT25) Validate returns as received
 */
#[ApiOperation('RT25')]
class ReceiveReturnsRequest extends AbstractReceiveReturnsRequest
{
}
