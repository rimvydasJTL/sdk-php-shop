<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferOfferAdditionalFieldCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferOngoingDiscountCampaignCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferPriceCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferRetailPriceCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferShippingTypeCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferWarehouseCollection;

/**
 * @method bool                                              getActive()
 * @method $this                                             setActive(bool $active)
 * @method bool                                              getAllowQuoteRequests()
 * @method $this                                             setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method \DateTime                                         getAvailableEndDate()
 * @method $this                                             setAvailableEndDate(\DateTime $availableEndDate)
 * @method \DateTime                                         getAvailableStartDate()
 * @method $this                                             setAvailableStartDate(\DateTime $availableStartDate)
 * @method string[]                                          getChannels()
 * @method $this                                             setChannels(string[] $channels)
 * @method string                                            getCurrencyIsoCode()
 * @method $this                                             setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                                         getDateCreated()
 * @method $this                                             setDateCreated(\DateTime $dateCreated)
 * @method bool                                              getDeleted()
 * @method $this                                             setDeleted(bool $deleted)
 * @method string                                            getDescription()
 * @method $this                                             setDescription(string $description)
 * @method AsyncExportOfferEcoContributionCollection         getEcoContributions()
 * @method $this                                             setEcoContributions(array|AsyncExportOfferEcoContributionCollection $ecoContributions)
 * @method int                                               getFavoriteRank()
 * @method $this                                             setFavoriteRank(int $favoriteRank)
 * @method AsyncExportOfferFulfillment                       getFulfillment()
 * @method $this                                             setFulfillment(array|AsyncExportOfferFulfillment $fulfillment)
 * @method \DateTime                                         getLastUpdated()
 * @method $this                                             setLastUpdated(\DateTime $lastUpdated)
 * @method int                                               getLeadtimeToShip()
 * @method $this                                             setLeadtimeToShip(int $leadtimeToShip)
 * @method AsyncExportOfferLogisticClass                     getLogisticClass()
 * @method $this                                             setLogisticClass(array|AsyncExportOfferLogisticClass $logisticClass)
 * @method int                                               getMaxOrderQuantity()
 * @method $this                                             setMaxOrderQuantity(int $maxOrderQuantity)
 * @method AsyncExportMeasurementUnit                        getMeasurement()
 * @method $this                                             setMeasurement(array|AsyncExportMeasurementUnit $measurement)
 * @method int                                               getMinOrderQuantity()
 * @method $this                                             setMinOrderQuantity(int $minOrderQuantity)
 * @method float                                             getMinShippingPrice()
 * @method $this                                             setMinShippingPrice(float $minShippingPrice)
 * @method float                                             getMinShippingPriceAdditional()
 * @method $this                                             setMinShippingPriceAdditional(float $minShippingPriceAdditional)
 * @method string                                            getMinShippingType()
 * @method $this                                             setMinShippingType(string $minShippingType)
 * @method string                                            getMinShippingZone()
 * @method $this                                             setMinShippingZone(string $minShippingZone)
 * @method string                                            getModel()
 * @method $this                                             setModel(string $model)
 * @method float                                             getMsrp()
 * @method $this                                             setMsrp(float $msrp)
 * @method AsyncExportOfferOfferAdditionalFieldCollection    getOfferAdditionalFields()
 * @method $this                                             setOfferAdditionalFields(array|AsyncExportOfferOfferAdditionalFieldCollection $offerAdditionalFields)
 * @method string                                            getOfferId()
 * @method $this                                             setOfferId(string $offerId)
 * @method AsyncExportOfferOngoingDiscountCampaignCollection getOngoingDiscountCampaigns()
 * @method $this                                             setOngoingDiscountCampaigns(array|AsyncExportOfferOngoingDiscountCampaignCollection $ongoingDiscountCampaigns)
 * @method int                                               getPackageQuantity()
 * @method $this                                             setPackageQuantity(int $packageQuantity)
 * @method bool                                              getPremium()
 * @method $this                                             setPremium(bool $premium)
 * @method string                                            getPriceAdditionalInfo()
 * @method $this                                             setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method AsyncExportOfferPriceCollection                   getPrices()
 * @method $this                                             setPrices(array|AsyncExportOfferPriceCollection $prices)
 * @method string                                            getProductSku()
 * @method $this                                             setProductSku(string $productSku)
 * @method string                                            getProductTaxCode()
 * @method $this                                             setProductTaxCode(string $productTaxCode)
 * @method bool                                              getProfessional()
 * @method $this                                             setProfessional(bool $professional)
 * @method int                                               getQuantity()
 * @method $this                                             setQuantity(int $quantity)
 * @method AsyncExportOfferRetailPriceCollection             getRetailPrices()
 * @method $this                                             setRetailPrices(array|AsyncExportOfferRetailPriceCollection $retailPrices)
 * @method AsyncExportOfferShippingTypeCollection            getShippingTypes()
 * @method $this                                             setShippingTypes(array|AsyncExportOfferShippingTypeCollection $shippingTypes)
 * @method string                                            getShopId()
 * @method $this                                             setShopId(string $shopId)
 * @method string                                            getShopName()
 * @method $this                                             setShopName(string $shopName)
 * @method string                                            getShopSku()
 * @method $this                                             setShopSku(string $shopSku)
 * @method string                                            getStateCode()
 * @method $this                                             setStateCode(string $stateCode)
 * @method AsyncExportOfferWarehouseCollection               getWarehouses()
 * @method $this                                             setWarehouses(array|AsyncExportOfferWarehouseCollection $warehouses)
 */
class AsyncExportOffer extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'logistic_class'             => [AsyncExportOfferLogisticClass::class, 'create'],
        'measurement'                => [AsyncExportMeasurementUnit::class, 'create'],
        'offer_additional_fields'    => [AsyncExportOfferOfferAdditionalFieldCollection::class, 'create'],
        'fulfillment'                => [AsyncExportOfferFulfillment::class, 'create'],
        'shipping_types'             => [AsyncExportOfferShippingTypeCollection::class, 'create'],
        'prices'                     => [AsyncExportOfferPriceCollection::class, 'create'],
        'eco_contributions'          => [AsyncExportOfferEcoContributionCollection::class, 'create'],
        'ongoing_discount_campaigns' => [AsyncExportOfferOngoingDiscountCampaignCollection::class, 'create'],
        'retail_prices'              => [AsyncExportOfferRetailPriceCollection::class, 'create'],
        'warehouses'                 => [AsyncExportOfferWarehouseCollection::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'is_professional' => 'professional',
    ];
}
