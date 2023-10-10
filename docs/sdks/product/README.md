# Product
(*product*)

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

use \my_workspace\Updater\Updater;
use \my_workspace\Updater\Models\Shared\Security;
use \my_workspace\Updater\Models\Operations\ReadProductRequest;

$security = new Security();
$security->bearerAuth = '';

$sdk = Updater::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ReadProductRequest();
    $request->productId = 217234;

    $response = $sdk->product->readProduct($request);

    if ($response->readProduct200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\my_workspace\Updater\Models\Operations\ReadProductRequest](../../models/operations/ReadProductRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\my_workspace\Updater\Models\Operations\ReadProductResponse](../../models/operations/ReadProductResponse.md)**


## updateProduct

Update the system with the current state of a specific product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \my_workspace\Updater\Updater;
use \my_workspace\Updater\Models\Shared\Security;
use \my_workspace\Updater\Models\Operations\UpdateProductRequestBody;
use \my_workspace\Updater\Models\Shared\Product;
use \my_workspace\Updater\Models\Shared\ProductMoreInfo;

$security = new Security();
$security->bearerAuth = '';

$sdk = Updater::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateProductRequestBody();
    $request->origin = 'Magento';
    $request->product = new Product();
    $request->product->amount = 10000;
    $request->product->moreInfo = new ProductMoreInfo();
    $request->product->name = 'Bicycle';
    $request->product->productId = 'c5dec4fe-4192-4d38-a5bd-aa7bd6b86499';
    $request->product->stock = 1000;

    $response = $sdk->product->updateProduct($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\my_workspace\Updater\Models\Operations\UpdateProductRequestBody](../../models/operations/UpdateProductRequestBody.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\my_workspace\Updater\Models\Operations\UpdateProductResponse](../../models/operations/UpdateProductResponse.md)**

