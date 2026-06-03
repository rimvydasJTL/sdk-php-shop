<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (P44) Get errors report file for a products import
 */
#[ApiOperation('P44')]
abstract class AbstractDownloadProductImportErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/error_report';
}
