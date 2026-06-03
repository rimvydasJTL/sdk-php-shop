<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDiscountEndDate()
 * @method $this     setDiscountEndDate(\DateTime $discountEndDate)
 * @method float     getDiscountPrice()
 * @method $this     setDiscountPrice(float $discountPrice)
 * @method \DateTime getDiscountStartDate()
 * @method $this     setDiscountStartDate(\DateTime $discountStartDate)
 * @method float     getOriginPrice()
 * @method $this     setOriginPrice(float $originPrice)
 */
class AsyncExportOfferRetailPrice extends MiraklObject
{
}
