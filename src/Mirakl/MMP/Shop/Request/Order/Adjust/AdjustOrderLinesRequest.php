<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Adjust;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Adjust\CreatedAdjustmentCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Adjust\AdjustOrderLineCollection;

/**
 * (OR32) List order's documents
 *
 * @method AdjustOrderLineCollection getOrderLines()
 * @method $this                     setOrderLines(array|AdjustOrderLineCollection $orderLines)
 */
#[ApiOperation('OR32')]
class AdjustOrderLinesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/adjust';

    /**
     * @var array
     */
    public $bodyParams = ['order_lines'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [AdjustOrderLineCollection::class, 'create'],
    ];

    /**
     * @param array|AdjustOrderLineCollection $orderLines
     */
    public function __construct($orderLines)
    {
        parent::__construct();

        $this->setOrderLines($orderLines);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return CreatedAdjustmentCollection::decorator('order_lines_adjusted');
    }
}
