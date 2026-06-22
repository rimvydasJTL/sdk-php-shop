<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\CreateReturn;

/**
 * @method CreateReturn current()
 * @method CreateReturn first()
 * @method CreateReturn get($offset)
 * @method CreateReturn offsetGet($offset)
 * @method CreateReturn last()
 */
class CreateReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateReturn::class;
}
