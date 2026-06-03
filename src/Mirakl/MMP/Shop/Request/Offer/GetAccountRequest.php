<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Shop\ShopAccount;

/**
 * (A01) Get shop information
 */
#[ApiOperation('A01')]
class GetAccountRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/account';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShopAccount::decorator();
    }
}
