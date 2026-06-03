<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Request\AbstractFileUrlRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferCollection;

/**
 * (OF54) Retrieve offers collection once asynchronous offer export is complete (OF52)
 *
 * **************************** Works only for JSON exports ****************************
 */
#[ApiOperation('OF54')]
class OffersExportAsyncFileRequest extends AbstractFileUrlRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return AsyncExportOfferCollection::decorator();
    }
}
