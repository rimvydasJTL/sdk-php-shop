<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shop\AbstractGetShopDocumentsRequest;

/**
 * (S30) List shop's documents
 */
#[ApiOperation('S30')]
class GetShopDocumentsRequest extends AbstractGetShopDocumentsRequest
{
}
