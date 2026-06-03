<?php

declare(strict_types=1);

namespace Mirakl\Core\Request;

#[\Attribute(\Attribute::TARGET_CLASS)]
class ApiTest
{
    public function __construct(
        public readonly string $operationId,
    ) {
    }
}
