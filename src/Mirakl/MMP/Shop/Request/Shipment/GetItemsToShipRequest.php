<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shipment;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Shipment\AbstractGetItemsToShipRequest;
use Mirakl\MMP\Shop\Domain\Collection\Shipment\ItemToShipCollection;

/**
 * (ST12) List items to ship (this resource supports seek pagination)
 */
#[ApiOperation('ST12')]
class GetItemsToShipRequest extends AbstractGetItemsToShipRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new SeekableCollection(ItemToShipCollection::class, 'data');
    }
}
