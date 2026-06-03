<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Account;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Account\ApprovalDelayCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\ApprovalRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\AutoRefusedRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\AverageCartCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\AverageCartWithShippingCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\CancelationRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\ConsecutiveRefusedOrdersCountCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\EvaluationsCountCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\GradeCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\IncidentRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\LateShipmentRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\OffersCountCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\OrderMessagesResponseDelayCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\OrdersCountCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\RefundRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\ReturnRateCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\ShippingDelayCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\TotalRevenueCollection;
use Mirakl\MMP\Shop\Domain\Collection\Account\ValidTrackingRateCollection;

/**
 * @method ApprovalDelayCollection                 getApprovalDelay()
 * @method $this                                   setApprovalDelay(array|ApprovalDelayCollection $approvalDelay)
 * @method ApprovalRateCollection                  getApprovalRate()
 * @method $this                                   setApprovalRate(array|ApprovalRateCollection $approvalRate)
 * @method AutoRefusedRateCollection               getAutoRefusedRate()
 * @method $this                                   setAutoRefusedRate(array|AutoRefusedRateCollection $autoRefusedRate)
 * @method AverageCartCollection                   getAverageCart()
 * @method $this                                   setAverageCart(array|AverageCartCollection $averageCart)
 * @method AverageCartWithShippingCollection       getAverageCartWithShipping()
 * @method $this                                   setAverageCartWithShipping(array|AverageCartWithShippingCollection $averageCartWithShipping)
 * @method CancelationRateCollection               getCancelationRate()
 * @method $this                                   setCancelationRate(array|CancelationRateCollection $cancelationRate)
 * @method string                                  getChannel()
 * @method $this                                   setChannel(string $channel)
 * @method ConsecutiveRefusedOrdersCountCollection getConsecutiveRefusedOrdersCount()
 * @method $this                                   setConsecutiveRefusedOrdersCount(array|ConsecutiveRefusedOrdersCountCollection $consecutiveRefusedOrdersCount)
 * @method EvaluationsCountCollection              getEvaluationsCount()
 * @method $this                                   setEvaluationsCount(array|EvaluationsCountCollection $evaluationsCount)
 * @method GradeCollection                         getGrade()
 * @method $this                                   setGrade(array|GradeCollection $grade)
 * @method IncidentRateCollection                  getIncidentRate()
 * @method $this                                   setIncidentRate(array|IncidentRateCollection $incidentRate)
 * @method \DateTime                               getLastUpdatedDate()
 * @method $this                                   setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method LateShipmentRateCollection              getLateShipmentRate()
 * @method $this                                   setLateShipmentRate(array|LateShipmentRateCollection $lateShipmentRate)
 * @method OffersCountCollection                   getOffersCount()
 * @method $this                                   setOffersCount(array|OffersCountCollection $offersCount)
 * @method OrderMessagesResponseDelayCollection    getOrderMessagesResponseDelay()
 * @method $this                                   setOrderMessagesResponseDelay(array|OrderMessagesResponseDelayCollection $orderMessagesResponseDelay)
 * @method OrdersCountCollection                   getOrdersCount()
 * @method $this                                   setOrdersCount(array|OrdersCountCollection $ordersCount)
 * @method RefundRateCollection                    getRefundRate()
 * @method $this                                   setRefundRate(array|RefundRateCollection $refundRate)
 * @method ReturnRateCollection                    getReturnRate()
 * @method $this                                   setReturnRate(array|ReturnRateCollection $returnRate)
 * @method ShippingDelayCollection                 getShippingDelay()
 * @method $this                                   setShippingDelay(array|ShippingDelayCollection $shippingDelay)
 * @method int                                     getShopId()
 * @method $this                                   setShopId(int $shopId)
 * @method TotalRevenueCollection                  getTotalRevenue()
 * @method $this                                   setTotalRevenue(array|TotalRevenueCollection $totalRevenue)
 * @method ValidTrackingRateCollection             getValidTrackingRate()
 * @method $this                                   setValidTrackingRate(array|ValidTrackingRateCollection $validTrackingRate)
 */
class AccountStatisticsResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'approval_delay'                   => [ApprovalDelayCollection::class, 'create'],
        'approval_rate'                    => [ApprovalRateCollection::class, 'create'],
        'auto_refused_rate'                => [AutoRefusedRateCollection::class, 'create'],
        'average_cart'                     => [AverageCartCollection::class, 'create'],
        'average_cart_with_shipping'       => [AverageCartWithShippingCollection::class, 'create'],
        'cancelation_rate'                 => [CancelationRateCollection::class, 'create'],
        'consecutive_refused_orders_count' => [ConsecutiveRefusedOrdersCountCollection::class, 'create'],
        'evaluations_count'                => [EvaluationsCountCollection::class, 'create'],
        'grade'                            => [GradeCollection::class, 'create'],
        'incident_rate'                    => [IncidentRateCollection::class, 'create'],
        'late_shipment_rate'               => [LateShipmentRateCollection::class, 'create'],
        'offers_count'                     => [OffersCountCollection::class, 'create'],
        'order_messages_response_delay'    => [OrderMessagesResponseDelayCollection::class, 'create'],
        'orders_count'                     => [OrdersCountCollection::class, 'create'],
        'refund_rate'                      => [RefundRateCollection::class, 'create'],
        'return_rate'                      => [ReturnRateCollection::class, 'create'],
        'shipping_delay'                   => [ShippingDelayCollection::class, 'create'],
        'total_revenue'                    => [TotalRevenueCollection::class, 'create'],
        'valid_tracking_rate'              => [ValidTrackingRateCollection::class, 'create'],
    ];
}
