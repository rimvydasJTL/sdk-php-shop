<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Shipping\DeliveryTimeCollection;
use Mirakl\MMP\Shop\Domain\Collection\Shipping\OrderCutOffTimeCollection;

/**
 * @method DeliveryTimeCollection    getDeliveryTimes()
 * @method $this                     setDeliveryTimes(array|DeliveryTimeCollection $deliveryTimes)
 * @method \DateTime                 getLastUpdatedDate()
 * @method $this                     setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method LeadTimeToShip            getLeadTimeToShip()
 * @method $this                     setLeadTimeToShip(array|LeadTimeToShip $leadTimeToShip)
 * @method OrderCutOffTimeCollection getOrderCutOffTimes()
 * @method $this                     setOrderCutOffTimes(array|OrderCutOffTimeCollection $orderCutOffTimes)
 * @method bool                      getOrderFreeShipping()
 * @method bool                      isOrderFreeShipping()
 * @method $this                     setOrderFreeShipping(bool $orderFreeShipping)
 * @method bool                      getShippingPaidByOperator()
 * @method bool                      isShippingPaidByOperator()
 * @method $this                     setShippingPaidByOperator(bool $shippingPaidByOperator)
 * @method string                    getShopId()
 * @method $this                     setShopId(string $shopId)
 */
class ShippingConfigurationShopResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'delivery_times'      => [DeliveryTimeCollection::class, 'create'],
        'lead_time_to_ship'   => [LeadTimeToShip::class, 'create'],
        'order_cut_off_times' => [OrderCutOffTimeCollection::class, 'create'],
    ];
}
