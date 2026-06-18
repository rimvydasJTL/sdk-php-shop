<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Returns;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Returns\CreateReturn;

/**
 * (RT01) Create a return request
 *
 * @method CreateReturn getReturn()
 * @method $this        setReturn(array|CreateReturn $return)
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
    protected static $dataTypes = [
        'return' => [CreateReturn::class, 'create'],
    ];

    /**
     * @param array|CreateReturn $return
     */
    public function __construct($return)
    {
        parent::__construct();

        $this->setReturn($return);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getReturn()->toArray();
    }
}
