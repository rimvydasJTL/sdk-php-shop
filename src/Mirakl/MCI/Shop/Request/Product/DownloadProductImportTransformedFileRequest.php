<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractDownloadProductImportTransformedFileRequest;

/**
 * (P46) Get transformed file for a products import
 */
#[ApiOperation('P46')]
class DownloadProductImportTransformedFileRequest extends AbstractDownloadProductImportTransformedFileRequest
{
}
