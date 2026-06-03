<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer\Stock;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDateCreated()
 * @method $this     setDateCreated(\DateTime $dateCreated)
 * @method bool      hasErrorReport()
 * @method bool      getHasErrorReport()
 * @method $this     setHasErrorReport(bool $hasErrorReport)
 * @method string    getImportId()
 * @method $this     setImportId(string $importId)
 * @method int       getLinesInError()
 * @method $this     setLinesInError(int $linesInError)
 * @method int       getLinesInSuccess()
 * @method $this     setLinesInSuccess(int $linesInSuccess)
 * @method int       getShopId()
 * @method $this     setShopId(int $shopId)
 * @method string    getStatus()
 * @method $this     setStatus(string $status)
 */
class OffersStockImportsStatusResponse extends MiraklObject
{
}
