<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns\CancelReturns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\CancelReturns\Returns;

/**
 * @method Returns current()
 * @method Returns first()
 * @method Returns get($offset)
 * @method Returns last()
 * @method Returns offsetGet($offset)
 */
class ReturnsCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Returns::class;
}
