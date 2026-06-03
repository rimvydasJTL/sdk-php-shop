<?php

declare(strict_types=1);

namespace Mirakl\Core\Response\Decorator;

use Mirakl\Core\Response\ResponseDecoratorInterface;

trait FileTrait
{
    /**
     * @return ResponseDecoratorInterface
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new File();
    }
}
