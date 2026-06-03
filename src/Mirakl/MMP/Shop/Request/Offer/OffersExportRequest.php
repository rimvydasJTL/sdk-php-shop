<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Offer\AbstractOffersExportFileRequest;
use Mirakl\MMP\Shop\Domain\Collection\Offer\ExportOfferCollection;

/**
 * (OF51) Get a list of offers that have been updated and deleted since the last request date
 *
 * NB: This is the same API call that
 * @see OffersExportFileRequest
 * but with the CSV file having been parsed
 * @deprecated
 */
#[ApiOperation('OF51')]
class OffersExportRequest extends AbstractOffersExportFileRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new Decorator\CsvCollection(ExportOfferCollection::class);
    }
}
