<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Payment\Invoice;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\OperatorShop\Request\Payment\Invoice\AbstractDownloadInvoiceRequest;

/**
 * (IV02) Download an invoice
 */
#[ApiOperation('IV02')]
class DownloadInvoiceRequest extends AbstractDownloadInvoiceRequest
{
}
