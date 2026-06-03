<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Offer\AbstractGetOfferRequest;
use Mirakl\MMP\Shop\Domain\Offer\ShopOffer;

/**
 * (OF22) Get information of an offer
 */
#[ApiOperation('OF22')]
class GetOfferRequest extends AbstractGetOfferRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShopOffer::decorator();
    }
}
