<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\OperatorShop\Request\DocumentRequest\AbstractUploadAccountingDocumentsRequest;

/**
 * (DR74) Upload order-related accounting documents
 *
 * Documents filenames must be distinct.
 * If several formats are required for a document request, they must all be uploaded at once.
 *
 * A maximum of 50 documents can be uploaded simultaneously.
 */
#[ApiOperation('DR74')]
class UploadAccountingDocumentsRequest extends AbstractUploadAccountingDocumentsRequest
{
}
