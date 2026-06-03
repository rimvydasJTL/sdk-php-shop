<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\State;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Offer\State\AbstractGetOfferStatesRequest;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 *
 * @deprecated Class deprecated since 1.6.0
 * @see \Mirakl\MMP\Shop\Request\Offer\State\GetOfferStateListRequest
 */
#[ApiOperation('OF61')]
class GetOfferStatesRequest extends AbstractGetOfferStatesRequest
{
}
