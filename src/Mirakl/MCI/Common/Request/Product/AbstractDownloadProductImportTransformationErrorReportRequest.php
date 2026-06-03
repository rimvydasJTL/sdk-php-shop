<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (P47) Get transformation errors report file for a product import
 */
#[ApiOperation('P47')]
abstract class AbstractDownloadProductImportTransformationErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/transformation_error_report';
}
