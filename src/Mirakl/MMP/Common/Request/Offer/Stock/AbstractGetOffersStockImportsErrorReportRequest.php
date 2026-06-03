<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer\Stock;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait;

/**
 * (STO03) Get the error report for a stock import in CSV format
 *
 * @method string getImportId()
 * @method $this  setImportId(string $importId)
 */
#[ApiOperation('STO03')]
abstract class AbstractGetOffersStockImportsErrorReportRequest extends AbstractRequest
{
    use CsvTrait;

    /**
     * @var string
     */
    protected $endpoint = '/offers/stock/imports/{import_id}/error_report';

    /**
     * @var array
     */
    protected $uriVars = [
        '{import_id}' => 'import_id',
    ];

    /**
     * @param string $importId
     */
    public function __construct(string $importId)
    {
        parent::__construct();
        $this->setImportId($importId);
    }
}
