<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncStatusRequest;

/**
 * (OR14) Poll the status of an asynchronous orders export (OR13)
 *
 * Retrieve the status for an OR13 orders export request.
 * When the export is complete, the URLs to retrieve the files are returned (OR15).
 */
#[ApiOperation('OR14')]
class ExportOrdersAsyncStatusRequest extends AbstractExportOrdersAsyncStatusRequest
{
}
