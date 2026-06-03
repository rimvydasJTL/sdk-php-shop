<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportNewProductsReportRequest;

/**
 * (P45) Get products report file for a products import
 */
#[ApiOperation('P45')]
class DownloadProductImportNewProductsReportRequest extends AbstractDownloadProductImportNewProductsReportRequest
{
}
