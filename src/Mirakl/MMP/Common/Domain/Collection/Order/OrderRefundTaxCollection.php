<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\OrderRefundTax;

/**
 * @method OrderRefundTax current()
 * @method OrderRefundTax first()
 * @method OrderRefundTax get($offset)
 * @method OrderRefundTax last()
 * @method OrderRefundTax offsetGet($offset)
 */
class OrderRefundTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderRefundTax::class;
}
