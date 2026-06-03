<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Shop\Domain\Collection\Shipping\RangeCollection;

/**
 * @method float           getAdditionalPrice()
 * @method $this           setAdditionalPrice(float $additionalPrice)
 * @method float           getFreeShippingThreshold()
 * @method $this           setFreeShippingThreshold(float $freeShippingThreshold)
 * @method float           getInitialPrice()
 * @method $this           setInitialPrice(float $initialPrice)
 * @method RangeCollection getRanges()
 * @method $this           setRanges(array|RangeCollection $ranges)
 * @method string          getType()
 * @method $this           setType(string $type)
 */
class Prices extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'ranges' => [RangeCollection::class, 'create'],
    ];
}
