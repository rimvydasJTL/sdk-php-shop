<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Attribute;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Attribute\AbstractGetAttributesRequest;

/**
 * (PM11) Get attributes configuration
 *
 * @method bool  getAllOperatorAttributes()
 * @method $this setAllOperatorAttributes(bool $allOperatorAttributes)
 */
#[ApiOperation('PM11')]
class GetAttributesRequest extends AbstractGetAttributesRequest
{
    public $queryParams = [
        'all_operator_attributes' => 'all_operator_attributes',
        'hierarchy_code'          => 'hierarchy',
        'max_level'               => 'max_level',
        'with_roles'              => 'with_roles',
    ];
}
