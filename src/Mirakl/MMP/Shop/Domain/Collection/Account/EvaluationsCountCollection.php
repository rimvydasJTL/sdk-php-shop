<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Account;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Account\EvaluationsCount;

/**
 * @method EvaluationsCount current()
 * @method EvaluationsCount first()
 * @method EvaluationsCount get($offset)
 * @method EvaluationsCount last()
 * @method EvaluationsCount offsetGet($offset)
 */
class EvaluationsCountCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = EvaluationsCount::class;
}
