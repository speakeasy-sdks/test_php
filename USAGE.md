<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use my_workspace\Updater\Updater;
use my_workspace\Updater\Models\Shared\Security;
use my_workspace\Updater\Models\Operations\ReadDealRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = Updater::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadDealRequest();
    $request->dealId = 259512;

    $response = $sdk->deal->readDeal($request);

    if ($response->readDeal200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->