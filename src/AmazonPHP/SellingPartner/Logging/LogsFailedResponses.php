<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Logging;

use Plenty\AmazonPHP\SellingPartner\Exception\ApiException;
use Plenty\Log\Traits\Loggable;
use Psr\Http\Message\RequestInterface;

/**
 * Debug log for calls that failed with an exception instead of returning a response.
 *
 * Guzzle throws for every non-2xx response, so these never reach the response log of the API classes. Network errors
 * have no response at all: headers, body and Amazon's request id are then null.
 *
 * Expects the using class to provide $configuration and the constants API_NAME and LOG_IDENTIFIER. The using class
 * must also `use Loggable` itself: the log settings collect integration keys from the traits a class uses directly,
 * so a class that only gets Loggable through this trait could not be enabled there.
 */
trait LogsFailedResponses
{
    use Loggable;

    /**
     * Logs the failed response of a call, paired with its request row by the correlation id.
     */
    private function logFailedResponse(string $operation, string $correlationId, RequestInterface $request, ApiException $exception): void
    {
        $skippedHeaders = $this->configuration->loggingSkipHeaders();
        $responseHeaders = $exception->getResponseHeaders();

        if ($responseHeaders !== null) {
            $responseHeaders = \array_filter(
                $responseHeaders,
                static fn ($name): bool => !\in_array(\strtolower((string) $name), $skippedHeaders, true),
                ARRAY_FILTER_USE_KEY
            );
        }

        $this->getLogger(self::LOG_IDENTIFIER)
            ->addReference('action', $operation)
            ->report(
                'module_amazon::log/fbaInbound/debug.requestPayload',
                [
                    'api' => self::API_NAME,
                    'operation' => $operation,
                    'response_correlation_id' => $correlationId,
                    'response_body' => (string) $exception->getResponseBody(),
                    'response_headers' => $responseHeaders,
                    'response_status_code' => $exception->getCode(),
                    'amazon_request_id' => $exception->getAmazonRequestId(),
                    'error_message' => $exception->getMessage(),
                    'request_uri' => (string) $request->getUri(),
                    'request_body' => (string) $request->getBody(),
                ]
            );
    }
}
