<?php

declare(strict_types=1);

namespace Mirakl\MCM\Shop\Request\Catalog\Product;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\Decorator\File;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MCM\Common\Request\Catalog\Product\AbstractGetSourceProductDataSheetStatusRequest;

/**
 * (CM11) Downloads the source product data sheet status file
 */
#[ApiOperation('CM11')]
class GetSourceProductDataSheetStatusFileRequest extends AbstractGetSourceProductDataSheetStatusRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new File('json');
    }
}
