<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\IncidentRate;

/**
 * @method IncidentRate current()
 * @method IncidentRate first()
 * @method IncidentRate get($offset)
 * @method IncidentRate last()
 * @method IncidentRate offsetGet($offset)
 */
class IncidentRateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = IncidentRate::class;
}
