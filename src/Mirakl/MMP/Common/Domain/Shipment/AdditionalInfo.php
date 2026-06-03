<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method OccurrenceDate getOccurrenceDate()
 * @method $this          setOccurrenceDate(array|OccurrenceDate $occurrenceDate)
 * @method string         getType()
 * @method $this          setType(string $type)
 */
class AdditionalInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'occurrence_date' => [OccurrenceDate::class, 'create'],
    ];
}
