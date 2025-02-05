<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Utils\Retry;

use Brick\DateTime\DateTimeException;
use Brick\DateTime\LocalDateTime;
use Brick\DateTime\Parser\DateTimeParseException;
use Brick\DateTime\TimeZone;
use Psr\Http\Message\ResponseInterface;

class RetryUtils
{

    /**
     * A wrapper for http send function to handle retries if necessary.
     * 
     * @param  callable  $fn
     * @param  RetryConfig  $config
     * @param  array<string>  $statusCodesToRetry
     * @return ResponseInterface
     */
    public static function retryWrapper(callable $fn, RetryConfig $config, array $statusCodesToRetry): ResponseInterface
    {
        $retryCount = 0;
        $start = LocalDateTime::now(TimeZone::utc());
        while (true) {
            try {
                $httpResponse = $fn();
                if ($config->strategy !== RetryStrategy::NONE && RetryUtils::isRetryableResponse($httpResponse, $statusCodesToRetry)) {
                    throw new TemporaryError('Response failed with retryable status code', response: $httpResponse);
                }

                return $httpResponse;
            } catch (\Exception $e) {
                if ($e instanceof PermanentError) {
                    throw $e->getPrevious();
                }
                if ($config instanceof RetryConfigNone) {
                    throw $e->getPrevious();
                } elseif ($config instanceof RetryConfigBackoff) {
                    $elapsed = 1000 * (LocalDateTime::now(TimeZone::utc())->getTime()->toSecondOfDay() - $start->getTime()->toSecondOfDay());
                    if ($elapsed > $config->maxElapsedTime) {
                        if ($e instanceof TemporaryError) {
                            return $e->response;
                        }
                        throw $e;
                    }
                    $retryInterval = 0;
                    if ($e instanceof TemporaryError) {
                        $retryInterval = RetryUtils::retryInterval($e->response);
                    }
                    if ($retryInterval <= 0) {
                        $retryInterval = $config->initialInterval * pow($retryCount, $config->exponent) + (rand(0, 1) * 1000);
                    }

                    $d = min($retryInterval, $config->maxInterval);

                    usleep((int) $d * 1000);

                    $retryCount++;
                }
            }
        }
    }

    public static function retryInterval(?ResponseInterface $response): int
    {
        if ($response == null) {
            return 0;
        }
        $retryAfter = $response->getHeader('Retry-After');
        if (count($retryAfter) == 0) {
            return 0;
        }
        $retryAfter = $retryAfter[0];
        if ((string) (int) $retryAfter == $retryAfter) {
            return (int) $retryAfter * 1000;
        }

        try {
            $parsedDate = LocalDateTime::parse($retryAfter);
            $deltaMS = ($parsedDate->getNano() * 1000) - (LocalDateTime::now(TimeZone::utc())->getNano() * 1000);

            return $deltaMS > 0 ? (int) ceil($deltaMS) : 0;
        } catch (DateTimeParseException|DateTimeException $e) {
            return 0;
        }
    }

    /**
     * @param  ResponseInterface  $response
     * @param  array<string>  $statusCodes
     * @return bool
     */
    public static function isRetryableResponse(ResponseInterface $response, array $statusCodes): bool
    {
        $actual = (string) $response->getStatusCode();

        $final = false;
        foreach ($statusCodes as $code) {
            $matches = [];
            if (! preg_match('/^[0-9]xx$/', $code, $matches)) {
                return $code === $actual;
            }

            $expectFamily = mb_substr($code, 0, 1);
            if (! $expectFamily) {
                throw new \Exception('Invalid status code range');
            }

            $actualFamily = mb_substr($actual, 0, 1);
            if (! $actualFamily) {
                throw new \Exception('Invalid response status code: {$actual}');
            }

            if ($actualFamily === $expectFamily) {
                $final = true;
            }
        }

        return $final;
    }
}
