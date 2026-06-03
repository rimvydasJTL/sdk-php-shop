<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Document\AbstractGetOrderDocumentsRequest;

/**
 * (OR72) List order's documents
 */
#[ApiOperation('OR72')]
class GetOrderDocumentsRequest extends AbstractGetOrderDocumentsRequest
{
}
