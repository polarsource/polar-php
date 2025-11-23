# CustomersUpdateRequest


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `id`                                                                   | *string*                                                               | :heavy_check_mark:                                                     | The customer ID.                                                       |
| `includeMembers`                                                       | *?bool*                                                                | :heavy_minus_sign:                                                     | Include members in the response. Only populated when set to true.      |
| `customerUpdate`                                                       | [Components\CustomerUpdate](../../Models/Components/CustomerUpdate.md) | :heavy_check_mark:                                                     | N/A                                                                    |