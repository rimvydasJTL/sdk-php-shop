<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Returns\Returns;
use Mirakl\MMP\Common\Request\Returns\AbstractCancelReturnsRequest;

/**
 * (RT29) Mark a return as canceled
 */
#[ApiOperation('RT29')]
class CancelReturnsRequest extends AbstractCancelReturnsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return Returns::decorator();
    }
}
