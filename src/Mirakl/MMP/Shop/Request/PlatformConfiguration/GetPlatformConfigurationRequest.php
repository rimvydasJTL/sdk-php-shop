<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\PlatformConfiguration;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\PlatformConfiguration\PlatformConfigurationResponse;

/**
 * (PC01) Get platform configurations
 */
#[ApiOperation('PC01')]
class GetPlatformConfigurationRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/platform/configuration';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return PlatformConfigurationResponse::decorator();
    }
}
