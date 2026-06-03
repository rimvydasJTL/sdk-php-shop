<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Returns\Returns;
use Mirakl\MMP\Common\Request\Returns\AbstractCloseReturnsRequest;

/**
 * (RT27) Mark a return as closed
 */
#[ApiOperation('RT27')]
class CloseReturnsRequest extends AbstractCloseReturnsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return Returns::decorator();
    }
}
