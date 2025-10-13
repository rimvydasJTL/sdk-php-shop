<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Version;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Version;

class GetVersionRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/version';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return Version::decorator();
    }
}
