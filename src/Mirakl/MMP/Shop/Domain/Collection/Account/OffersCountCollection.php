<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\OffersCount;

/**
 * @method OffersCount current()
 * @method OffersCount first()
 * @method OffersCount get($offset)
 * @method OffersCount last()
 * @method OffersCount offsetGet($offset)
 */
class OffersCountCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OffersCount::class;
}
