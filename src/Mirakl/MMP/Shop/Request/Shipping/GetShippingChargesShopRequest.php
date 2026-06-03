<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Shipping\ShippingChargesShopResponse;

/**
 * (SH52) Get shipping charges configured for a shop account
 *
 * @method bool  getOverriddenByShop()
 * @method bool  isOverriddenByShop()
 * @method $this setOverriddenByShop(bool $overriddenByShop)
 */
#[ApiOperation('SH52')]
class GetShippingChargesShopRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipping/charges/shop';

    /**
     * @var array
     */
    public $queryParams = ['overridden_by_shop'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShippingChargesShopResponse::decorator();
    }
}
