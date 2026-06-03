<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractTrackingRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsyncStatus;

/**
 * (TL04) Poll the status of an asynchronous transaction log export (TL03)
 */
#[ApiOperation('TL04')]
class ExportTransactionLinesAsyncStatusRequest extends AbstractTrackingRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/sellerpayment/transactions_logs/async/status/{tracking_id}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ExportTransactionLinesAsyncStatus::decorator();
    }
}
