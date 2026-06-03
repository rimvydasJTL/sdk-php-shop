<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\OrdersCount;

/**
 * @method OrdersCount current()
 * @method OrdersCount first()
 * @method OrdersCount get($offset)
 * @method OrdersCount last()
 * @method OrdersCount offsetGet($offset)
 */
class OrdersCountCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrdersCount::class;
}
