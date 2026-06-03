<?php

declare(strict_types=1);

namespace Mirakl\Core\Request;

#[\Attribute(\Attribute::TARGET_CLASS)]
class ApiOperation
{
    public function __construct(
        public readonly string $operationId,
    ) {
    }
}
