<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Inbox;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Domain\Inbox\CreateInboxThreads\ThreadInput;
use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;

/**
 * (M14) Create a thread with a seller
 *
 * @method ThreadInput getThreadInput()
 * @method $this       setThreadInput(array|ThreadInput $threadInput)
 */
#[ApiOperation('M14')]
abstract class AbstractCreateInboxThreadsRequest extends AbstractFilesUploadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/inbox/threads';

    /**
     * @var array
     */
    public $bodyParams = ['thread_input'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'thread_input' => [ThreadInput::class, 'create'],
    ];
}
