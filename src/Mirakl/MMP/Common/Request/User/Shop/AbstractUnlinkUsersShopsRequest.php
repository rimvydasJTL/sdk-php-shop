<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (US22) Remove a shop user from one or multiple shops
 *
 * @method int[] getShopIds()
 * @method $this setShopIds(int[] $shopIds)
 * @method int   getUserId()
 * @method $this setUserId(int $userId)
 */
#[ApiOperation('US22')]
abstract class AbstractUnlinkUsersShopsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/users/shops/unlink';

    /**
     * @var array
     */
    public $bodyParams = ['shop_ids', 'user_id'];
}
