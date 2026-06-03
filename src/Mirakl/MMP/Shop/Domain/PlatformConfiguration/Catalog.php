<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool   getAllowShopContributionToAllChannels()
 * @method bool   isAllowShopContributionToAllChannels()
 * @method $this  setAllowShopContributionToAllChannels(bool $allowShopContributionToAllChannels)
 * @method bool   getExcludeInvalidProducts()
 * @method bool   isExcludeInvalidProducts()
 * @method $this  setExcludeInvalidProducts(bool $excludeInvalidProducts)
 * @method string getListOfMultipleValuesSeparator()
 * @method $this  setListOfMultipleValuesSeparator(string $listOfMultipleValuesSeparator)
 * @method bool   getProductAcceptanceByChannel()
 * @method bool   isProductAcceptanceByChannel()
 * @method $this  setProductAcceptanceByChannel(bool $productAcceptanceByChannel)
 * @method bool   getProductDataValidationByChannel()
 * @method bool   isProductDataValidationByChannel()
 * @method $this  setProductDataValidationByChannel(bool $productDataValidationByChannel)
 * @method bool   getProductImportOnlyOnLeaf()
 * @method bool   isProductImportOnlyOnLeaf()
 * @method $this  setProductImportOnlyOnLeaf(bool $productImportOnlyOnLeaf)
 */
class Catalog extends MiraklObject
{
}
