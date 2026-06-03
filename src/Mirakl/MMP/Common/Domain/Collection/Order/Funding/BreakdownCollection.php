<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\Funding;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Funding\Breakdown;

/**
 * @method Breakdown current()
 * @method Breakdown first()
 * @method Breakdown get($offset)
 * @method Breakdown last()
 * @method Breakdown offsetGet($offset)
 */
class BreakdownCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Breakdown::class;
}
