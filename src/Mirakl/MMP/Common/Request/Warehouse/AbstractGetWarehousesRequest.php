<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Warehouse;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;

/**
 * (WH11) List warehouses
 *
 * @method \DateTime getLastUpdatedFrom()
 * @method $this     setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method string[]  getShopIds()
 * @method $this     setShopIds(string[] $shopIds)
 */
#[ApiOperation('WH11')]
abstract class AbstractGetWarehousesRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/warehouses';

    /**
     * @var array
     */
    public $queryParams = ['last_updated_from', 'shop_ids'];
}
