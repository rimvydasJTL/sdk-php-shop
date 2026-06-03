<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Offer\RetailPrice;

/**
 * @method RetailPrice current()
 * @method RetailPrice first()
 * @method RetailPrice get($offset)
 * @method RetailPrice last()
 * @method RetailPrice offsetGet($offset)
 */
class RetailPriceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RetailPrice::class;
}
