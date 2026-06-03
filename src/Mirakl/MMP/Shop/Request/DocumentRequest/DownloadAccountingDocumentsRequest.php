<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\DocumentRequest;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\DocumentRequest\AbstractDownloadAccountingDocumentsRequest;

/**
 * (DR73) Download accounting documents
 *
 * At least one of the following filters must be applied: document_id or entity_id
 * If more than one document is requested, the output of the API will be a ZIP archive.
 * The tree structure of this archive is as follows:
 * documents-1624624030618.zip
 * |
 * |__ product-logistic-order/
 * |   |__order1-A/|      |__ INV203837.pdf
 * |      |__ INV203837.cxml
 * |   |__order1-B/|      |__ INV203839.pdf
 */
#[ApiOperation('DR73')]
class DownloadAccountingDocumentsRequest extends AbstractDownloadAccountingDocumentsRequest
{
}
