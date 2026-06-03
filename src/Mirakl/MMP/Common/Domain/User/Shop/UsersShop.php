<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\User\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\User\Shop\AccessCollection;

/**
 * @method AccessCollection getAccess()
 * @method $this            setAccess(array|AccessCollection $access)
 * @method Activity         getActivity()
 * @method $this            setActivity(array|Activity $activity)
 * @method bool             hasApiKey()
 * @method string           getEmail()
 * @method $this            setEmail(string $email)
 * @method bool             getHasApiKey()
 * @method $this            setHasApiKey(bool $hasApiKey)
 * @method int              getId()
 * @method $this            setId(int $id)
 * @method string           getLocale()
 * @method $this            setLocale(string $locale)
 * @method string           getStatus()
 * @method $this            setStatus(string $status)
 */
class UsersShop extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'access'   => [AccessCollection::class, 'create'],
        'activity' => [Activity::class, 'create'],
    ];
}
