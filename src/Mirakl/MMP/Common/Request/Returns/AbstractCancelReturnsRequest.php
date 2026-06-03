<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Returns\CancelReturns\ReturnsCollection;

/**
 * (RT29) Mark a return as canceled
 *
 * @method ReturnsCollection getReturns()
 * @method $this             setReturns(array|ReturnsCollection $returns)
 */
#[ApiOperation('RT29')]
abstract class AbstractCancelReturnsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/returns/cancel';

    /**
     * @var array
     */
    public $bodyParams = ['returns'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'returns' => [ReturnsCollection::class, 'create'],
    ];
}
