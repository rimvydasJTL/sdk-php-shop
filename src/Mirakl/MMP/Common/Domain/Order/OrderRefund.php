<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\OrderRefundTaxCollection;

/**
 * @method string                   getOrderRefundId()
 * @method $this                    setOrderRefundId(string $orderRefundId)
 * @method OrderRefundTaxCollection getTaxes()
 * @method $this                    setTaxes(array|OrderRefundTaxCollection $taxes)
 */
class OrderRefund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'taxes' => [OrderRefundTaxCollection::class, 'create'],
    ];
}
