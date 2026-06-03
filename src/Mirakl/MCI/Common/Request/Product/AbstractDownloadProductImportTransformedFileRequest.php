<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (P46) Get transformed file for a products import
 */
#[ApiOperation('P46')]
abstract class AbstractDownloadProductImportTransformedFileRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/transformed_file';
}
