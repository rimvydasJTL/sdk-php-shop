<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractProductImportStatusesRequest;

/**
 * (P51) Get product import statuses
 */
#[ApiOperation('P51')]
class ProductImportStatusesRequest extends AbstractProductImportStatusesRequest
{
}
