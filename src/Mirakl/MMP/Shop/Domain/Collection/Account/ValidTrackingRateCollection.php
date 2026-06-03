<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\ValidTrackingRate;

/**
 * @method ValidTrackingRate current()
 * @method ValidTrackingRate first()
 * @method ValidTrackingRate get($offset)
 * @method ValidTrackingRate last()
 * @method ValidTrackingRate offsetGet($offset)
 */
class ValidTrackingRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ValidTrackingRate::class;
}
