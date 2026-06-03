<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (US24) Enable/disable shop users
 *
 * @method string getStatus()
 * @method $this  setStatus(string $status)
 * @method int[]  getUserIds()
 * @method $this  setUserIds(int[] $userIds)
 */
#[ApiOperation('US24')]
abstract class AbstractUpdateUsersShopsStatusRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/users/shops/status';

    /**
     * @var array
     */
    public $bodyParams = ['status', 'user_ids'];
}
