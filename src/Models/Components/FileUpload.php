<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class FileUpload
{
    /**
     * The ID of the object.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    public string $path;

    /**
     *
     * @var string $mimeType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mime_type')]
    public string $mimeType;

    /**
     *
     * @var int $size
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size')]
    public int $size;

    /**
     *
     * @var S3FileUploadMultipart $upload
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('upload')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\S3FileUploadMultipart')]
    public S3FileUploadMultipart $upload;

    /**
     *
     * @var FileServiceTypes $service
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('service')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\FileServiceTypes')]
    public FileServiceTypes $service;

    /**
     *
     * @var string $sizeReadable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('size_readable')]
    public string $sizeReadable;

    /**
     *
     * @var ?string $storageVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('storage_version')]
    public ?string $storageVersion;

    /**
     *
     * @var ?string $checksumEtag
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checksum_etag')]
    public ?string $checksumEtag;

    /**
     *
     * @var ?string $checksumSha256Base64
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checksum_sha256_base64')]
    public ?string $checksumSha256Base64;

    /**
     *
     * @var ?string $checksumSha256Hex
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('checksum_sha256_hex')]
    public ?string $checksumSha256Hex;

    /**
     *
     * @var ?\DateTime $lastModifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_modified_at')]
    public ?\DateTime $lastModifiedAt;

    /**
     *
     * @var ?string $version
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('version')]
    public ?string $version;

    /**
     *
     * @var ?bool $isUploaded
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_uploaded')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isUploaded = null;

    /**
     * @param  string  $id
     * @param  string  $organizationId
     * @param  string  $name
     * @param  string  $path
     * @param  string  $mimeType
     * @param  int  $size
     * @param  S3FileUploadMultipart  $upload
     * @param  FileServiceTypes  $service
     * @param  string  $sizeReadable
     * @param  ?string  $storageVersion
     * @param  ?string  $checksumEtag
     * @param  ?string  $checksumSha256Base64
     * @param  ?string  $checksumSha256Hex
     * @param  ?\DateTime  $lastModifiedAt
     * @param  ?string  $version
     * @param  ?bool  $isUploaded
     * @phpstan-pure
     */
    public function __construct(string $id, string $organizationId, string $name, string $path, string $mimeType, int $size, S3FileUploadMultipart $upload, FileServiceTypes $service, string $sizeReadable, ?string $storageVersion = null, ?string $checksumEtag = null, ?string $checksumSha256Base64 = null, ?string $checksumSha256Hex = null, ?\DateTime $lastModifiedAt = null, ?string $version = null, ?bool $isUploaded = false)
    {
        $this->id = $id;
        $this->organizationId = $organizationId;
        $this->name = $name;
        $this->path = $path;
        $this->mimeType = $mimeType;
        $this->size = $size;
        $this->upload = $upload;
        $this->service = $service;
        $this->sizeReadable = $sizeReadable;
        $this->storageVersion = $storageVersion;
        $this->checksumEtag = $checksumEtag;
        $this->checksumSha256Base64 = $checksumSha256Base64;
        $this->checksumSha256Hex = $checksumSha256Hex;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->version = $version;
        $this->isUploaded = $isUploaded;
    }
}