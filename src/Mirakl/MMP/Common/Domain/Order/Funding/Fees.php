<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Funding;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Funding\BreakdownCollection;

/**
 * @method BreakdownCollection getBreakdown()
 * @method $this               setBreakdown(array|BreakdownCollection $breakdown)
 */
class Fees extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'breakdown' => [BreakdownCollection::class, 'create'],
    ];
}
