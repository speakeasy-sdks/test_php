# Order


### Available Operations

* [readOrder](#readorder) - Read a order.
* [updateOrder](#updateorder) - Update an order.

## readOrder

Get the current state of a specific order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \my_workspace\Updater;
use \my_workspace\Updater\Models\Shared;
use \my_workspace\Updater\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Updater\Updater::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ReadOrderRequest();
    $request->orderId = 816257;;

    $response = $sdk->order->readOrder($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\my_workspace\Updater\Models\Operations\ReadOrderRequest](../../Models/Operations/ReadOrderRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\my_workspace\Updater\Models\Operations\ReadOrderResponse](../../Models/Operations/ReadOrderResponse.md)**


## updateOrder

Update the system with the current state of a specific order.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \my_workspace\Updater;
use \my_workspace\Updater\Models\Shared;
use \my_workspace\Updater\Models\Operations;

$security = new Shared\Security();
$security->bearerAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = Updater\Updater::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateOrderRequestBody();
    $request->order = new Shared\Order();
    $request->order->amount = 5000;
    $request->order->billingAddress = new Shared\Address();
    $request->order->billingAddress->city = 'Viseu';
    $request->order->billingAddress->country = 'Portugal';
    $request->order->billingAddress->postCode = '3510-740';
    $request->order->billingAddress->street = 'Rua Nova, nº5, Galega';
    $request->order->cart = [
        new Shared\Cart(),
    ];
    $request->order->moreInfo = new Shared\OrderMoreInfo();
    $request->order->orderId = 'e8712454-747c-4305-8c74-76cc3acd452a';
    $request->order->originState = 'processing';
    $request->order->shippingAddress = new Shared\Address();
    $request->order->shippingAddress->city = 'Viseu';
    $request->order->shippingAddress->country = 'Portugal';
    $request->order->shippingAddress->postCode = '3510-740';
    $request->order->shippingAddress->street = 'Rua Nova, nº5, Galega';
    $request->order->state = Shared\State::Refunded;
    $request->origin = 'Magento';;

    $response = $sdk->order->updateOrder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\my_workspace\Updater\Models\Operations\UpdateOrderRequestBody](../../Models/Operations/UpdateOrderRequestBody.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\my_workspace\Updater\Models\Operations\UpdateOrderResponse](../../Models/Operations/UpdateOrderResponse.md)**

