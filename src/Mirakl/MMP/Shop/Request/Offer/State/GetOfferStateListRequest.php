<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Offer\State;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Offer\State\OfferStateCollection;

/**
 * (OF61) Get the list of the offer states configured on the platform
 *
 * (sorted by sortIndex, defined in the BO)
 */
#[ApiOperation('OF61')]
class GetOfferStateListRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/offers/states';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return OfferStateCollection::decorator('offer_states');
    }
}
