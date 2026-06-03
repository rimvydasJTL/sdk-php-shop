<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (US12) List shop users
 *
 * @method bool     hasApiKey()
 * @method string   getEmail()
 * @method $this    setEmail(string $email)
 * @method bool     getHasApiKey()
 * @method $this    setHasApiKey(bool $hasApiKey)
 * @method string[] getLocales()
 * @method $this    setLocales(string[] $locales)
 * @method string[] getRoles()
 * @method $this    setRoles(string[] $roles)
 * @method string[] getShopIds()
 * @method $this    setShopIds(string[] $shopIds)
 * @method string[] getStatus()
 * @method $this    setStatus(string[] $status)
 */
#[ApiOperation('US12')]
abstract class AbstractGetUsersShopsRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/users/shops';

    /**
     * @var array
     */
    public $queryParams = [
        'email',
        'has_api_key',
        'locales',
        'roles',
        'shop_ids',
        'status',
    ];
}
