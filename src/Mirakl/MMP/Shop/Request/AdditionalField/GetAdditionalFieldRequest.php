<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\AdditionalField;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\AdditionalField\AbstractGetAdditionalFieldRequest;
use Mirakl\MMP\Shop\Domain\Collection\AdditionalFieldCollection;

/**
 * (AF01) Get the list of any additional fields
 */
#[ApiOperation('AF01')]
class GetAdditionalFieldRequest extends AbstractGetAdditionalFieldRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return AdditionalFieldCollection::decorator('additional_fields');
    }
}
