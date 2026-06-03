<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (P45) Get products report file for a products import
 */
#[ApiOperation('P45')]
abstract class AbstractDownloadProductImportNewProductsReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/new_product_report';
}
