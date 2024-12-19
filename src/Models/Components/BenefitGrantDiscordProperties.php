<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitGrantDiscordProperties
{
    /**
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     *
     * @var ?string $guildId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('guild_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $guildId = null;

    /**
     *
     * @var ?string $roleId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $roleId = null;

    /**
     * @param  ?string  $accountId
     * @param  ?string  $guildId
     * @param  ?string  $roleId
     */
    public function __construct(?string $accountId = null, ?string $guildId = null, ?string $roleId = null)
    {
        $this->accountId = $accountId;
        $this->guildId = $guildId;
        $this->roleId = $roleId;
    }
}