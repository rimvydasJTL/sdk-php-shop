<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingZoneDetailCollection;

/**
 * (SH11) List all shipping zones
 */
#[ApiOperation('SH11')]
abstract class AbstractGetShippingZonesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/zones';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShippingZoneDetailCollection::decorator('shipping_zones');
    }
}
