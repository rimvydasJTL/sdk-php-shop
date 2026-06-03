<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getCutOffTime()
 * @method $this  setCutOffTime(string $cutOffTime)
 * @method bool   getRequired()
 * @method bool   isRequired()
 * @method $this  setRequired(bool $required)
 * @method string getSetBy()
 * @method $this  setSetBy(string $setBy)
 * @method string getShippingTypeCode()
 * @method $this  setShippingTypeCode(string $shippingTypeCode)
 */
class OrderCutOffTime extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'is_required' => 'required',
    ];
}
