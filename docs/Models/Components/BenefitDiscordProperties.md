# BenefitDiscordProperties

Properties for a benefit of type `discord`.


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `guildId`                                                         | *string*                                                          | :heavy_check_mark:                                                | The ID of the Discord server.                                     |
| `roleId`                                                          | *string*                                                          | :heavy_check_mark:                                                | The ID of the Discord role to grant.                              |
| `kickMember`                                                      | *bool*                                                            | :heavy_check_mark:                                                | Whether to kick the member from the Discord server on revocation. |
| `guildToken`                                                      | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |