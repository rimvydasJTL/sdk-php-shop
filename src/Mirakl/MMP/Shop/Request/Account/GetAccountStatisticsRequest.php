<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Account;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Account\AccountStatisticsResponse;

/**
 * (A21) Get shop statistics
 *
 * @method string   getChannelCode()
 * @method $this    setChannelCode(string $channelCode)
 * @method string[] getPeriods()
 * @method $this    setPeriods(string[] $periods)
 */
#[ApiOperation('A21')]
class GetAccountStatisticsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/account/statistics';

    /**
     * @var array
     */
    public $queryParams = ['channel_code', 'periods'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return AccountStatisticsResponse::decorator();
    }
}
