# (STO02) Get information and statistics about an offer stock import

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Offer\Stock\GetOffersStockImportsStatusRequest;

$api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');

$request = new GetOffersStockImportsStatusRequest('import-12345');

$result = $api->getOffersStockImportsStatus($request);
// $result => @see \Mirakl\MMP\Common\Domain\Offer\Stock\OffersStockImportsStatusResponse

$status = $result->getStatus();
$linesInSuccess = $result->getLinesInSuccess();
$linesInError = $result->getLinesInError();
$hasErrorReport = $result->hasErrorReport();
```
