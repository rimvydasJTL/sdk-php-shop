<?php

declare(strict_types=1);

namespace Mirakl\MCI\Shop\Request\Hierarchy;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MCI\Common\Request\Hierarchy\AbstractGetHierarchiesRequest;

/**
 * (H11) List hierarchies related (parents and children) to the given hierarchy
 */
#[ApiOperation('H11')]
class GetHierarchiesRequest extends AbstractGetHierarchiesRequest
{
}
