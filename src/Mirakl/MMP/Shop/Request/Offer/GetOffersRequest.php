<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Offer\AbstractGetOffersRequest;
use Mirakl\MMP\Shop\Domain\Collection\Offer\ShopOfferCollection;

/**
 * (OF21) List offers for a shop
 * This API uses pagination by default and will return 10 offers
 *
 * @method string getShopId()
 * @method $this  setShopId(string $shopId)
 * @method string getSku()
 * @method $this  setSku(string $sku)
 * @method string getProductId()
 * @method $this  setProductId(string $productId)
 */
#[ApiOperation('OF21')]
class GetOffersRequest extends AbstractGetOffersRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers';

    /**
     * @var array
     */
    public $queryParams = [
        'favorite',
        'offer_state_codes',
        'pricing_channel_code',
        'pricing_customer_organization_id',
        'product_id',
        'shop_id',
        'sku',
    ];

    /**
     * @param string $shopId
     */
    public function __construct($shopId)
    {
        parent::__construct();

        $this->setShopId($shopId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ShopOfferCollection::decorator('offers');
    }
}
