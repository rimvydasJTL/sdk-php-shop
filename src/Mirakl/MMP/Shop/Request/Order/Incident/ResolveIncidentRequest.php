<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Incident;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Shop\Domain\Order\Incident\IncidentReason;

/**
 * (OR64) Mark an incident as resolved
 *
 * @method IncidentReason getIncidentReason()
 * @method $this          setIncidentReason(array|IncidentReason $incidentReason)
 * @method string         getOrderId()
 * @method $this          setOrderId(string $orderId)
 * @method string         getOrderLineId()
 * @method $this          setOrderLineId(string $orderId)
 */
#[ApiOperation('OR64')]
class ResolveIncidentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/lines/{line}/resolve_incident';

    /**
     * @var array
     */
    protected $uriVars = [
        '{order}' => 'order_id',
        '{line}' => 'order_line_id',
    ];

    /**
     * @var array
     */
    public $bodyParams = ['incident_reason'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'incident_reason' => [IncidentReason::class, 'create'],
    ];

    /**
     * @param string $orderId
     * @param string $orderLineId
     * @param string $reasonCode
     */
    public function __construct($orderId, $orderLineId, $reasonCode)
    {
        parent::__construct();

        $this->setOrderId($orderId);
        $this->setOrderLineId($orderLineId);
        $this->setIncidentReason(['reason_code' => $reasonCode]);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getIncidentReason()->toArray();
    }
}
