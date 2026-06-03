<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Warehouse;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method Address   getAddress()
 * @method $this     setAddress(array|Address $address)
 * @method string    getCode()
 * @method $this     setCode(string $code)
 * @method \DateTime getDateCreated()
 * @method $this     setDateCreated(\DateTime $dateCreated)
 * @method Geocoding getGeocoding()
 * @method $this     setGeocoding(array|Geocoding $geocoding)
 * @method string    getLabel()
 * @method $this     setLabel(string $label)
 * @method \DateTime getLastUpdated()
 * @method $this     setLastUpdated(\DateTime $lastUpdated)
 * @method int       getRank()
 * @method $this     setRank(int $rank)
 * @method string    getShopId()
 * @method $this     setShopId(string $shopId)
 * @method string    getType()
 * @method $this     setType(string $type)
 */
class Warehouse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'   => [Address::class, 'create'],
        'geocoding' => [Geocoding::class, 'create'],
    ];
}
