<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MCI\Common\Domain\Product\ProductImportTracking;

/**
 * (P41) Import products to Operator Information System
 *
 * @method string getConversionOptions()
 * @method $this  setConversionOptions(string $conversionOptions)
 * @method string getConversionType()
 * @method $this  setConversionType(string $conversionType)
 * @method bool   getOperatorFormat()
 * @method bool   isOperatorFormat()
 * @method $this  setOperatorFormat(bool $flag)
 */
#[ApiOperation('P41')]
abstract class AbstractProductImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/products/imports';

    /**
     * @var array
     */
    public $bodyParams = ['conversion_options', 'conversion_type', 'shop', 'operator_format'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ProductImportTracking::decorator();
    }
}
