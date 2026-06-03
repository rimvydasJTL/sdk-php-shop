<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method Earliest getEarliest()
 * @method $this    setEarliest(array|Earliest $earliest)
 * @method Latest   getLatest()
 * @method $this    setLatest(array|Latest $latest)
 */
class CarrierExpectedDeliveryDate extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'earliest' => [Earliest::class, 'create'],
        'latest'   => [Latest::class, 'create'],
    ];
}
