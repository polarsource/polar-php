# CustomerCreate


## Fields

| Field                                                                                              | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `email`                                                                                            | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `name`                                                                                             | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `billingAddress`                                                                                   | [?Components\Address](../../Models/Components/Address.md)                                          | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `taxId`                                                                                            | array<[string\|Components\TaxIDFormat](../../Models/Components/CustomerCreateTaxId.md)>            | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `organizationId`                                                                                   | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | The ID of the organization owning the customer. **Required unless you use an organization token.** |