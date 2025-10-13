<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentAdditionalInformation;

/**
 * @method ShipmentAdditionalInformation current()
 * @method ShipmentAdditionalInformation first()
 * @method ShipmentAdditionalInformation get($offset)
 * @method ShipmentAdditionalInformation offsetGet($offset)
 * @method ShipmentAdditionalInformation last()
 */
class ShipmentAdditionalInformationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentAdditionalInformation::class;
}
