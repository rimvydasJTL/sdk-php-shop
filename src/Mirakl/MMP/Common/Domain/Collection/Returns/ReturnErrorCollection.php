<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnError;

/**
 * @method ReturnError current()
 * @method ReturnError first()
 * @method ReturnError get($offset)
 * @method ReturnError last()
 * @method ReturnError offsetGet($offset)
 */
class ReturnErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnError::class;
}
