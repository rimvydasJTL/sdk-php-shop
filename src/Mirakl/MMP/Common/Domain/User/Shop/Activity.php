<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\User\Shop;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getCreation()
 * @method $this     setCreation(\DateTime $creation)
 * @method LastLogin getLastLogin()
 * @method $this     setLastLogin(array|LastLogin $lastLogin)
 * @method \DateTime getLastUpdate()
 * @method $this     setLastUpdate(\DateTime $lastUpdate)
 */
class Activity extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'last_login' => [LastLogin::class, 'create'],
    ];
}
