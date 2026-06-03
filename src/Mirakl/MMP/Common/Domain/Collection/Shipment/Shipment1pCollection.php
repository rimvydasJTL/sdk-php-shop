<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\Shipment1p;

/**
 * @method Shipment1p current()
 * @method Shipment1p first()
 * @method Shipment1p get($offset)
 * @method Shipment1p last()
 * @method Shipment1p offsetGet($offset)
 */
class Shipment1pCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Shipment1p::class;
}
