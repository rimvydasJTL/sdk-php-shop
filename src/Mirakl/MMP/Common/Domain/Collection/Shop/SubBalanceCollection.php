<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shop\SubBalance;

/**
 * @method SubBalance current()
 * @method SubBalance first()
 * @method SubBalance get($offset)
 * @method SubBalance last()
 * @method SubBalance offsetGet($offset)
 */
class SubBalanceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = SubBalance::class;
}
