<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getChannelPricingModel()                            // Allow sellers to create prices applicable on the operator’s different storefronts materialized as sales channels in Mirakl
 * @method $this  setChannelPricingModel(string $channelPricingModel)
 * @method bool   getDiscountPeriodRequired()
 * @method bool   isDiscountPeriodRequired()
 * @method $this  setDiscountPeriodRequired(bool $discountPeriodRequired)
 * @method bool   getDiscountPriceCreationInThePastBlocked()
 * @method bool   isDiscountPriceCreationInThePastBlocked()
 * @method $this  setDiscountPriceCreationInThePastBlocked(bool $discountPriceCreationInThePastBlocked)
 * @method bool   getIsScheduledPricing()                             // Allow sellers to set up multiple prices in advance
 * @method $this  setIsScheduledPricing(bool $isScheduledPricing)
 * @method bool   getIsVolumeDiscount()                               // Allow discounts for bulk purchases
 * @method $this  setIsVolumeDiscount(bool $isVolumeDiscount)
 * @method bool   getIsVolumePricing()                                // Allow pricing for bulk purchases
 * @method $this  setIsVolumePricing(bool $isVolumePricing)
 */
class PricingConfiguration extends MiraklObject
{
    public const CHANNEL_PRICING_MODEL_DISABLED = 'DISABLED';
    public const CHANNEL_PRICING_MODEL_SINGLE = 'SINGLE';
    public const CHANNEL_PRICING_MODEL_MULTI = 'MULTI';

    /**
     * @var array
     */
    protected static $mapping = [
        'channel_pricing'   => 'channel_pricing_model',
        'scheduled_pricing' => 'is_scheduled_pricing',
        'volume_discount'   => 'is_volume_discount',
        'volume_pricing'    => 'is_volume_pricing',
    ];
}
