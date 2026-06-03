<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipping;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Shipping\ShippingConfigurationShopResponse;

/**
 * (SH42) Get shop shipping configuration
 */
#[ApiOperation('SH42')]
class GetShippingConfigurationShopRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipping/configuration/shop';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShippingConfigurationShopResponse::decorator();
    }
}
