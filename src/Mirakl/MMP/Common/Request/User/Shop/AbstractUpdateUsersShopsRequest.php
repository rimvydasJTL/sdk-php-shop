<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\User\Shop\UpdateUsersShops\UserCollection;

/**
 * (US04) Bulk update shop users
 *
 * @method UserCollection getUsers()
 * @method $this          setUsers(array|UserCollection $users)
 */
#[ApiOperation('US04')]
abstract class AbstractUpdateUsersShopsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/users/shops';

    /**
     * @var array
     */
    public $bodyParams = ['users'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'users' => [UserCollection::class, 'create'],
    ];
}
