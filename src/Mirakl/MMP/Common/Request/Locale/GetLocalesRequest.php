<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Locale;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Collection\Locale\LocaleCollection;

/**
 * (L01) Get active locales
 */
#[ApiOperation('L01')]
class GetLocalesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/locales';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return LocaleCollection::decorator('locales');
    }
}
