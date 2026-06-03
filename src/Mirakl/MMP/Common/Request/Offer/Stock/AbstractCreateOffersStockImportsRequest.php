<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Offer\Stock;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (STO01) Import a stock file
 */
#[ApiOperation('STO01')]
abstract class AbstractCreateOffersStockImportsRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/stock/imports';
}
