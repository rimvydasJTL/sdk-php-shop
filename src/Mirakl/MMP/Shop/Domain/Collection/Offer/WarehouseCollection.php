<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Offer\Warehouse;

/**
 * @method Warehouse current()
 * @method Warehouse first()
 * @method Warehouse get($offset)
 * @method Warehouse last()
 * @method Warehouse offsetGet($offset)
 */
class WarehouseCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Warehouse::class;
}
