<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\Configuration;

/**
 * @method Configuration current()
 * @method Configuration first()
 * @method Configuration get($offset)
 * @method Configuration last()
 * @method Configuration offsetGet($offset)
 */
class ConfigurationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Configuration::class;
}
