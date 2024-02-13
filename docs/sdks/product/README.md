# Product


## Overview

Obtain the last state of a product and perform new updates for a specific product.

### Available Operations

* [readProduct](#readproduct) - Read a product.
* [updateProduct](#updateproduct) - Update a product.

## readProduct

Get the current state of a specific product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \my_workspace\Updater;
use \my_workspace\Updater\Models\Shared;
use \my_workspace\Updater\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Updater\Updater::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadProductRequest();
    $request->productId = 217234;;

    $response = $sdk->product->readProduct($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\my_workspace\Updater\Models\Operations\ReadProductRequest](../../Models/Operations/ReadProductRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\my_workspace\Updater\Models\Operations\ReadProductResponse](../../Models/Operations/ReadProductResponse.md)**


## updateProduct

Update the system with the current state of a specific product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \my_workspace\Updater;
use \my_workspace\Updater\Models\Shared;
use \my_workspace\Updater\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Updater\Updater::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateProductRequestBody();
    $request->origin = 'Magento';
    $request->product = new Shared\Product();
    $request->product->amount = 10000;
    $request->product->moreInfo = new Shared\ProductMoreInfo();
    $request->product->name = 'Bicycle';
    $request->product->productId = 'c5dec4fe-4192-4d38-a5bd-aa7bd6b86499';
    $request->product->stock = 1000;;

    $response = $sdk->product->updateProduct($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\my_workspace\Updater\Models\Operations\UpdateProductRequestBody](../../Models/Operations/UpdateProductRequestBody.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\my_workspace\Updater\Models\Operations\UpdateProductResponse](../../Models/Operations/UpdateProductResponse.md)**

