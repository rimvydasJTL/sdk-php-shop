<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\User\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (RO02) List shop roles
 */
#[ApiOperation('RO02')]
abstract class AbstractGetUsersShopsRolesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/users/shops/roles';
}
