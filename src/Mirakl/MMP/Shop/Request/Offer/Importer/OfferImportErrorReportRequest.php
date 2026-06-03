<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\Importer;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\OperatorShop\Request\Offer\Importer\AbstractOfferImportErrorReportRequest;

/**
 * (OF03) Get error report file for an offer import
 */
#[ApiOperation('OF03')]
class OfferImportErrorReportRequest extends AbstractOfferImportErrorReportRequest
{
}
