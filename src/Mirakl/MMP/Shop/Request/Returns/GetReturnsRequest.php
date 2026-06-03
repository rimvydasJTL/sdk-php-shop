<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Returns\AbstractGetReturnsRequest;

/**
 * (RT11) List returns
 */
#[ApiOperation('RT11')]
class GetReturnsRequest extends AbstractGetReturnsRequest
{
}
