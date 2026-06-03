<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\Milestone;

/**
 * @method Milestone current()
 * @method Milestone first()
 * @method Milestone get($offset)
 * @method Milestone last()
 * @method Milestone offsetGet($offset)
 */
class MilestoneCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Milestone::class;
}
