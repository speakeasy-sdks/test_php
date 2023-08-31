# my-workspace/updater

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/test_php.git"
        }
    ],
    "require": {
        "my-workspace/updater": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
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

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [deal](docs/sdks/deal/README.md)

* [readDeal](docs/sdks/deal/README.md#readdeal) - Read a deal.
* [updateDeal](docs/sdks/deal/README.md#updatedeal) - Update a deal.

### [order](docs/sdks/order/README.md)

* [readOrder](docs/sdks/order/README.md#readorder) - Read a order.
* [updateOrder](docs/sdks/order/README.md#updateorder) - Update an order.

### [product](docs/sdks/product/README.md)

* [readProduct](docs/sdks/product/README.md#readproduct) - Read a product.
* [updateProduct](docs/sdks/product/README.md#updateproduct) - Update a product.
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
