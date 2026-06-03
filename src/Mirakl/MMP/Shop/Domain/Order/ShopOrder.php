<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order;

use Mirakl\MMP\Common\Domain\Collection\Order\DiscountCampaignCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\OrderRefundCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\ShopOrderLineCollection;
use Mirakl\MMP\Common\Domain\Order\AbstractOrder;

/**
 * @method ShopOrderCustomer          getCustomer()
 * @method $this                      setCustomer(array|ShopOrderCustomer $customer)
 * @method string                     getCustomerNotificationEmail()
 * @method $this                      setCustomerNotificationEmail(string $customerNotificationEmail)
 * @method DiscountCampaignCollection getDiscountCampaigns()
 * @method $this                      setDiscountCampaigns(array|DiscountCampaignCollection $discountCampaigns)
 * @method ShopOrderLineCollection    getOrderLines()
 * @method $this                      setOrderLines(array|ShopOrderLineCollection $orderLines)
 * @method OrderRefundCollection      getOrderRefunds()
 * @method $this                      setOrderRefunds(array|OrderRefundCollection $orderRefunds)
 */
class ShopOrder extends AbstractOrder
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer'           => [ShopOrderCustomer::class, 'create'],
        'discount_campaigns' => [DiscountCampaignCollection::class, 'create'],
        'order_lines'        => [ShopOrderLineCollection::class, 'create'],
        'order_refunds'      => [OrderRefundCollection::class, 'create'],
    ];
}
