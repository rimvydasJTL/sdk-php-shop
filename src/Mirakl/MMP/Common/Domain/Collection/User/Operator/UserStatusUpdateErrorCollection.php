<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\User\Operator;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\User\Operator\UserStatusUpdateError;

/**
 * @method UserStatusUpdateError current()
 * @method UserStatusUpdateError first()
 * @method UserStatusUpdateError get($offset)
 * @method UserStatusUpdateError last()
 * @method UserStatusUpdateError offsetGet($offset)
 */
class UserStatusUpdateErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UserStatusUpdateError::class;
}
