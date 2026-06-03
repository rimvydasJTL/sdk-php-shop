<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Order\Funding\Party;

/**
 * @method Party getCustomer()
 * @method $this setCustomer(array|Party $customer)
 * @method Party getOperator()
 * @method $this setOperator(array|Party $operator)
 */
class Funding extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer' => [Party::class, 'create'],
        'operator' => [Party::class, 'create'],
    ];
}
