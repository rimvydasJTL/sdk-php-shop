<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\ConsecutiveRefusedOrdersCount;

/**
 * @method ConsecutiveRefusedOrdersCount current()
 * @method ConsecutiveRefusedOrdersCount first()
 * @method ConsecutiveRefusedOrdersCount get($offset)
 * @method ConsecutiveRefusedOrdersCount last()
 * @method ConsecutiveRefusedOrdersCount offsetGet($offset)
 */
class ConsecutiveRefusedOrdersCountCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ConsecutiveRefusedOrdersCount::class;
}
