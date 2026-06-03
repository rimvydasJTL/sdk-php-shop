<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\ErrorCollection;

/**
 * @method ErrorCollection getErrors()
 * @method $this           setErrors(array|ErrorCollection $errors)
 * @method string          getShipmentId()
 * @method $this           setShipmentId(string $shipmentId)
 */
class ShipmentUpdateError extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'errors' => [ErrorCollection::class, 'create'],
    ];
}
