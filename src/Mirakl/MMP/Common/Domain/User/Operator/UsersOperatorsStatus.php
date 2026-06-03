<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\User\Operator;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\User\Operator\UserStatusUpdateErrorCollection;

/**
 * @method UserStatusUpdateErrorCollection getUserStatusUpdateErrors()
 * @method $this                           setUserStatusUpdateErrors(array|UserStatusUpdateErrorCollection $userStatusUpdateErrors)
 * @method UserStatusUpdateSuccess         getUserStatusUpdateSuccess()
 * @method $this                           setUserStatusUpdateSuccess(array|UserStatusUpdateSuccess $userStatusUpdateSuccess)
 */
class UsersOperatorsStatus extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'user_status_update_errors'  => [UserStatusUpdateErrorCollection::class, 'create'],
        'user_status_update_success' => [UserStatusUpdateSuccess::class, 'create'],
    ];
}
