<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\TotalRevenue;

/**
 * @method TotalRevenue current()
 * @method TotalRevenue first()
 * @method TotalRevenue get($offset)
 * @method TotalRevenue last()
 * @method TotalRevenue offsetGet($offset)
 */
class TotalRevenueCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = TotalRevenue::class;
}
