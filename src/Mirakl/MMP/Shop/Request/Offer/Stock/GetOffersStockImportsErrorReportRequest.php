<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Stock;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Offer\Stock\AbstractGetOffersStockImportsErrorReportRequest;

/**
 * (STO03) Get the error report for a stock import in CSV format
 */
#[ApiOperation('STO03')]
class GetOffersStockImportsErrorReportRequest extends AbstractGetOffersStockImportsErrorReportRequest
{
}
