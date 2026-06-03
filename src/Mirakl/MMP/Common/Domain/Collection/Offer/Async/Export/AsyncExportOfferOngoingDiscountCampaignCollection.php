<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\AsyncExportOfferOngoingDiscountCampaign;

/**
 * @method AsyncExportOfferOngoingDiscountCampaign current()
 * @method AsyncExportOfferOngoingDiscountCampaign first()
 * @method AsyncExportOfferOngoingDiscountCampaign get($offset)
 * @method AsyncExportOfferOngoingDiscountCampaign last()
 * @method AsyncExportOfferOngoingDiscountCampaign offsetGet($offset)
 */
class AsyncExportOfferOngoingDiscountCampaignCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AsyncExportOfferOngoingDiscountCampaign::class;
}
