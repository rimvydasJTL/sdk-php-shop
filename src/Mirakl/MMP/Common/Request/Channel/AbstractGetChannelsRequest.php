<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Channel;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Channel\ChannelCollection;

/**
 * (CH11) List all enabled channels
 */
#[ApiOperation('CH11')]
abstract class AbstractGetChannelsRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/channels';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ChannelCollection::decorator('channels');
    }
}
