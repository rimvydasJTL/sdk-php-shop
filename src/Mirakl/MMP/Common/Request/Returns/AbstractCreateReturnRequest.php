<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Collection\Returns\CreateReturnCollection;

/**
 * (RT01) Create a return request
 *
 * @method CreateReturnCollection getReturns()
 * @method $this                  setReturns(CreateReturnCollection|array $returns)
 */
#[ApiOperation('RT01')]
abstract class AbstractCreateReturnRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/returns';

    /**
     * @var array
     */
    public $bodyParams = ['returns'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'returns' => [CreateReturnCollection::class, 'create'],
    ];

    /**
     * @param array|CreateReturnCollection $returns
     */
    public function __construct($returns)
    {
        parent::__construct();

        $this->setReturns($returns);
    }
}
