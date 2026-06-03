<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\MilestoneCollection;

/**
 * @method string                      getCarrierCode()
 * @method $this                       setCarrierCode(string $carrierCode)
 * @method CarrierExpectedDeliveryDate getCarrierExpectedDeliveryDate()
 * @method $this                       setCarrierExpectedDeliveryDate(array|CarrierExpectedDeliveryDate $carrierExpectedDeliveryDate)
 * @method string                      getCarrierName()
 * @method $this                       setCarrierName(string $carrierName)
 * @method string                      getCarrierStandardCode()
 * @method $this                       setCarrierStandardCode(string $carrierStandardCode)
 * @method LastKnownLocation           getLastKnownLocation()
 * @method $this                       setLastKnownLocation(array|LastKnownLocation $lastKnownLocation)
 * @method MilestoneCollection         getMilestones()
 * @method $this                       setMilestones(array|MilestoneCollection $milestones)
 * @method string                      getTrackingNumber()
 * @method $this                       setTrackingNumber(string $trackingNumber)
 * @method string                      getTrackingUrl()
 * @method $this                       setTrackingUrl(string $trackingUrl)
 * @method string                      getValidityStatus()
 * @method $this                       setValidityStatus(string $validityStatus)
 */
class Tracking extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'carrier_expected_delivery_date' => [CarrierExpectedDeliveryDate::class, 'create'],
        'last_known_location'            => [LastKnownLocation::class, 'create'],
        'milestones'                     => [MilestoneCollection::class, 'create'],
    ];
}
