<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class TokensSDK
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
    }

    /**
     * Operation createRestrictedDataToken.
     *
     * @param \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createRestrictedDataToken(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest $body) : \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenResponse
    {
        [$response] = $this->createRestrictedDataTokenWithHttpInfo($accessToken, $region, $body);

        return $response;
    }

    /**
     * Create request for operation 'createRestrictedDataToken'.
     *
     * @param \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createRestrictedDataTokenRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest $body) : RequestInterface
    {
        // verify the required parameter 'body' is set
        if ($body === null || (\is_array($body) && \count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling createRestrictedDataToken'
            );
        }

        $resourcePath = '/tokens/2021-03-01/restrictedDataToken';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation createRestrictedDataTokenWithHttpInfo.
     *
     * @param \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest $body The restricted data token request details. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return array<array-key, \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenResponse>
     */
    private function createRestrictedDataTokenWithHttpInfo(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest $body) : array
    {
        $request = $this->createRestrictedDataTokenRequest($accessToken, $region, $body);

        try {
            try {
                $response = $this->client->sendRequest($request);
            } catch (ClientExceptionInterface $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    \sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    $content = (string) $response->getBody()->getContents();

                    return [
                        ObjectSerializer::deserialize(
                            $this->configuration,
                            $content,
                            \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenResponse::class,
                            []
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 400:
                case 401:
                case 403:
                case 404:
                case 415:
                case 429:
                case 500:
                case 503:
                    $content = (string) $response->getBody()->getContents();

                    return [
                        ObjectSerializer::deserialize(
                            $this->configuration,
                            $content,
                            \AmazonPHP\SellingPartner\Model\Tokens\ErrorList::class,
                            []
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenResponse::class;
            $content = (string) $response->getBody()->getContents();

            return [
                ObjectSerializer::deserialize(
                    $this->configuration,
                    $content,
                    $returnType,
                    []
                ),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $this->configuration,
                        $e->getResponseBody(),
                        \AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenResponse::class,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;
                case 400:
                case 401:
                case 403:
                case 404:
                case 415:
                case 429:
                case 500:
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $this->configuration,
                        $e->getResponseBody(),
                        \AmazonPHP\SellingPartner\Model\Tokens\ErrorList::class,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;
            }

            throw $e;
        }
    }
}