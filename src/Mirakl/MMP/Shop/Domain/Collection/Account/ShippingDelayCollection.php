<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\ShippingDelay;

/**
 * @method ShippingDelay current()
 * @method ShippingDelay first()
 * @method ShippingDelay get($offset)
 * @method ShippingDelay last()
 * @method ShippingDelay offsetGet($offset)
 */
class ShippingDelayCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingDelay::class;
}
