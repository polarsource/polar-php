# BenefitGitHubRepositorySubscriber


## Fields

| Field                                                                                                                            | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `createdAt`                                                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                    | :heavy_check_mark:                                                                                                               | Creation timestamp of the object.                                                                                                |
| `id`                                                                                                                             | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | The ID of the benefit.                                                                                                           |
| `type`                                                                                                                           | [Components\BenefitGitHubRepositorySubscriberType](../../Models/Components/BenefitGitHubRepositorySubscriberType.md)             | :heavy_check_mark:                                                                                                               | N/A                                                                                                                              |
| `description`                                                                                                                    | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | The description of the benefit.                                                                                                  |
| `selectable`                                                                                                                     | *bool*                                                                                                                           | :heavy_check_mark:                                                                                                               | Whether the benefit is selectable when creating a product.                                                                       |
| `deletable`                                                                                                                      | *bool*                                                                                                                           | :heavy_check_mark:                                                                                                               | Whether the benefit is deletable.                                                                                                |
| `organizationId`                                                                                                                 | *string*                                                                                                                         | :heavy_check_mark:                                                                                                               | The ID of the organization owning the benefit.                                                                                   |
| `organization`                                                                                                                   | [Components\Organization](../../Models/Components/Organization.md)                                                               | :heavy_check_mark:                                                                                                               | N/A                                                                                                                              |
| `properties`                                                                                                                     | [Components\BenefitGitHubRepositorySubscriberProperties](../../Models/Components/BenefitGitHubRepositorySubscriberProperties.md) | :heavy_check_mark:                                                                                                               | Properties available to subscribers for a benefit of type `github_repository`.                                                   |
| `modifiedAt`                                                                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                    | :heavy_check_mark:                                                                                                               | Last modification timestamp of the object.                                                                                       |