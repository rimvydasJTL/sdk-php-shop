<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Importer;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferImportResult;

/**
 * (OF02) Get import information and stats
 *
 * @method string getImportId()
 * @method $this  setImportId(string $id)
 */
#[ApiOperation('OF02')]
abstract class AbstractOfferImportReportRequest extends AbstractImportRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/imports/{import}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return OfferImportResult::decorator();
    }
}
