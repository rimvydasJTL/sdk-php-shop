<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shop\Document\AbstractUploadShopDocumentsRequest;

/**
 * (S32) Upload documents to associate to a shop
 *
 * Documents filenames must be distincts and there can be only one file per document type.<br/>
 * The following extensions are supported: csv, doc, xls, ppt, pdf, odt, ods, odp, txt, rtf, png, jpg, gif, zip.
 * NB. A shop can have a maximum of 50 documents.
 */
#[ApiOperation('S32')]
class UploadShopDocumentsRequest extends AbstractUploadShopDocumentsRequest
{
}
