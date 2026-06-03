<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Shop\Document\AbstractDeleteShopDocumentRequest;

/**
 * (S33) Delete document associated to a shop
 *
 * @method string getShopId()
 * @method $this  setShopId(string $shopId)
 */
#[ApiOperation('S33')]
class DeleteShopDocumentRequest extends AbstractDeleteShopDocumentRequest
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
