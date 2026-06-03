<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentUpdateSuccess;

/**
 * @method ShipmentUpdateSuccess current()
 * @method ShipmentUpdateSuccess first()
 * @method ShipmentUpdateSuccess get($offset)
 * @method ShipmentUpdateSuccess last()
 * @method ShipmentUpdateSuccess offsetGet($offset)
 */
class ShipmentUpdateSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentUpdateSuccess::class;
}
