<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\Range;

/**
 * @method Range current()
 * @method Range first()
 * @method Range get($offset)
 * @method Range last()
 * @method Range offsetGet($offset)
 */
class RangeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Range::class;
}
