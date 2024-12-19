# CheckoutPriceCreate

Create a new checkout session from a product price.

Metadata set on the checkout will be copied
to the resulting order and/or subscription.


## Fields

| Field                                                                                                                                                                                                                                                                                                                                  | Type                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `paymentProcessor`                                                                                                                                                                                                                                                                                                                     | [Components\CheckoutPriceCreatePaymentProcessor](../../Models/Components/CheckoutPriceCreatePaymentProcessor.md)                                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                     | Payment processor to use. Currently only Stripe is supported.                                                                                                                                                                                                                                                                          |
| `productPriceId`                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                     | ID of the product price to checkout.                                                                                                                                                                                                                                                                                                   |
| `metadata`                                                                                                                                                                                                                                                                                                                             | array<string, [string\|int\|bool](../../Models/Components/CheckoutPriceCreateMetadata.md)>                                                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | Key-value object allowing you to store additional information.<br/><br/>The key must be a string with a maximum length of **40 characters**.<br/>The value must be either:<br/><br/>* A string with a maximum length of **500 characters**<br/>* An integer<br/>* A boolean<br/><br/>You can store up to **50 key-value pairs**.       |
| `customFieldData`                                                                                                                                                                                                                                                                                                                      | [?Components\CheckoutPriceCreateCustomFieldData](../../Models/Components/CheckoutPriceCreateCustomFieldData.md)                                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | Key-value object storing custom field values.                                                                                                                                                                                                                                                                                          |
| `allowDiscountCodes`                                                                                                                                                                                                                                                                                                                   | *?bool*                                                                                                                                                                                                                                                                                                                                | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | Whether to allow the customer to apply discount codes. If you apply a discount through `discount_id`, it'll still be applied, but the customer won't be able to change it.                                                                                                                                                             |
| `customerMetadata`                                                                                                                                                                                                                                                                                                                     | array<string, [string\|int\|bool](../../Models/Components/CheckoutPriceCreateCustomerMetadata.md)>                                                                                                                                                                                                                                     | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | Key-value object allowing you to store additional information that'll be copied to the created customer.<br/><br/>The key must be a string with a maximum length of **40 characters**.<br/>The value must be either:<br/><br/>* A string with a maximum length of **500 characters**<br/>* An integer<br/>* A boolean<br/><br/>You can store up to **50 key-value pairs**. |
| `discountId`                                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | ID of the discount to apply to the checkout.                                                                                                                                                                                                                                                                                           |
| `amount`                                                                                                                                                                                                                                                                                                                               | *?int*                                                                                                                                                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                    |
| `customerId`                                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | ID of an existing customer in the organization. The customer data will be pre-filled in the checkout form. The resulting order will be linked to this customer.                                                                                                                                                                        |
| `customerName`                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                    |
| `customerEmail`                                                                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                    |
| `customerIpAddress`                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                    |
| `customerBillingAddress`                                                                                                                                                                                                                                                                                                               | [?Components\Address](../../Models/Components/Address.md)                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                    |
| `customerTaxId`                                                                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                    |
| `subscriptionId`                                                                                                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | ID of a subscription to upgrade. It must be on a free pricing. If checkout is successful, metadata set on this checkout will be copied to the subscription, and existing keys will be overwritten.                                                                                                                                     |
| `successUrl`                                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | URL where the customer will be redirected after a successful payment.You can add the `checkout_id={CHECKOUT_ID}` query parameter to retrieve the checkout session id.                                                                                                                                                                  |
| `embedOrigin`                                                                                                                                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                     | If you plan to embed the checkout session, set this to the Origin of the embedding page. It'll allow the Polar iframe to communicate with the parent page.                                                                                                                                                                             |