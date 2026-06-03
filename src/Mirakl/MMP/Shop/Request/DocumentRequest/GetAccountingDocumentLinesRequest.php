<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\OperatorShop\Request\DocumentRequest\AbstractGetAccountingDocumentLinesRequest;

/**
 * (DR12) Get document request lines
 *
 * Sort by creation date (desc by default)
 * This API uses pagination by default and will return 50 documents request lines
 */
#[ApiOperation('DR12')]
class GetAccountingDocumentLinesRequest extends AbstractGetAccountingDocumentLinesRequest
{
}
