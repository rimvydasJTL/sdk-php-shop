<?php

declare(strict_types=1);

namespace Mirakl\MCM\Shop\Request\Catalog\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCM\Common\Request\Catalog\Product\AbstractGetSourceProductDataSheetStatusRequest;

/**
 * (CM11) Downloads the source product data sheet status as an iterable collection
 */
#[ApiOperation('CM11')]
class GetSourceProductDataSheetStatusRequest extends AbstractGetSourceProductDataSheetStatusRequest
{
}
