<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\User\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\User\Shop\UsersShop;

/**
 * @method UsersShop current()
 * @method UsersShop first()
 * @method UsersShop get($offset)
 * @method UsersShop last()
 * @method UsersShop offsetGet($offset)
 */
class UsersShopCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UsersShop::class;
}
