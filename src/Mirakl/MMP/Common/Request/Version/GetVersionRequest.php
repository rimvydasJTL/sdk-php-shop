<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Version;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Version;

#[ApiOperation('V01')]
class GetVersionRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/version';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return Version::decorator();
    }
}
