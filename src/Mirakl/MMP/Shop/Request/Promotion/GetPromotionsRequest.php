<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Promotion;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Request\Promotion\AbstractGetPromotionsRequest;
use Mirakl\MMP\Shop\Domain\Collection\Promotion\PromotionCollection;

/**
 * (PR01) List promotions information
 *
 * @method string[] getIds()
 * @method $this    setIds(string[] $ids)
 */
#[ApiOperation('PR01')]
class GetPromotionsRequest extends AbstractGetPromotionsRequest
{
    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $params = parent::getQueryParams();
        if (isset($params['ids'])) {
            $params['ids'] = \Mirakl\tuples_to_query_param($this->getIds());
        }

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return PromotionCollection::decorator('promotions');
    }
}
