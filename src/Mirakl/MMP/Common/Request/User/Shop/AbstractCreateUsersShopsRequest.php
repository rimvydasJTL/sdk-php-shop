<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\User\Shop\AccessCollection;

/**
 * (US02) Create or add a shop user to one or multiple shops
 *
 * @method AccessCollection getAccess()
 * @method $this            setAccess(array|AccessCollection $access)
 * @method string           getEmail()
 * @method $this            setEmail(string $email)
 * @method string           getLocale()
 * @method $this            setLocale(string $locale)
 */
#[ApiOperation('US02')]
abstract class AbstractCreateUsersShopsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/users/shops';

    /**
     * @var array
     */
    public $bodyParams = ['access', 'email', 'locale'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'access' => [AccessCollection::class, 'create'],
    ];
}
