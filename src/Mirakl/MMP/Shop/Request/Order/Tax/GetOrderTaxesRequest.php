<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Tax;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Order\Tax\AbstractGetOrderTaxesRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\Tax\OrderTaxCollection;

/**
 * (OR75) Get the order taxes defined on the platform
 */
#[ApiOperation('OR75')]
class GetOrderTaxesRequest extends AbstractGetOrderTaxesRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return OrderTaxCollection::decorator('taxes');
    }
}
