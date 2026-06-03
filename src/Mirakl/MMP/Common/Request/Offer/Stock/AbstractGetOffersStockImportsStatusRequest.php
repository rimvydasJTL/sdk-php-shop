<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer\Stock;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (STO02) Get information and statistics about an offer stock import
 *
 * @method string getImportId()
 * @method $this  setImportId(string $importId)
 */
#[ApiOperation('STO02')]
abstract class AbstractGetOffersStockImportsStatusRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/stock/imports/{import_id}/status';

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
