<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Importer;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (OF03) Get error report file for an offer import
 *
 * @method string getImportId()
 * @method $this  setImportId(string $id)
 */
#[ApiOperation('OF03')]
abstract class AbstractOfferImportErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/offers/imports/{import}/error_report';
}
