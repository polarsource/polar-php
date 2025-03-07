<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar;

use Polar\Hooks\HookContext;
use Polar\Models\Operations;
use Polar\Utils\Options;
use Speakeasy\Serializer\DeserializationContext;

class PolarOrders
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * Get Order
     *
     * Get an order by ID for the authenticated customer.
     *
     * **Scopes**: `customer_portal:read` `customer_portal:write`
     *
     * @param  Operations\CustomerPortalOrdersGetSecurity  $security
     * @param  string  $id
     * @return Operations\CustomerPortalOrdersGetResponse
     * @throws \Polar\Models\Errors\APIException
     */
    public function get(Operations\CustomerPortalOrdersGetSecurity $security, string $id, ?Options $options = null): Operations\CustomerPortalOrdersGetResponse
    {
        $request = new Operations\CustomerPortalOrdersGetRequest(
            id: $id,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/customer-portal/orders/{id}', Operations\CustomerPortalOrdersGetRequest::class, $request);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        if ($security != null) {
            $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->client, $security);
        } else {
            $client = $this->sdkConfiguration->client;
        }

        $hookContext = new HookContext('customer_portal:orders:get', null, fn () => $security);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['404', '422', '4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Components\CustomerOrder', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CustomerPortalOrdersGetResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    customerOrder: $obj);

                return $response;
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['404'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\ResourceNotFound', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\HTTPValidationError', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Polar\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Order Invoice
     *
     * Get an order's invoice data.
     *
     * **Scopes**: `customer_portal:read` `customer_portal:write`
     *
     * @param  Operations\CustomerPortalOrdersInvoiceSecurity  $security
     * @param  string  $id
     * @return Operations\CustomerPortalOrdersInvoiceResponse
     * @throws \Polar\Models\Errors\APIException
     */
    public function invoice(Operations\CustomerPortalOrdersInvoiceSecurity $security, string $id, ?Options $options = null): Operations\CustomerPortalOrdersInvoiceResponse
    {
        $request = new Operations\CustomerPortalOrdersInvoiceRequest(
            id: $id,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/customer-portal/orders/{id}/invoice', Operations\CustomerPortalOrdersInvoiceRequest::class, $request);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        if ($security != null) {
            $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->client, $security);
        } else {
            $client = $this->sdkConfiguration->client;
        }

        $hookContext = new HookContext('customer_portal:orders:invoice', null, fn () => $security);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['404', '422', '4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Components\CustomerOrderInvoice', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CustomerPortalOrdersInvoiceResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    customerOrderInvoice: $obj);

                return $response;
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['404'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\ResourceNotFound', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\HTTPValidationError', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Polar\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * List Orders
     *
     * List orders of the authenticated customer.
     *
     * **Scopes**: `customer_portal:read` `customer_portal:write`
     *
     * @param  Operations\CustomerPortalOrdersListSecurity  $security
     * @param  ?Operations\CustomerPortalOrdersListRequest  $request
     * @return Operations\CustomerPortalOrdersListResponse
     * @throws \Polar\Models\Errors\APIException
     */
    private function listIndividual(Operations\CustomerPortalOrdersListSecurity $security, ?Operations\CustomerPortalOrdersListRequest $request = null, ?Options $options = null): Operations\CustomerPortalOrdersListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/customer-portal/orders/');
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\CustomerPortalOrdersListRequest::class, $request, $urlOverride);
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        if ($security != null) {
            $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->client, $security);
        } else {
            $client = $this->sdkConfiguration->client;
        }

        $hookContext = new HookContext('customer_portal:orders:list', null, fn () => $security);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['422', '4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Components\ListResourceCustomerOrder', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CustomerPortalOrdersListResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    listResourceCustomerOrder: $obj);
                $sdk = $this;

                $response->next = function () use ($sdk, $request, $responseData, $security): ?Operations\CustomerPortalOrdersListResponse {
                    $page = $request != null ? $request->page : 0;
                    $nextPage = $page + 1;
                    $jsonObject = new \JsonPath\JsonObject($responseData);
                    $numPages = $jsonObject->get('$.pagination.max_page');
                    if ($numPages == null || $numPages[0] <= $page) {
                        return null;
                    }
                    if (! $responseData) {
                        return null;
                    }
                    $jsonObject = new \JsonPath\JsonObject($responseData);
                    $results = $jsonObject->get('$.items');

                    if (is_array($results)) {
                        $results = $results[0];
                    }
                    if (count($results) === 0) {
                        return null;
                    }
                    $limit = $request != null ? $request->limit : 0;
                    if (count($results) < $limit) {
                        return null;
                    }

                    return $sdk->listIndividual(
                        request: new Operations\CustomerPortalOrdersListRequest(
                            organizationId: $request != null ? $request->organizationId : null,
                            productId: $request != null ? $request->productId : null,
                            productBillingType: $request != null ? $request->productBillingType : null,
                            productPriceType: $request != null ? $request->productPriceType : null,
                            subscriptionId: $request != null ? $request->subscriptionId : null,
                            query: $request != null ? $request->query : null,
                            page: $nextPage,
                            limit: $request != null ? $request->limit : null,
                            sorting: $request != null ? $request->sorting : null,
                        ),
                        security: $security,
                    );
                };


                return $response;
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['422'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Polar\Models\Errors\HTTPValidationError', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Polar\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Polar\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Polar\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }
    /**
     * List Orders
     *
     * List orders of the authenticated customer.
     *
     * **Scopes**: `customer_portal:read` `customer_portal:write`
     *
     * @param  Operations\CustomerPortalOrdersListSecurity  $security
     * @param  ?Operations\CustomerPortalOrdersListRequest  $request
     * @return \Generator<Operations\CustomerPortalOrdersListResponse>
     * @throws \Polar\Models\Errors\APIException
     */
    public function list(Operations\CustomerPortalOrdersListSecurity $security, ?Operations\CustomerPortalOrdersListRequest $request = null, ?Options $options = null): \Generator
    {
        $res = $this->listIndividual($security, $request, $options);
        while ($res !== null) {
            yield $res;
            $res = $res->next($res);
        }
    }

}