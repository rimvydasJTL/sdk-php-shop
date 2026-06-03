<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Operator;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (US23) Update the status of an operator user
 *
 * @method string getStatus()
 * @method $this  setStatus(string $status)
 * @method int[]  getUserIds()
 * @method $this  setUserIds(int[] $userIds)
 */
#[ApiOperation('US23')]
abstract class AbstractUpdateUsersOperatorsStatusRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/users/operators/status';

    /**
     * @var array
     */
    public $bodyParams = ['status', 'user_ids'];
}
