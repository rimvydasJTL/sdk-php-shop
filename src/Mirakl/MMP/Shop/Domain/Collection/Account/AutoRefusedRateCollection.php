<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\AutoRefusedRate;

/**
 * @method AutoRefusedRate current()
 * @method AutoRefusedRate first()
 * @method AutoRefusedRate get($offset)
 * @method AutoRefusedRate last()
 * @method AutoRefusedRate offsetGet($offset)
 */
class AutoRefusedRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AutoRefusedRate::class;
}
