<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncFilesRequest;
use Mirakl\MMP\Shop\Domain\Collection\Payment\Transaction\TransactionLineCollection;

/**
 * (TL05) Retrieve transaction logs files once asynchronous transaction logs export is complete (TL04)
 */
#[ApiOperation('TL05')]
class ExportTransactionLinesAsyncDataRequest extends ExportTransactionLinesAsyncFilesRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return TransactionLineCollection::decorator('data');
    }
}
