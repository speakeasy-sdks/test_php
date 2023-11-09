# State

Represent the current state of the cart. Local cart states must be translated to these generic states in order to all e-commerces and management software and other kinds of software to understand the current state of the cart.


## Values

| Name              | Value             |
| ----------------- | ----------------- |
| `PendingPayment`  | pending_payment   |
| `PaymentReceived` | payment_received  |
| `OrderInvoice`    | order_invoice     |
| `OrderShipped`    | order_shipped     |
| `Complete`        | complete          |
| `Canceled`        | canceled          |
| `Refunded`        | refunded          |