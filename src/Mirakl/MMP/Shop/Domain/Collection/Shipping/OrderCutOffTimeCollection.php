<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Shipping\OrderCutOffTime;

/**
 * @method OrderCutOffTime current()
 * @method OrderCutOffTime first()
 * @method OrderCutOffTime get($offset)
 * @method OrderCutOffTime last()
 * @method OrderCutOffTime offsetGet($offset)
 */
class OrderCutOffTimeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderCutOffTime::class;
}
