<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentSuccess;

/**
 * @method ShipmentSuccess current()
 * @method ShipmentSuccess first()
 * @method ShipmentSuccess get($offset)
 * @method ShipmentSuccess last()
 * @method ShipmentSuccess offsetGet($offset)
 */
class ShipmentSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentSuccess::class;
}
