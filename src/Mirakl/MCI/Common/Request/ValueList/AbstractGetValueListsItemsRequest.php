<?php

declare(strict_types=1);

namespace Mirakl\MCI\Common\Request\ValueList;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MCI\Common\Domain\ValueLists;

/**
 * (VL11) Get information about operator's value lists
 *
 * @method string getValueListCode()
 * @method $this  setValueListCode(string $valueListCode)
 */
#[ApiOperation('VL11')]
abstract class AbstractGetValueListsItemsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/values_lists';

    /**
     * @var array
     */
    public $queryParams = ['value_list_code' => 'code'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ValueLists::decorator();
    }
}
