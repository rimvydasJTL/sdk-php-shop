<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Reason;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Reason\ReasonCollection;

/**
 * (RE01) Get all reasons configured on the platform
 * Used for incident opening, refunds...
 * @see \Mirakl\MMP\Common\Domain\Reason\ReasonType
 */
#[ApiOperation('RE01')]
class GetReasonsRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/reasons';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ReasonCollection::decorator('reasons');
    }
}
