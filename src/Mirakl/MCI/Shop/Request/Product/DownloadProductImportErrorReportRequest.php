<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportErrorReportRequest;

/**
 * (P44) Get errors report file for a products import
 */
#[ApiOperation('P44')]
class DownloadProductImportErrorReportRequest extends AbstractDownloadProductImportErrorReportRequest
{
}
