<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Shipment\Shipments;
use Mirakl\MMP\Common\Request\Shipment\AbstractUpdateShipmentsRequest;

/**
 * (ST07) Update shipment shipping origin
 */
#[ApiOperation('ST07')]
class UpdateShipmentsRequest extends AbstractUpdateShipmentsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return Shipments::decorator();
    }
}
