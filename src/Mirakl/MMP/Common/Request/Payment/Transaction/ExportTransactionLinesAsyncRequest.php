<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsync;

/**
 * (TL03) Export transaction lines JSON file asynchronously
 *
 * @method string    getAccountingDocumentId()
 * @method $this     setAccountingDocumentId(string $accountingDocumentId)
 * @method string    getAccountingDocumentNumber()
 * @method $this     setAccountingDocumentNumber(string $accountingDocumentNumber)
 * @method \DateTime getDateCreatedFrom()
 * @method $this     setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method \DateTime getDateCreatedTo()
 * @method $this     setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method int       getItemsPerChunk()
 * @method $this     setItemsPerChunk(int $itemsPerChunk)
 * @method \DateTime getLastUpdatedFrom()
 * @method $this     setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method int       getMegabytesPerChunk()
 * @method $this     setMegabytesPerChunk(int $megabytesPerChunk)
 * @method string[]  getOrderId()
 * @method $this     setOrderId(string[] $orderId)
 * @method string[]  getOrderLineId()
 * @method $this     setOrderLineId(string[] $orderLineId)
 * @method string[]  getOrderReferenceForCustomer()
 * @method $this     setOrderReferenceForCustomer(string[] $orderReferenceForCustomer)
 * @method string[]  getOrderReferenceForSeller()
 * @method $this     setOrderReferenceForSeller(string[] $orderReferenceForSeller)
 * @method string[]  getPaymentState()
 * @method $this     setPaymentState(string[] $paymentState)
 * @method string    getPaymentVoucherNumber()
 * @method $this     setPaymentVoucherNumber(string $paymentVoucherNumber)
 * @method string[]  getPayOutPspCodes()
 * @method $this     setPayOutPspCodes(string[] $payOutPspCodes)
 * @method string[]  getShopDomain()
 * @method $this     setShopDomain(string[] $shopDomain)
 * @method int       getShopId()
 * @method $this     setShopId(int $shopId)
 * @method string[]  getShopModel()
 * @method $this     setShopModel(string[] $shopModel)
 * @method \DateTime getTransactionDateFrom()
 * @method $this     setTransactionDateFrom(\DateTime $transactionDateFrom)
 * @method \DateTime getTransactionDateTo()
 * @method $this     setTransactionDateTo(\DateTime $transactionDateTo)
 * @method string[]  getTransactionType() List of transaction types: \Mirakl\MMP\Common\Domain\Payment\Transaction\TransactionType
 * @method $this     setTransactionType(string[] $transactionType)
 */
#[ApiOperation('TL03')]
class ExportTransactionLinesAsyncRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/sellerpayment/transactions_logs/async';

    /**
     * @var array
     */
    public $bodyParams = [
        'accounting_document_id',
        'accounting_document_number',
        'date_created_from',
        'date_created_to',
        'items_per_chunk',
        'last_updated_from',
        'megabytes_per_chunk',
        'order_id',
        'order_line_id',
        'order_reference_for_customer',
        'order_reference_for_seller',
        'pay_out_psp_codes',
        'payment_state',
        'payment_voucher_number',
        'shop_domain',
        'shop_id',
        'shop_model',
        'transaction_date_from',
        'transaction_date_to',
        'transaction_type',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return ExportTransactionLinesAsync::decorator();
    }
}
