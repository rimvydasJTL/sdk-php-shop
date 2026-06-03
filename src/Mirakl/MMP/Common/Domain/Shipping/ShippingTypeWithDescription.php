<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipping;

/**
 * @method bool   getClickAndCollect()
 * @method bool   isClickAndCollect()
 * @method $this  setClickAndCollect(bool $clickAndCollect)
 * @method bool   getDeliveryByOperator()
 * @method bool   isDeliveryByOperator()
 * @method $this  setDeliveryByOperator(bool $deliveryByOperator)
 * @method string getDescription()
 * @method $this  setDescription(string $description)
 * @method bool   getIgnoreLeadTimeToShip()
 * @method bool   isIgnoreLeadTimeToShip()
 * @method $this  setIgnoreLeadTimeToShip(bool $ignoreLeadTimeToShip)
 * @method bool   getMandatoryTracking()
 * @method bool   isMandatoryTracking()
 * @method $this  setMandatoryTracking(bool $mandatoryTracking)
 * @method string getStandardCode()
 * @method $this  setStandardCode(string $standardCode)
 */
class ShippingTypeWithDescription extends ShippingType
{
}
