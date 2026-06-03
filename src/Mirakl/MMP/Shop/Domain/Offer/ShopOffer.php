<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Offer;

use Mirakl\MMP\Common\Domain\Offer\AbstractOffer;
use Mirakl\MMP\Shop\Domain\Collection\Offer\RetailPriceCollection;
use Mirakl\MMP\Shop\Domain\Collection\Offer\WarehouseCollection;

/**
 * @method string                getInternalDescription()
 * @method $this                 setInternalDescription(string $internalDescription)
 * @method float                 getMsrp()
 * @method $this                 setMsrp(float $msrp)
 * @method RetailPriceCollection getRetailPrices()
 * @method $this                 setRetailPrices(array|RetailPriceCollection $retailPrices)
 * @method string                getSku()
 * @method $this                 setSku(string $sku)
 * @method WarehouseCollection   getWarehouses()
 * @method $this                 setWarehouses(array|WarehouseCollection $warehouses)
 */
class ShopOffer extends AbstractOffer
{
    /**
     * @var array
     */
    protected static $mapping = [
        'product_brand'                 => 'product/brand',
        'product_description'           => 'product/description',
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
        'available_start_date'          => 'availability/start_date',
        'available_end_date'            => 'availability/end_date',
        'offer_additional_fields'       => 'additional_fields',
        'shop_sku'                      => 'sku',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'retail_prices' => [RetailPriceCollection::class, 'create'],
        'warehouses'    => [WarehouseCollection::class, 'create'],
    ];
}
