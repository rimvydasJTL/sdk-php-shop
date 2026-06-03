<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Async\Export;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Order\Async\Export\AbstractExportOrdersAsyncDownloadFileRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection;

/**
 * (OR15) Retrieve asynchronous orders export files (OR13)
 *
 * Retrieve orders files once asynchronous export is complete (OR14).
 */
#[ApiOperation('OR15')]
class ExportOrdersAsyncDownloadFileRequest extends AbstractExportOrdersAsyncDownloadFileRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShopOrderCollection::decorator('orders');
    }
}
