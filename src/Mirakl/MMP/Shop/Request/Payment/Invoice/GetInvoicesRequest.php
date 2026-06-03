<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Payment\Invoice;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\OperatorShop\Request\Payment\Invoice\AbstractGetInvoicesRequest;

/**
 * (IV01) List invoices
 * Note: this resource supports pagination and will return 10 invoices
 */
#[ApiOperation('IV01')]
class GetInvoicesRequest extends AbstractGetInvoicesRequest
{
}
