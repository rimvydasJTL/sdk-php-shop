<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Get;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Order\AbstractGetOrdersRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection;

/**
 * (OR11) Retrieve orders
 *
 * Sort by creation date, order identifier, shop name and then by index of the order line
 * This API uses pagination by default and will return 10 orders
 */
#[ApiOperation('OR11')]
class GetOrdersRequest extends AbstractGetOrdersRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShopOrderCollection::decorator('orders');
    }
}
