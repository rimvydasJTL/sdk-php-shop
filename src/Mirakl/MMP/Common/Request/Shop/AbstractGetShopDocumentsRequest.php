<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shop;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Shop\Document\ShopDocumentCollection;

/**
 * (S30) List shop's documents
 *
 * @method bool      getIncludeDeleted()
 * @method bool      isIncludeDeleted()
 * @method $this     setIncludeDeleted(bool $includeDeleted)
 * @method array     getShopIds()
 * @method $this     setShopIds(array $shopIds)
 * @method \DateTime getUpdatedSince()
 * @method $this     setUpdatedSince(\DateTime $updatedSince)
 */
#[ApiOperation('S30')]
abstract class AbstractGetShopDocumentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/documents';

    /**
     * @var array
     */
    public $queryParams = ['include_deleted', 'shop_ids', 'updated_since'];

    /**
     * @param array $shopIds
     */
    public function __construct(array $shopIds)
    {
        parent::__construct();

        $this->setShopIds($shopIds);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShopDocumentCollection::decorator('shop_documents');
    }
}
