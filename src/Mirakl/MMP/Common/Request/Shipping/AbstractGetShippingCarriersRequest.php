<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Shipping\CarrierCollection;

/**
 * (SH21) List all carriers (sorted by sortIndex, defined in the BO)
 */
#[ApiOperation('SH21')]
abstract class AbstractGetShippingCarriersRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipping/carriers';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return CarrierCollection::decorator('carriers');
    }
}
