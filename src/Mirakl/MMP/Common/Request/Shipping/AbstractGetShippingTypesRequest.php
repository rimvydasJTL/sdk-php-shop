<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ShippingTypeWithDescriptionCollection;

/**
 * (SH12) List all active shipping methods
 */
#[ApiOperation('SH12')]
abstract class AbstractGetShippingTypesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/types';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShippingTypeWithDescriptionCollection::decorator('shipping_types');
    }
}
