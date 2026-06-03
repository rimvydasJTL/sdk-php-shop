<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\Tax;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (OR75) Get the order taxes defined on the platform
 */
#[ApiOperation('OR75')]
abstract class AbstractGetOrderTaxesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/orders/taxes';
}
