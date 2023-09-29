# Order
(*order*)

### Available Operations

* [readOrder](#readorder) - Read a order.
* [updateOrder](#updateorder) - Update an order.

## readOrder

Get the current state of a specific order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \my_workspace\Updater\Updater;
use \my_workspace\Updater\Models\Shared\Security;
use \my_workspace\Updater\Models\Operations\ReadOrderRequest;

$sdk = Updater::builder()
    ->build();

try {
    $request = new ReadOrderRequest();
    $request->orderId = 816257;

    $response = $sdk->order->readOrder($request);

    if ($response->readOrder200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\my_workspace\Updater\Models\Operations\ReadOrderRequest](../../models/operations/ReadOrderRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\my_workspace\Updater\Models\Operations\ReadOrderResponse](../../models/operations/ReadOrderResponse.md)**


## updateOrder

Update the system with the current state of a specific order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \my_workspace\Updater\Updater;
use \my_workspace\Updater\Models\Shared\Security;
use \my_workspace\Updater\Models\Operations\UpdateOrderRequestBody;
use \my_workspace\Updater\Models\Shared\Order;
use \my_workspace\Updater\Models\Shared\Address;
use \my_workspace\Updater\Models\Shared\OrderCart;
use \my_workspace\Updater\Models\Shared\OrderMoreInfo;
use \my_workspace\Updater\Models\Shared\OrderState;

$sdk = Updater::builder()
    ->build();

try {
    $request = new UpdateOrderRequestBody();
    $request->order = new Order();
    $request->order->amount = 5000;
    $request->order->billingAddress = new Address();
    $request->order->billingAddress->city = 'Viseu';
    $request->order->billingAddress->country = 'Portugal';
    $request->order->billingAddress->postCode = '3510-740';
    $request->order->billingAddress->street = 'Rua Nova, nº5, Galega';
    $request->order->cart = [
        new OrderCart(),
    ];
    $request->order->moreInfo = new OrderMoreInfo();
    $request->order->orderId = 'e8712454-747c-4305-8c74-76cc3acd452a';
    $request->order->originState = 'processing';
    $request->order->shippingAddress = new Address();
    $request->order->shippingAddress->city = 'Viseu';
    $request->order->shippingAddress->country = 'Portugal';
    $request->order->shippingAddress->postCode = '3510-740';
    $request->order->shippingAddress->street = 'Rua Nova, nº5, Galega';
    $request->order->state = OrderState::Refunded;
    $request->origin = 'Magento';

    $response = $sdk->order->updateOrder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\my_workspace\Updater\Models\Operations\UpdateOrderRequestBody](../../models/operations/UpdateOrderRequestBody.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\my_workspace\Updater\Models\Operations\UpdateOrderResponse](../../models/operations/UpdateOrderResponse.md)**

