<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Stock;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Offer\Stock\OffersStockImportsStatusResponse;
use Mirakl\MMP\Common\Request\Offer\Stock\AbstractGetOffersStockImportsStatusRequest;

/**
 * (STO02) Get information and statistics about an offer stock import
 */
#[ApiOperation('STO02')]
class GetOffersStockImportsStatusRequest extends AbstractGetOffersStockImportsStatusRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return OffersStockImportsStatusResponse::decorator();
    }
}
