<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** OrganizationAvatarFileCreate - Schema to create a file to be used as an organization avatar. */
class OrganizationAvatarFileCreate
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * MIME type of the file. Only images are supported for this type of file.
     *
     * @var string $mimeType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mime_type')]
    public string $mimeType;

    /**
     * Size of the file. A maximum of 1 MB is allowed for this type of file.
     *
     * @var int $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    public int $size;

    /**
     *
     * @var S3FileCreateMultipart $upload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('upload')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\S3FileCreateMultipart')]
    public S3FileCreateMultipart $upload;

    /**
     *
     * @var ?string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationId = null;

    /**
     *
     * @var ?string $checksumSha256Base64
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checksum_sha256_base64')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $checksumSha256Base64 = null;

    /**
     *
     * @var ?string $version
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('version')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $version = null;

    /**
     *
     * @var string $service
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service')]
    public string $service;

    /**
     * @param  string  $name
     * @param  string  $mimeType
     * @param  int  $size
     * @param  S3FileCreateMultipart  $upload
     * @param  string  $service
     * @param  ?string  $organizationId
     * @param  ?string  $checksumSha256Base64
     * @param  ?string  $version
     * @phpstan-pure
     */
    public function __construct(string $name, string $mimeType, int $size, S3FileCreateMultipart $upload, ?string $organizationId = null, ?string $checksumSha256Base64 = null, ?string $version = null, string $service = 'organization_avatar')
    {
        $this->name = $name;
        $this->mimeType = $mimeType;
        $this->size = $size;
        $this->upload = $upload;
        $this->organizationId = $organizationId;
        $this->checksumSha256Base64 = $checksumSha256Base64;
        $this->version = $version;
        $this->service = $service;
    }
}