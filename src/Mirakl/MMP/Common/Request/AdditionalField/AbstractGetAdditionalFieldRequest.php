<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\AdditionalField;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldCollection;

/**
 * (AF01) Get the list of any additional fields
 *
 * @method array getEntities() Array of AdditionalFieldLinkedEntity
 * @method $this setEntities(array $entities)
 */
#[ApiOperation('AF01')]
abstract class AbstractGetAdditionalFieldRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/additional_fields';

    /**
     * @var array
     */
    public $queryParams = ['entities'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return AdditionalFieldCollection::decorator('additional_fields');
    }
}
