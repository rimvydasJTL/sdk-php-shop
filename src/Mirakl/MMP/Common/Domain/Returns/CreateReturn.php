<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\ReturnLineCollection;

/**
 * @method string              getOrderCommercialId()
 * @method $this               setOrderCommercialId(string $orderCommercialId)
 * @method string              getReasonCode()
 * @method $this               setReasonCode(string $reasonCode)
 * @method string              getDescription()
 * @method $this               setDescription(string $description)
 * @method string              getMethodCode()
 * @method $this               setMethodCode(string $methodCode)
 * @method ReturnLineCollection getReturnLines()
 * @method $this               setReturnLines(ReturnLineCollection|array $returnLines)
 */
class CreateReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_lines' => [ReturnLineCollection::class, 'create'],
    ];
}
