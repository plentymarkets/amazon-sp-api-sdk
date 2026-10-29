<?php

declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Exception;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

final class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var null|\stdClass|string
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var null|string[]
     */
    protected /** [COMPAT] ?array */ $responseHeaders;

    /**
     * The deserialized response object.
     *
     * @var null|\stdClass|string
     */
    protected $responseObject;

    /**
     * Constructor.
     *
     * @param string $message Error message
     * @param int $code HTTP status code
     * @param null|string[][] $responseHeaders HTTP response header
     * @param null|\stdClass|string $responseBody HTTP decoded body of the server response either as \stdClass or string
     * @param null|\Throwable $previousException
     */
    public function __construct(string $message = '', int $code = 0, ?array $responseHeaders = null, $responseBody = null, ?\Throwable $previousException = null)
    {
        parent::__construct($message, $code, $previousException);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Builds the exception for a failed HTTP call, keeping status, headers and body of Amazon's response.
     *
     * Only some PSR-18 exceptions carry the response (e.g. Guzzle's RequestException for 4xx/5xx);
     * network errors (timeout, connection refused) have none, so headers and body stay null.
     */
    public static function fromClientException(ClientExceptionInterface $exception): self
    {
        $response = \method_exists($exception, 'getResponse') ? $exception->getResponse() : null;

        if (!$response instanceof ResponseInterface) {
            return new self("[{$exception->getCode()}] {$exception->getMessage()}", (int) $exception->getCode(), null, null, $exception);
        }

        $body = (string) $response->getBody();

        return new self("[{$exception->getCode()}] {$body}", (int) $exception->getCode(), $response->getHeaders(), $body, $exception);
    }

    /**
     * Amazon's request ID (x-amzn-RequestId response header), which Amazon support asks for.
     */
    public function getAmazonRequestId(): ?string
    {
        foreach ($this->responseHeaders ?? [] as $name => $values) {
            if (\strtolower((string) $name) === 'x-amzn-requestid') {
                $value = \is_array($values) ? \reset($values) : $values;

                return $value === false || $value === null ? null : (string) $value;
            }
        }

        return null;
    }

    /**
     * Gets the HTTP response header.
     *
     * @return null|string[] HTTP response header
     */
    public function getResponseHeaders(): ?array
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string.
     *
     * @return null|\stdClass|string HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization).
     *
     * @param mixed $obj Deserialized response object
     */
    public function setResponseObject($obj): void
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization).
     *
     * @return null|\stdClass|string the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
