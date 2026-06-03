<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Funding;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method Fees     getFees()
 * @method $this    setFees(array|Fees $fees)
 * @method Offer    getOffer()
 * @method $this    setOffer(array|Offer $offer)
 * @method Shipping getShipping()
 * @method $this    setShipping(array|Shipping $shipping)
 * @method float    getTotalAmount()
 * @method $this    setTotalAmount(float $totalAmount)
 * @method float    getTotalTaxAmount()
 * @method $this    setTotalTaxAmount(float $totalTaxAmount)
 */
class Party extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'fees'     => [Fees::class, 'create'],
        'offer'    => [Offer::class, 'create'],
        'shipping' => [Shipping::class, 'create'],
    ];
}
