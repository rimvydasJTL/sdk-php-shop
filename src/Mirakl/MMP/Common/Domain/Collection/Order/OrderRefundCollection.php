<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\OrderRefund;

/**
 * @method OrderRefund current()
 * @method OrderRefund first()
 * @method OrderRefund get($offset)
 * @method OrderRefund last()
 * @method OrderRefund offsetGet($offset)
 */
class OrderRefundCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderRefund::class;
}
