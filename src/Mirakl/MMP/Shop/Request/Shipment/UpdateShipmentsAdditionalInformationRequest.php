<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentsAdditionalInformation;
use Mirakl\MMP\Common\Request\Shipment\AbstractUpdateShipmentsAdditionalInformationRequest;

/**
 * (ST31) Update shipment additional information
 */
#[ApiOperation('ST31')]
class UpdateShipmentsAdditionalInformationRequest extends AbstractUpdateShipmentsAdditionalInformationRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShipmentsAdditionalInformation::decorator();
    }
}
