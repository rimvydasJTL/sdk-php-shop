<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method AdditionalInfo getAdditionalInfo()
 * @method $this          setAdditionalInfo(array|AdditionalInfo $additionalInfo)
 * @method OccurrenceDate getOccurrenceDate()
 * @method $this          setOccurrenceDate(array|OccurrenceDate $occurrenceDate)
 * @method string         getType()
 * @method $this          setType(string $type)
 */
class Milestone extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_info' => [AdditionalInfo::class, 'create'],
        'occurrence_date' => [OccurrenceDate::class, 'create'],
    ];
}
