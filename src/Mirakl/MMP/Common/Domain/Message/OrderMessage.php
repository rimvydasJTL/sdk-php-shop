<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Message;

use Mirakl\MMP\Common\Domain\Collection\Message\MessageDocumentCollection;

/**
 * @method bool                      getArchived()
 * @method bool                      isArchived()
 * @method $this                     setArchived(bool $archived)
 * @method string                    getCommercialId()
 * @method $this                     setCommercialId(string $commercialId)
 * @method MessageDocumentCollection getDocuments()
 * @method int                       getOfferId()
 * @method $this                     setOfferId(int $offerId)
 * @method string                    getOrderId()
 * @method $this                     setOrderId(string $orderId)
 * @method bool                      getRead()
 * @method bool                      isRead()
 * @method $this                     setRead(bool $read)
 * @method bool                      getToCustomerArchived()
 * @method bool                      isToCustomerArchived()
 * @method $this                     setToCustomerArchived(bool $toCustomerArchived)
 * @method bool                      getToOperatorArchived()
 * @method bool                      isToOperatorArchived()
 * @method $this                     setToOperatorArchived(bool $toOperatorArchived)
 * @method bool                      getToShopArchived()
 * @method bool                      isToShopArchived()
 * @method $this                     setToShopArchived(bool $toShopArchived)
 * @method bool                      getVisible()
 * @method bool                      isVisible()
 * @method $this                     setVisible(bool $visible)
 */
class OrderMessage extends AbstractMessage
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [MessageDocumentCollection::class, 'create'],
    ];
}
