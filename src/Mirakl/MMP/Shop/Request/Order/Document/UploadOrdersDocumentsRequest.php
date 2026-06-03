<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Document\AbstractUploadOrdersDocumentsRequest;

/**
 * (OR74) Upload documents to associate to an order
 *
 * Documents filenames must be distinct. Only documents of the following types are supported:
 * csv, doc, xls, ppt, pdf, odt, ods, odp, txt, rtf, png, jpg, gif.
 * An order can have a maximum of 50 documents.
 */
#[ApiOperation('OR74')]
class UploadOrdersDocumentsRequest extends AbstractUploadOrdersDocumentsRequest
{
}
