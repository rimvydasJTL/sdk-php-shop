<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Inbox;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Inbox\InboxThreadsResponse;
use Mirakl\MMP\Common\Request\Inbox\AbstractCreateInboxThreadsRequest;

/**
 * (M14) Create a thread with a seller
 */
#[ApiOperation('M14')]
class CreateInboxThreadsRequest extends AbstractCreateInboxThreadsRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return InboxThreadsResponse::decorator();
    }
}
