<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Returns\Returns;
use Mirakl\MMP\Common\Request\Returns\AbstractCreateReturnRequest;

/**
 * (RT01) Create a return request
 */
#[ApiOperation('RT01')]
class CreateReturnRequest extends AbstractCreateReturnRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return Returns::decorator();
    }
}
