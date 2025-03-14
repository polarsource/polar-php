<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class OrganizationCreate
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     *
     * @var ?string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatarUrl = null;

    /**
     * Public support email.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * Official website of the organization.
     *
     * @var ?string $website
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('website')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     * Link to social profiles.
     *
     * @var ?array<OrganizationSocialLink> $socials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('socials')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Polar\Models\Components\OrganizationSocialLink>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $socials = null;

    /**
     * Additional, private, business details Polar needs about active organizations for compliance (KYC).
     *
     * @var ?OrganizationDetails $details
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('details')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OrganizationDetails|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationDetails $details = null;

    /**
     *
     * @var ?OrganizationFeatureSettings $featureSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feature_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OrganizationFeatureSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationFeatureSettings $featureSettings = null;

    /**
     *
     * @var ?OrganizationSubscriptionSettings $subscriptionSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_settings')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\OrganizationSubscriptionSettings|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OrganizationSubscriptionSettings $subscriptionSettings = null;

    /**
     * @param  string  $name
     * @param  string  $slug
     * @param  ?string  $avatarUrl
     * @param  ?string  $email
     * @param  ?string  $website
     * @param  ?array<OrganizationSocialLink>  $socials
     * @param  ?OrganizationDetails  $details
     * @param  ?OrganizationFeatureSettings  $featureSettings
     * @param  ?OrganizationSubscriptionSettings  $subscriptionSettings
     * @phpstan-pure
     */
    public function __construct(string $name, string $slug, ?string $avatarUrl = null, ?string $email = null, ?string $website = null, ?array $socials = null, ?OrganizationDetails $details = null, ?OrganizationFeatureSettings $featureSettings = null, ?OrganizationSubscriptionSettings $subscriptionSettings = null)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->avatarUrl = $avatarUrl;
        $this->email = $email;
        $this->website = $website;
        $this->socials = $socials;
        $this->details = $details;
        $this->featureSettings = $featureSettings;
        $this->subscriptionSettings = $subscriptionSettings;
    }
}