<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Evaluation;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Evaluation\AbstractGetOrderEvaluationRequest;

/**
 * (OR51) Get the evaluation of an order
 */
#[ApiOperation('OR51')]
class GetOrderEvaluationRequest extends AbstractGetOrderEvaluationRequest
{
}
