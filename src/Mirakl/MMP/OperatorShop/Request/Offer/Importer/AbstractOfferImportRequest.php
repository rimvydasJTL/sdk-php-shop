<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\Offer\Importer;

use Mirakl\Core\Request\AbstractFileRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\OperatorShop\Domain\Offer\Importer\OfferProductImportTracking;

/**
 * (OF01) Import offers
 * NB. This API must be called with the OPERATOR role and the user must have the 'Shop modification' right
 *
 * @method string getImportMode()
 * @method $this  setImportMode(string $mode)
 * @method bool   getOperatorFormat()
 * @method bool   isOperatorFormat()
 * @method $this  setOperatorFormat(bool $operatorFormat)
 * @method bool   getWithProducts()
 * @method bool   isWithProducts()
 * @method $this  setWithProducts(bool $flag)
 */
#[ApiOperation('OF01')]
abstract class AbstractOfferImportRequest extends AbstractFileRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/imports';

    /**
     * @var array
     */
    public $bodyParams = ['file', 'import_mode', 'operator_format', 'with_products'];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return OfferProductImportTracking::decorator();
    }
}
