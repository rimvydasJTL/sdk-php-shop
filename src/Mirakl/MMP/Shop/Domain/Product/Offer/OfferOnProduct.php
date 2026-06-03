<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Product\Offer;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\EcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Price\OfferPricesCollection;
use Mirakl\MMP\Common\Domain\Collection\Offer\Shipping\ShippingPriceByZoneAndTypeCollection;
use Mirakl\MMP\Common\Domain\Offer\OfferMinimumShipping;
use Mirakl\MMP\Common\Domain\Offer\Price\OfferPricing;
use Mirakl\MMP\Common\Domain\Offer\ProductInfoWithRefs;
use Mirakl\MMP\Shop\Domain\Collection\Offer\RetailPriceCollection;

/**
 * @method bool                                 getActive()
 * @method bool                                 isActive()
 * @method $this                                setActive(bool $active)
 * @method bool                                 getAllowQuoteRequests()
 * @method $this                                setAllowQuoteRequests(bool $allowQuoteRequests)
 * @method OfferPricesCollection                getAllPrices()
 * @method $this                                setAllPrices(array|OfferPricesCollection $prices)
 * @method OfferPricing                         getApplicablePricing()
 * @method $this                                setApplicablePricing(array|OfferPricing $prices)
 * @method \DateTime                            getAvailableEndDate()
 * @method $this                                setAvailableEndDate(\DateTime $availableEndDate)
 * @method \DateTime                            getAvailableStartDate()
 * @method $this                                setAvailableStartDate(\DateTime $availableStartDate)
 * @method array                                getChannels()
 * @method $this                                setChannels(array $channels)
 * @method string                               getCurrencyIsoCode()
 * @method $this                                setCurrencyIsoCode(string $currencyIsoCode)
 * @method string                               getDescription()
 * @method $this                                setDescription(string $description)
 * @method EcoContributionCollection            getEcoContributions()
 * @method $this                                setEcoContributions(array|EcoContributionCollection $ecoContribution)
 * @method int                                  getFavoriteRank()
 * @method $this                                setFavoriteRank(int $favoriteRank)
 * @method array                                getInactivityReasons()
 * @method $this                                setInactivityReasons(array $inactivityReasons)
 * @method int                                  getLeadtimeToShip() (in days)
 * @method $this                                setLeadtimeToShip(int $leadtimeToShip)
 * @method int                                  getMinQuantityAlert()
 * @method $this                                setMinQuantityAlert(int $minQuantityAlert)
 * @method OfferMinimumShipping                 getMinShipping()
 * @method $this                                setMinShipping(array|OfferMinimumShipping $minShipping)
 * @method float                                getMsrp()
 * @method $this                                setMsrp(float $msrp)
 * @method int                                  getNbEvaluation()
 * @method $this                                setNbEvaluation(int $nbEvaluation)
 * @method array                                getOfferAdditionalFields()
 * @method $this                                setOfferAdditionalFields(array $offerAdditionalFields)
 * @method int                                  getOfferId()
 * @method $this                                setOfferId(int $offerId)
 * @method bool                                 getPremium()
 * @method bool                                 isPremium()
 * @method $this                                setPremium(bool $premium)
 * @method float                                getPrice()
 * @method $this                                setPrice(float $price)
 * @method string                               getPriceAdditionalInfo()
 * @method $this                                setPriceAdditionalInfo(string $priceAdditionalInfo)
 * @method ProductInfoWithRefs                  getProduct()
 * @method $this                                setProduct(array|ProductInfoWithRefs $productInfoWithRefs)
 * @method bool                                 getProfessional()
 * @method bool                                 isProfessional()
 * @method $this                                setProfessional(bool $flag)
 * @method int                                  getQuantity()
 * @method $this                                setQuantity(int $quantity)
 * @method RetailPriceCollection                getRetailPrices()
 * @method $this                                setRetailPrices(array|RetailPriceCollection $retailPrices)
 * @method \DateTime                            getShippingDeadline()
 * @method $this                                setShippingDeadline(\DateTime $shippingDeadline)
 * @method ShippingPriceByZoneAndTypeCollection getShippingTypes()
 * @method $this                                setShippingTypes(array|ShippingPriceByZoneAndTypeCollection $shippingTypes)
 * @method int                                  getShopGrade()
 * @method $this                                setShopGrade(int $shopGrade)
 * @method int                                  getShopId()
 * @method $this                                setShopId(int $shopId)
 * @method string                               getShopName()
 * @method $this                                setShopName(string $shopName)
 * @method string                               getStateCode()
 * @method $this                                setStateCode(string $stateCode)
 * @method float                                getTotalPrice()
 * @method $this                                setTotalPrice(float $totalPrice)
 */
class OfferOnProduct extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'id'                            => 'offer_id',
        'product_sku'                   => 'product/sku',
        'product_title'                 => 'product/title',
        'product_references'            => 'product/references',
        'category_code'                 => 'product/category/code',
        'category_label'                => 'product/category/label',
        'category_type'                 => 'product/category/type',
        'min_shipping_price'            => 'min_shipping/price',
        'min_shipping_price_additional' => 'min_shipping/price_additional',
        'min_shipping_type'             => 'min_shipping/type_code',
        'min_shipping_zone'             => 'min_shipping/zone_code',
        'is_professional'               => 'professional',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'min_shipping'       => [OfferMinimumShipping::class, 'create'],
        'product'            => [ProductInfoWithRefs::class, 'create'],
        'all_prices'         => [OfferPricesCollection::class, 'create'],
        'applicable_pricing' => [OfferPricing::class, 'create'],
        'shipping_types'     => [ShippingPriceByZoneAndTypeCollection::class, 'create'],
        'eco_contributions'  => [EcoContributionCollection::class, 'create'],
        'retail_prices'      => [RetailPriceCollection::class, 'create'],
    ];

    /**
     * @param mixed $product
     * @return $this
     */
    public function setProductReferences($product)
    {
        if (is_array($product)) {
            $product = ProductInfoWithRefs::create(['references' => $product]);
        }

        return $this->setProduct($product);
    }
}
