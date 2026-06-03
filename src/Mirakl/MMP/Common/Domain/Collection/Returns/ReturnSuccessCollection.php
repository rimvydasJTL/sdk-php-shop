<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnSuccess;

/**
 * @method ReturnSuccess current()
 * @method ReturnSuccess first()
 * @method ReturnSuccess get($offset)
 * @method ReturnSuccess last()
 * @method ReturnSuccess offsetGet($offset)
 */
class ReturnSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnSuccess::class;
}
