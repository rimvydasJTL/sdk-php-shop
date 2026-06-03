<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Stock;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Offer\Stock\OffersStockImportsResponse;
use Mirakl\MMP\Common\Request\Offer\Stock\AbstractCreateOffersStockImportsRequest;

/**
 * (STO01) Import a stock file
 */
#[ApiOperation('STO01')]
class CreateOffersStockImportsRequest extends AbstractCreateOffersStockImportsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return OffersStockImportsResponse::decorator();
    }
}
