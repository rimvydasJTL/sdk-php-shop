<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Request\AbstractTrackingRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\PollOffersExportAsyncStatusResult;

/**
 * (OF53) Poll the status of an asynchronous offers export (OF52)
 */
#[ApiOperation('OF53')]
class PollOffersExportAsyncRequest extends AbstractTrackingRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/export/async/status/{tracking_id}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return PollOffersExportAsyncStatusResult::decorator();
    }
}
