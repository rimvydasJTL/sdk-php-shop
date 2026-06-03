<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractFileUrlRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\JsonTrait as JsonResponseDecorator;

/**
 * (TL05) Retrieve transaction logs files once asynchronous transaction logs export is complete (TL04)
 */
#[ApiOperation('TL05')]
class ExportTransactionLinesAsyncFilesRequest extends AbstractFileUrlRequest
{
    use JsonResponseDecorator;
}
