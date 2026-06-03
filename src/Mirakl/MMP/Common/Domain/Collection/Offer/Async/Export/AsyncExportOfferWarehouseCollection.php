<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferWarehouse;

/**
 * @method AsyncExportOfferWarehouse current()
 * @method AsyncExportOfferWarehouse first()
 * @method AsyncExportOfferWarehouse get($offset)
 * @method AsyncExportOfferWarehouse last()
 * @method AsyncExportOfferWarehouse offsetGet($offset)
 */
class AsyncExportOfferWarehouseCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferWarehouse::class;
}
