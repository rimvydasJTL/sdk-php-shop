<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Request\AbstractFileUrlRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (OF54) Retrieve offers CSV file once asynchronous offer export is complete (OF52)
 */
#[ApiOperation('OF54')]
class OffersExportAsyncFileCsvRequest extends AbstractFileUrlRequest
{
    use CsvResponseDecorator;
}
