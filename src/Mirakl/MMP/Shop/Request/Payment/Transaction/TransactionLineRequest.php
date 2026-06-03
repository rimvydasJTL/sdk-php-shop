<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Shop\Domain\Collection\Payment\Transaction\TransactionLineCollection;

/**
 * (TL02) Get a listing of transactions (this resource supports seek pagination)
 *
 * @method string    getAccountingDocumentId()
 * @method $this     setAccountingDocumentId(string $accountingDocumentId)
 * @method string    getAccountingDocumentNumber()
 * @method $this     setAccountingDocumentNumber(string $accountingDocumentNumber)
 * @method \DateTime getDateCreatedFrom()
 * @method $this     setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method \DateTime getDateCreatedTo()
 * @method $this     setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method \DateTime getLastUpdatedFrom()
 * @method $this     setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method string[]  getOrderId()
 * @method $this     setOrderId(string[] $orderId)
 * @method string[]  getOrderLineId()
 * @method $this     setOrderLineId(string[] $orderLineId)
 * @method string[]  getOrderReferencesForCustomer()
 * @method $this     setOrderReferencesForCustomer(string[] $orderReferenceForCustomer)
 * @method string[]  getOrderReferencesForSeller()
 * @method $this     setOrderReferencesForSeller(string[] $orderReferenceForSeller)
 * @method string[]  getPaymentState()
 * @method $this     setPaymentState(string[] $paymentState)
 * @method string[]  getPayOutPspCodes()
 * @method $this     setPayOutPspCodes(string[] $payOutPspCodes)
 * @method string[]  getShopModels()
 * @method $this     setShopModels(string[] $shopModel)
 * @method \DateTime getTransactionDateFrom()
 * @method $this     setTransactionDateFrom(\DateTime $transactionDateFrom)
 * @method \DateTime getTransactionDateTo()
 * @method $this     setTransactionDateTo(\DateTime $transactionDateTo)
 * @method string[]  getTransactionType()
 * @method $this     setTransactionType(string[] $transactionType)
 */
#[ApiOperation('TL02')]
class TransactionLineRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/sellerpayment/transactions_logs';

    /**
     * @var array
     */
    public $queryParams = [
        'accounting_document_id',
        'accounting_document_number',
        'date_created_from',
        'date_created_to',
        'last_updated_from',
        'order_id',
        'order_line_id',
        'order_references_for_customer' => 'order_reference_for_customer',
        'order_references_for_seller' => 'order_reference_for_seller',
        'pay_out_psp_codes',
        'payment_state',
        'psp_name',
        'shop_models' => 'shop_model',
        'transaction_date_from',
        'transaction_date_to',
        'transaction_type',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new SeekableCollection(TransactionLineCollection::class, 'data');
    }
}
