<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Product\Offer;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Product\Offer\AbstractGetOffersOnProductsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Product\Offer\ProductWithOffersCollection;

/**
 * (P11) List offers for each product given
 *
 * This API uses pagination by default and will return 10 offers
 * Result can be sort with bestPrice or bestEvaluation @see AbstractGetOffersOnProductsRequest
 */
#[ApiOperation('P11')]
class GetOffersOnProductsRequest extends AbstractGetOffersOnProductsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ProductWithOffersCollection::decorator('products');
    }
}
