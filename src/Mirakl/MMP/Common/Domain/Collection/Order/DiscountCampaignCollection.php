<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\DiscountCampaign;

/**
 * @method DiscountCampaign current()
 * @method DiscountCampaign first()
 * @method DiscountCampaign get($offset)
 * @method DiscountCampaign last()
 * @method DiscountCampaign offsetGet($offset)
 */
class DiscountCampaignCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DiscountCampaign::class;
}
