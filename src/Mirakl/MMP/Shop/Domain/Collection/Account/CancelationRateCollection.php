<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\CancelationRate;

/**
 * @method CancelationRate current()
 * @method CancelationRate first()
 * @method CancelationRate get($offset)
 * @method CancelationRate last()
 * @method CancelationRate offsetGet($offset)
 */
class CancelationRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CancelationRate::class;
}
