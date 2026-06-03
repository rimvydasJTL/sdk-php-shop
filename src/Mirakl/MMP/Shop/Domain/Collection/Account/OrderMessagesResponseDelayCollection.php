<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\OrderMessagesResponseDelay;

/**
 * @method OrderMessagesResponseDelay current()
 * @method OrderMessagesResponseDelay first()
 * @method OrderMessagesResponseDelay get($offset)
 * @method OrderMessagesResponseDelay last()
 * @method OrderMessagesResponseDelay offsetGet($offset)
 */
class OrderMessagesResponseDelayCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderMessagesResponseDelay::class;
}
