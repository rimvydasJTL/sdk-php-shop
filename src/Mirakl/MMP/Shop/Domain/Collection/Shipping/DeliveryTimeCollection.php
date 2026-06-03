<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Shipping\DeliveryTime;

/**
 * @method DeliveryTime current()
 * @method DeliveryTime first()
 * @method DeliveryTime get($offset)
 * @method DeliveryTime last()
 * @method DeliveryTime offsetGet($offset)
 */
class DeliveryTimeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DeliveryTime::class;
}
