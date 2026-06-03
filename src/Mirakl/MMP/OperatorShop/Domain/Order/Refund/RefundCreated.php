<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\RefundEcoContributionCollection;

/**
 * @method RefundEcoContributionCollection getEcoContributions()
 * @method $this                           setEcoContributions(array|RefundEcoContributionCollection $ecoContributions)
 * @method string                          getId()
 * @method $this                           setId(string $id)
 * @method string                          getOrderRefundId()
 * @method $this                           setOrderRefundId(string $orderRefundId)
 * @method string                          getTaxLegalNotice()
 * @method $this                           setTaxLegalNotice(string $taxLegalNotice)
 */
class RefundCreated extends CreateRefund
{
    /**
     * @var array
     */
    protected static $mapping = [
        'refund_id' => 'id',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [RefundEcoContributionCollection::class, 'create'],
    ];
}
