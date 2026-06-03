<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Product\AbstractGetProductsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Product\ProductCollection;

/**
 * (P31) Get products for a list of product's references
 *
 * Sort by product sku and then by product identifier
 * Note: this resource return 100 products maximum
 */
#[ApiOperation('P31')]
class GetProductsRequest extends AbstractGetProductsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ProductCollection::decorator('products');
    }
}
