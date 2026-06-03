<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncDownloadFileJsonRequest;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 */
#[ApiOperation('OR15')]
class ExportOrdersAsyncDownloadFileJsonRequest extends AbstractExportOrdersAsyncDownloadFileJsonRequest
{
}
