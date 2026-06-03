<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Offer\AbstractOffersExportFileRequest;

/**
 * (OF51) Get a CSV file with the offers updated and deleted since the last request date
 *
 * <p>
 * If offers have additional fields, a column is added at the end of csv for each existing
 * additional field with as header the code of the additional field.
 * </p>
 * <p>
 * Returns CSV diff file with:
 * offer-id;product-sku;min-shipping-price;min-shipping-price-additional;
 * min-shipping-zone;min-shipping-type;price;total-price;price-additional-info;quantity;description;
 * state-code;shop-id;shop-name;professional;premium;logistic-class;active;favorite-rank;channels;
 * deleted;origin-price;discount-start-date;discount-end-date;available-start-date;available-end-date;currency-iso-code
 * </p>
 * @deprecated
 */
#[ApiOperation('OF51')]
class OffersExportFileRequest extends AbstractOffersExportFileRequest
{
}
