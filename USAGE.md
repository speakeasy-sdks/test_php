<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use my_workspace\Updater;
use my_workspace\Updater\Models\Shared;
use my_workspace\Updater\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Updater\Updater::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ReadDealRequest();
    $request->dealId = 259512;

    $response = $sdk->deal->readDeal($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->