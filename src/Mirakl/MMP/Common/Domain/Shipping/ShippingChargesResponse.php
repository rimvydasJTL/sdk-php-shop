<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipping\ConfigurationCollection;

/**
 * @method ConfigurationCollection getConfiguration()
 * @method $this                   setConfiguration(array|ConfigurationCollection $configuration)
 * @method string                  getCurrencyIsoCode()
 * @method $this                   setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime               getLastUpdatedDate()
 * @method $this                   setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method int                     getShopId()
 * @method $this                   setShopId(int $shopId)
 */
class ShippingChargesResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'configuration' => [ConfigurationCollection::class, 'create'],
    ];
}
