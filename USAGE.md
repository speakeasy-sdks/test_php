<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \my_workspace\Updater\Updater;
use \my_workspace\Updater\Models\Shared\Security;
use \my_workspace\Updater\Models\Operations\ReadDealRequest;

$sdk = Updater::builder()
    ->build();

try {
    $request = new ReadDealRequest();
    $request->dealId = 548814;

    $response = $sdk->deal->readDeal($request);

    if ($response->readDeal200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->