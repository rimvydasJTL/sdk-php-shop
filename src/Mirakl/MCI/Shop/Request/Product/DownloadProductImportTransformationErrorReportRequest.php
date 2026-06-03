<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformationErrorReportRequest;

/**
 * (P47) Get transformation errors report file for a product import
 */
#[ApiOperation('P47')]
class DownloadProductImportTransformationErrorReportRequest extends AbstractDownloadProductImportTransformationErrorReportRequest
{
}
