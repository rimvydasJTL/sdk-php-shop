<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop;

use Mirakl\MMP\Common\Domain\Collection\Shop\SubBalanceCollection;
use Mirakl\MMP\Common\Domain\Shop\AbstractPaymentDetails;

/**
 * @method float                getReserveBalance()
 * @method $this                setReserveBalance(float $reserveBalance)
 * @method float                getReserveTarget()
 * @method $this                setReserveTarget(float $reserveTarget)
 * @method SubBalanceCollection getSubBalances()
 * @method $this                setSubBalances(array|SubBalanceCollection $subBalances)
 */
class ShopPaymentDetails extends AbstractPaymentDetails
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'sub_balances' => [SubBalanceCollection::class, 'create'],
    ];
}
