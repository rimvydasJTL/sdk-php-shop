<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Update;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdateOrderCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedOrderAndErrorCollection;

/**
 * (OR04) Patch update orders
 *
 * @method UpdateOrderCollection getOrders()
 * @method $this                 setOrders(array|UpdateOrderCollection $orders)
 */
#[ApiOperation('OR04')]
class UpdateOrdersRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders';

    /**
     * @var bool
     */
    protected $cleanup = false;

    /**
     * @var array
     */
    public $bodyParams = ['orders'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'orders' => [UpdateOrderCollection::class, 'create'],
    ];

    /**
     * @param array|UpdateOrderCollection $orders
     */
    public function __construct($orders)
    {
        parent::__construct();

        $this->setOrders($orders);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return UpdatedOrderAndErrorCollection::decorator('updated_orders');
    }
}
