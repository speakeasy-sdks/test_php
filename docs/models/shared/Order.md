# Order


## Fields

| Field                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                        | Example                                                                                                                                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `amount`                                                                                                                                                                                                                           | *int*                                                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                 | Total amount the buyer must pay or already paid for the this order.                                                                                                                                                                | 5000                                                                                                                                                                                                                               |
| `billingAddress`                                                                                                                                                                                                                   | [?Address](../../models/shared/Address.md)                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `cart`                                                                                                                                                                                                                             | array<[OrderCart](../../models/shared/OrderCart.md)>                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `moreInfo`                                                                                                                                                                                                                         | [?OrderMoreInfo](../../models/shared/OrderMoreInfo.md)                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `orderId`                                                                                                                                                                                                                          | *string*                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                | e8712454-747c-4305-8c74-76cc3acd452a                                                                                                                                                                                               |
| `originState`                                                                                                                                                                                                                      | *string*                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                 | Local state obtained from the origin.                                                                                                                                                                                              | processing                                                                                                                                                                                                                         |
| `shippingAddress`                                                                                                                                                                                                                  | [?Address](../../models/shared/Address.md)                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                |                                                                                                                                                                                                                                    |
| `state`                                                                                                                                                                                                                            | [OrderState](../../models/shared/OrderState.md)                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                 | Represent the current state of the cart. Local cart states must be translated to these generic states in order to all e-commerces and management software and other kinds of software to understand the current state of the cart. |                                                                                                                                                                                                                                    |