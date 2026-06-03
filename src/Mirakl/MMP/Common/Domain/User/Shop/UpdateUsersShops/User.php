<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\User\Shop\UpdateUsersShops;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\User\Shop\AccessCollection;

/**
 * @method AccessCollection getAccess()
 * @method $this            setAccess(array|AccessCollection $access)
 * @method int              getId()
 * @method $this            setId(int $id)
 */
class User extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'access' => [AccessCollection::class, 'create'],
    ];
}
