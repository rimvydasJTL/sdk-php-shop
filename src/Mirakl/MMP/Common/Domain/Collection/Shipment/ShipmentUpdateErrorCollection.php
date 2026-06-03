<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentUpdateError;

/**
 * @method ShipmentUpdateError current()
 * @method ShipmentUpdateError first()
 * @method ShipmentUpdateError get($offset)
 * @method ShipmentUpdateError last()
 * @method ShipmentUpdateError offsetGet($offset)
 */
class ShipmentUpdateErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentUpdateError::class;
}
