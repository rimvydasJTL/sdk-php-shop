<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Request\Document;

use Mirakl\Core\Request\ApiOperation;
use Mirakl\MMP\Common\Request\Document\AbstractGetDocumentsConfigurationRequest;

/**
 * (DO01) Get the list of all document types
 */
#[ApiOperation('DO01')]
class GetDocumentsConfigurationRequest extends AbstractGetDocumentsConfigurationRequest
{
}
