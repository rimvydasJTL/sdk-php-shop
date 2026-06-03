<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnSuccessCollection;

/**
 * @method ReturnErrorCollection   getReturnErrors()
 * @method $this                   setReturnErrors(array|ReturnErrorCollection $returnErrors)
 * @method ReturnSuccessCollection getReturnSuccess()
 * @method $this                   setReturnSuccess(array|ReturnSuccessCollection $returnSuccess)
 */
class Returns extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_errors'  => [ReturnErrorCollection::class, 'create'],
        'return_success' => [ReturnSuccessCollection::class, 'create'],
    ];
}
