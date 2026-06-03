<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\LateShipmentRate;

/**
 * @method LateShipmentRate current()
 * @method LateShipmentRate first()
 * @method LateShipmentRate get($offset)
 * @method LateShipmentRate last()
 * @method LateShipmentRate offsetGet($offset)
 */
class LateShipmentRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = LateShipmentRate::class;
}
