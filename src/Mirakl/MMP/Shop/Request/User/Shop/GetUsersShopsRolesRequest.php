<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\User\Shop;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\User\Shop\RoleCollection;
use Mirakl\MMP\Common\Request\User\Shop\AbstractGetUsersShopsRolesRequest;

/**
 * (RO02) List shop roles
 */
#[ApiOperation('RO02')]
class GetUsersShopsRolesRequest extends AbstractGetUsersShopsRolesRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return RoleCollection::decorator('roles');
    }
}
