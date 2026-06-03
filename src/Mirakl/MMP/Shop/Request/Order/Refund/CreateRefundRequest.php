<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Refund;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\OperatorShop\Domain\Order\Refund\RefundsCreated;
use Mirakl\MMP\OperatorShop\Request\Order\Refund\AbstractCreateRefundRequest;

/**
 * (OR28) Demand refunds on order lines
 */
#[ApiOperation('OR28')]
class CreateRefundRequest extends AbstractCreateRefundRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return RefundsCreated::decorator();
    }
}
