<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusRequest;

/**
 * (P42) Get product import status
 */
#[ApiOperation('P42')]
class ProductImportStatusRequest extends AbstractProductImportStatusRequest
{
}
