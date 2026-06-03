<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\User\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\User\Shop\Access;

/**
 * @method Access current()
 * @method Access first()
 * @method Access get($offset)
 * @method Access last()
 * @method Access offsetGet($offset)
 */
class AccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Access::class;
}
