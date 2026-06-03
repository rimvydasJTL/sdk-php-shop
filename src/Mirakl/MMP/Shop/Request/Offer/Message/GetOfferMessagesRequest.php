<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Message;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\OperatorShop\Request\Offer\Message\AbstractGetOfferMessagesRequest;

/**
 * (M01) List messages of an offer (sort by creation date)
 * Note: this resource supports pagination and will return 10 messages
 * @deprecated
 */
#[ApiOperation('M01')]
class GetOfferMessagesRequest extends AbstractGetOfferMessagesRequest
{
}
