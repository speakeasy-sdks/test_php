# Deal


## Overview

Obtain the last state of a deal (discount, promotion, etc) and perform new updates for a specific product.

### Available Operations

* [readDeal](#readdeal) - Read a deal.
* [updateDeal](#updatedeal) - Update a deal.

## readDeal

Get the current state of a specific deal.

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
        $request = new Operations\ReadDealRequest();
    $request->dealId = 259512;;

    $response = $sdk->deal->readDeal($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\my_workspace\Updater\Models\Operations\ReadDealRequest](../../Models/Operations/ReadDealRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\my_workspace\Updater\Models\Operations\ReadDealResponse](../../Models/Operations/ReadDealResponse.md)**


## updateDeal

Update the system with the current state of a specific deal.

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
        $request = new Operations\UpdateDealRequestBody();
    $request->deal = new Shared\Deal();
    $request->deal->dealId = '796945a0-b95a-4755-834e-59aa8946a2f5';
    $request->deal->maximumAmount = 10000;
    $request->deal->maximumUnits = 10;
    $request->deal->minimumAmount = 1000;
    $request->deal->minimumUnits = 1;
    $request->deal->moreInfo = new Shared\MoreInfo();
    $request->deal->name = '20% discount on bicycles';
    $request->deal->productId = 'c5dec4fe-4192-4d38-a5bd-aa7bd6b86499';
    $request->deal->type = Shared\Type::Percentage;
    $request->deal->value = 2005;
    $request->origin = 'Magento';;

    $response = $sdk->deal->updateDeal($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\my_workspace\Updater\Models\Operations\UpdateDealRequestBody](../../Models/Operations/UpdateDealRequestBody.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\my_workspace\Updater\Models\Operations\UpdateDealResponse](../../Models/Operations/UpdateDealResponse.md)**

