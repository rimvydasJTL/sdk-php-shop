<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\AverageCart;

/**
 * @method AverageCart current()
 * @method AverageCart first()
 * @method AverageCart get($offset)
 * @method AverageCart last()
 * @method AverageCart offsetGet($offset)
 */
class AverageCartCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AverageCart::class;
}
