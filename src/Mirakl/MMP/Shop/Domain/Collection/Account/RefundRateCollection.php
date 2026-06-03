<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\RefundRate;

/**
 * @method RefundRate current()
 * @method RefundRate first()
 * @method RefundRate get($offset)
 * @method RefundRate last()
 * @method RefundRate offsetGet($offset)
 */
class RefundRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundRate::class;
}
