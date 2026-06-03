<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Returns\CloseReturns\ReturnsCollection;

/**
 * (RT27) Mark a return as closed
 *
 * @method ReturnsCollection getReturns()
 * @method $this             setReturns(array|ReturnsCollection $returns)
 */
#[ApiOperation('RT27')]
abstract class AbstractCloseReturnsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/returns/close';

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
