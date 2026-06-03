<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Returns;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Returns\AbstractAcceptOrRefuseReturnsRequest;
use Mirakl\MMP\Shop\Domain\Returns\ReturnAcceptOrRefuseResponse;

/**
 * (RT21) Accept or refuse a return request
 */
#[ApiOperation('RT21')]
class AcceptOrRefuseReturnsRequest extends AbstractAcceptOrRefuseReturnsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ReturnAcceptOrRefuseResponse::decorator();
    }
}
