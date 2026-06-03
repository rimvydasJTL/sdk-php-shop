<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Order\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Order\Document\AbstractDeleteOrderDocumentsRequest;

/**
 * (OR76) Delete document attached to an order
 *
 * @method string getShopId()
 * @method $this  setShopId(string $shopId)
 */
#[ApiOperation('OR76')]
class DeleteOrderDocumentRequest extends AbstractDeleteOrderDocumentsRequest
{
    /**
     * @var array
     */
    public $queryParams = ['shop_id'];

    /**
     * @param string $documentId
     * @param string $shopId
     */
    public function __construct($documentId, $shopId = null)
    {
        if (!empty($shopId)) {
            $this->setShopId($shopId);
        }
        parent::__construct($documentId);
    }
}
