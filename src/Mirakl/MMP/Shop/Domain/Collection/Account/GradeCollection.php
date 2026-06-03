<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\Grade;

/**
 * @method Grade current()
 * @method Grade first()
 * @method Grade get($offset)
 * @method Grade last()
 * @method Grade offsetGet($offset)
 */
class GradeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Grade::class;
}
