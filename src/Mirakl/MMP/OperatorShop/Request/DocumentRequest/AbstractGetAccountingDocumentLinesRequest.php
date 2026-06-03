<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Request\DocumentRequest;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\ApiOperation;
use Mirakl\Core\Request\SeekableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\Core\Response\Decorator\SeekableCollection;
use Mirakl\Core\Response\ResponseDecoratorInterface;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\DocumentRequestLineResponseCollection;

/**
 * (DR12) Get document request lines
 *
 * Sort by creation date (desc by default)
 * This API uses pagination by default and will return 50 documents request lines
 *
 * @method string getDocumentRequestId()
 * @method $this  setDocumentRequestId(string $documentRequestId)
 */
#[ApiOperation('DR12')]
abstract class AbstractGetAccountingDocumentLinesRequest extends AbstractRequest
{
    use SeekableTrait;
    use SortableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/document-request/{document_request_id}/lines';

    /**
     * @var array
     */
    public $uriVars = [
        '{document_request_id}' => 'document_request_id',
    ];

    /**
     * @param string $documentRequestId
     */
    public function __construct($documentRequestId)
    {
        parent::__construct();

        $this->setDocumentRequestId($documentRequestId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator(): ResponseDecoratorInterface
    {
        return new SeekableCollection(DocumentRequestLineResponseCollection::class, 'data');
    }
}
