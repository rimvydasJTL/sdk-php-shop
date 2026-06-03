<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\ReturnRate;

/**
 * @method ReturnRate current()
 * @method ReturnRate first()
 * @method ReturnRate get($offset)
 * @method ReturnRate last()
 * @method ReturnRate offsetGet($offset)
 */
class ReturnRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnRate::class;
}
