<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Promotion;

use Mirakl\MMP\Common\Domain\Promotion\AbstractPromotion;

/**
 * @method array     getCustomerGroupIds()
 * @method $this     setCustomerGroupIds(array $customerGroupIds)
 * @method array     getCustomerOrganizationIds()
 * @method $this     setCustomerOrganizationIds(array $customerOrganizationIds)
 * @method \DateTime getEndDate()
 * @method $this     setEndDate(\DateTime $endDate)
 * @method array     getRewardOfferIds()
 * @method $this     setRewardOfferIds(array $rewardOfferIds)
 * @method \DateTime getStartDate()
 * @method $this     setStartDate(\DateTime $startDate)
 * @method array     getTriggerOfferIds()
 * @method $this     setTriggerOfferIds(array $triggerOfferIds)
 */
class Promotion extends AbstractPromotion
{
}
