<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string               getCountryIsoCode()
 * @method $this                setCountryIsoCode(string $countryIsoCode)
 * @method \DateTime            getCreatedDate()
 * @method $this                setCreatedDate(\DateTime $createdDate)
 * @method ExpectedDeliveryDate getExpectedDeliveryDate()
 * @method $this                setExpectedDeliveryDate(array|ExpectedDeliveryDate $expectedDeliveryDate)
 * @method string               getId()
 * @method $this                setId(string $id)
 * @method \DateTime            getLastUpdatedDate()
 * @method $this                setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method string               getOrderReference()
 * @method $this                setOrderReference(string $orderReference)
 * @method string               getShipmentReference()
 * @method $this                setShipmentReference(string $shipmentReference)
 * @method \DateTime            getShippingDate()
 * @method $this                setShippingDate(\DateTime $shippingDate)
 * @method string               getShippingTypeCode()
 * @method $this                setShippingTypeCode(string $shippingTypeCode)
 * @method string               getShippingTypeLabel()
 * @method $this                setShippingTypeLabel(string $shippingTypeLabel)
 * @method string               getShippingTypeStandardCode()
 * @method $this                setShippingTypeStandardCode(string $shippingTypeStandardCode)
 * @method string               getShippingZoneCode()
 * @method $this                setShippingZoneCode(string $shippingZoneCode)
 * @method string               getShippingZoneLabel()
 * @method $this                setShippingZoneLabel(string $shippingZoneLabel)
 * @method string               getShippingZoneStandardCode()
 * @method $this                setShippingZoneStandardCode(string $shippingZoneStandardCode)
 * @method Tracking             getTracking()
 * @method $this                setTracking(array|Tracking $tracking)
 * @method string               getZipCode()
 * @method $this                setZipCode(string $zipCode)
 */
class Shipment1p extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'expected_delivery_date' => [ExpectedDeliveryDate::class, 'create'],
        'tracking'               => [Tracking::class, 'create'],
    ];
}
