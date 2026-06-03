<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\User\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\User\Shop\Role;

/**
 * @method Role current()
 * @method Role first()
 * @method Role get($offset)
 * @method Role last()
 * @method Role offsetGet($offset)
 */
class RoleCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Role::class;
}
