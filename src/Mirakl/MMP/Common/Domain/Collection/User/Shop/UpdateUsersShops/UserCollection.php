<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\User\Shop\UpdateUsersShops;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\User\Shop\UpdateUsersShops\User;

/**
 * @method User current()
 * @method User first()
 * @method User get($offset)
 * @method User last()
 * @method User offsetGet($offset)
 */
class UserCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = User::class;
}
