# (PRI03) Get the error report for a price import in CSV format

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Offer\Pricing\Importer\OfferPricingsImportErrorReportRequest;

$api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
$request = new OfferPricingsImportErrorReportRequest('IMPORT_ID');
$result = $api->getOfferPricingsImportErrorReport($request);
// $result => @see \Mirakl\Core\Domain\FileWrapper
```
