<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Shipping;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;

/**
 * (SH51) List shipping charges configured on the platform
 *
 * @method string    getCurrencyIsoCode()
 * @method $this     setCurrencyIsoCode(string $currencyIsoCode)
 * @method bool      getOverriddenByShop()
 * @method bool      isOverriddenByShop()
 * @method $this     setOverriddenByShop(bool $overriddenByShop)
 * @method int[]     getShopIds()
 * @method $this     setShopIds(int[] $shopIds)
 * @method \DateTime getUpdatedSince()
 * @method $this     setUpdatedSince(\DateTime $updatedSince)
 */
#[ApiOperation('SH51')]
abstract class AbstractGetShippingChargesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipping/charges';

    /**
     * @var array
     */
    public $queryParams = [
        'currency_iso_code',
        'overridden_by_shop',
        'shop_ids',
        'updated_since',
    ];
}
