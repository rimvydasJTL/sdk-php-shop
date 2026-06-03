<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\ApprovalDelay;

/**
 * @method ApprovalDelay current()
 * @method ApprovalDelay first()
 * @method ApprovalDelay get($offset)
 * @method ApprovalDelay last()
 * @method ApprovalDelay offsetGet($offset)
 */
class ApprovalDelayCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ApprovalDelay::class;
}
