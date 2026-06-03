<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Shipping\LogisticClassCollection;

/**
 * (SH31) List all logistic classes
 */
#[ApiOperation('SH31')]
abstract class AbstractGetLogisticClassRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/shipping/logistic_classes';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return LogisticClassCollection::decorator('logistic_classes');
    }
}
