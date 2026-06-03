<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferRetailPrice;

/**
 * @method AsyncExportOfferRetailPrice current()
 * @method AsyncExportOfferRetailPrice first()
 * @method AsyncExportOfferRetailPrice get($offset)
 * @method AsyncExportOfferRetailPrice last()
 * @method AsyncExportOfferRetailPrice offsetGet($offset)
 */
class AsyncExportOfferRetailPriceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferRetailPrice::class;
}
