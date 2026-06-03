<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\AverageCartWithShipping;

/**
 * @method AverageCartWithShipping current()
 * @method AverageCartWithShipping first()
 * @method AverageCartWithShipping get($offset)
 * @method AverageCartWithShipping last()
 * @method AverageCartWithShipping offsetGet($offset)
 */
class AverageCartWithShippingCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AverageCartWithShipping::class;
}
