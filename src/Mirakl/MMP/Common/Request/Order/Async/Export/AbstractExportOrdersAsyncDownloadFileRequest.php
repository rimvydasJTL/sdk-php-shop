<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\Async\Export;

use Mirakl\Core\Request\AbstractFileUrlRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 */
#[ApiOperation('OR15')]
abstract class AbstractExportOrdersAsyncDownloadFileRequest extends AbstractFileUrlRequest
{
}
