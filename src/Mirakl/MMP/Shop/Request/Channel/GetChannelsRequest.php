<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Channel;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Channel\AbstractGetChannelsRequest;

/**
 * (CH11) List all enabled channels
 */
#[ApiOperation('CH11')]
class GetChannelsRequest extends AbstractGetChannelsRequest
{
}
