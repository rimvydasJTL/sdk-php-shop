<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Product\AbstractProductImportRequest;

/**
 * (P41) Import products to Operator Information System
 *
 * @method string getConversionOptions()
 * @method $this  setConversionOptions(string $conversionOptions)
 * @method string getConversionType()
 * @method $this  setConversionType(string $conversionType)
 */
#[ApiOperation('P41')]
class ProductImportRequest extends AbstractProductImportRequest
{
    /**
     * @var array
     */
    public $bodyParams = ['conversion_options', 'conversion_type', 'operator_format'];
}
