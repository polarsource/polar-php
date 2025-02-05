<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitDownloadablesSubscriberProperties
{
    /**
     * $activeFiles
     *
     * @var array<string> $activeFiles
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active_files')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $activeFiles;

    /**
     * @param  array<string>  $activeFiles
     * @phpstan-pure
     */
    public function __construct(array $activeFiles)
    {
        $this->activeFiles = $activeFiles;
    }
}