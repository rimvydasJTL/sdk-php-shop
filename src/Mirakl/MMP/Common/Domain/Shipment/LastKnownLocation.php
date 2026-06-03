<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string         getLocation()
 * @method $this          setLocation(string $location)
 * @method OccurrenceDate getOccurrenceDate()
 * @method $this          setOccurrenceDate(array|OccurrenceDate $occurrenceDate)
 */
class LastKnownLocation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'occurrence_date' => [OccurrenceDate::class, 'create'],
    ];
}
