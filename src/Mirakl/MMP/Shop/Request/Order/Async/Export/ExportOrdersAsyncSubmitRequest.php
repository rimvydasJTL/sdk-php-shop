<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncSubmitRequest;

/**
 * (OR13) Export orders file asynchronously
 *
 * The export is asynchronous, export status can be retrieved by calling (OR14).
 * You must give at least one date range filter: created or last updated date or refunds created date.
 */
#[ApiOperation('OR13')]
class ExportOrdersAsyncSubmitRequest extends AbstractExportOrdersAsyncSubmitRequest
{
}
