# (CUR01) List currency codes and labels

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Currency\GetCurrenciesRequest;

$api = new ShopApiClient('API_URL', 'API_KEY');

$request = new GetCurrenciesRequest();

$request->setLocale('en_US');

$currencies = $api->getCurrencies($request);

// $currencies => @see \Mirakl\MMP\Shop\Domain\Collection\Currency\CurrencyCollection
```
