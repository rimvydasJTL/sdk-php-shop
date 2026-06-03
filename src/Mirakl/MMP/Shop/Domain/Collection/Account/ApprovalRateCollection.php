<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\ApprovalRate;

/**
 * @method ApprovalRate current()
 * @method ApprovalRate first()
 * @method ApprovalRate get($offset)
 * @method ApprovalRate last()
 * @method ApprovalRate offsetGet($offset)
 */
class ApprovalRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ApprovalRate::class;
}
