<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar;
use Polar\Utils\Retry\RetryConfig;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $client = null;

    public Hooks\SDKHooks $hooks;
    /** @var ?pure-Closure(): Models\Components\Security */
    public ?\Closure $securitySource = null;
    public string $serverUrl = '';

    public string $server = '';

    public string $language = 'php';

    public string $openapiDocVersion = '0.1.0';

    public string $sdkVersion = '0.2.5';

    public string $genVersion = '2.570.3';

    public string $userAgent = 'speakeasy-sdk/php 0.2.5 2.570.3 0.1.0 polar-sh/sdk';

    public ?RetryConfig $retryConfig = null;

    public function __construct()
    {
        $this->hooks = new Hooks\SDKHooks();
    }

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        if ($this->server === '') {
            $this->server = Polar::SERVER_PRODUCTION;
        }

        return Polar::SERVERS[$this->server];
    }
    public function hasSecurity(): bool
    {
        return $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Components\Security
    {
        return $this->securitySource->call($this);
    }

    /**
     * @return Utils\ServerDetails
     */
    public function getServerDetails(): Utils\ServerDetails
    {
        if ($this->serverUrl !== '') {
            return new Utils\ServerDetails(rtrim($this->serverUrl, '/'), []);
        }

        return new Utils\ServerDetails(Polar::SERVERS[$this->server], []);

    }

    public function getTemplatedServerUrl(): string
    {
        if ($this->serverUrl) {
            return Utils\Utils::templateUrl($this->serverUrl.trim('/'), []);
        }

        return Utils\Utils::templateUrl($this->getServerUrl(), []);
    }

    public function initHooks(\GuzzleHttp\ClientInterface $client): \GuzzleHttp\ClientInterface
    {
        $preHooksUrl = $this->getTemplatedServerUrl();
        $ret = $this->hooks->sdkInit($preHooksUrl, $client);
        if ($preHooksUrl != $ret->url) {
            $this->serverUrl = $ret->url;
        }

        return $ret->client;
    }
}
