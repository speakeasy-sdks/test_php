# my-workspace/updater

<!-- Start SDK Installation [installation] -->
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
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

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
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [Deal](docs/sdks/deal/README.md)

* [readDeal](docs/sdks/deal/README.md#readdeal) - Read a deal.
* [updateDeal](docs/sdks/deal/README.md#updatedeal) - Update a deal.

### [Order](docs/sdks/order/README.md)

* [readOrder](docs/sdks/order/README.md#readorder) - Read a order.
* [updateOrder](docs/sdks/order/README.md#updateorder) - Update an order.

### [Product](docs/sdks/product/README.md)

* [readProduct](docs/sdks/product/README.md#readproduct) - Read a product.
* [updateProduct](docs/sdks/product/README.md#updateproduct) - Update a product.
<!-- End Available Resources and Operations [operations] -->



<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://updater.com/api` | None |




### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
