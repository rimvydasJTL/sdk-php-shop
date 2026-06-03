<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getEarliest()
 * @method $this     setEarliest(\DateTime $earliest)
 * @method \DateTime getLatest()
 * @method $this     setLatest(\DateTime $latest)
 */
class ExpectedDeliveryDate extends MiraklObject
{
}
