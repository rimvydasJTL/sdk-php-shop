<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Currency;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Currency\CurrencyCollection;

/**
 * (CUR01) List currency codes and labels
 */
#[ApiOperation('CUR01')]
class GetCurrenciesRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/currencies';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return CurrencyCollection::decorator('currencies');
    }
}
