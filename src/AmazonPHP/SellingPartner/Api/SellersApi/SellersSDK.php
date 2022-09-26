<?php declare(strict_types=1);

namespace Plenty\AmazonPHP\SellingPartner\Api\SellersApi;

use Plenty\AmazonPHP\SellingPartner\AccessToken;
use Plenty\AmazonPHP\SellingPartner\Configuration;
use Plenty\AmazonPHP\SellingPartner\Exception\ApiException;
use Plenty\AmazonPHP\SellingPartner\HttpFactory;
use Plenty\AmazonPHP\SellingPartner\HttpSignatureHeaders;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class SellersSDK
{
    public const API_NAME = 'Sellers';

    public const OPERATION_GETMARKETPLACEPARTICIPATIONS = 'getMarketplaceParticipations';

    public const OPERATION_GETMARKETPLACEPARTICIPATIONS_PATH = '/sellers/v1/marketplaceParticipations';

    private /** [COMPAT] ClientInterface */ $client;

    private /** [COMPAT] HttpFactory */ $httpFactory;

    private /** [COMPAT] Configuration */ $configuration;

    private /** [COMPAT] LoggerInterface */ $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getMarketplaceParticipations.
     *
     * @param AccessToken $accessToken
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getMarketplaceParticipations(AccessToken $accessToken, string $region) : \Plenty\AmazonPHP\SellingPartner\Model\Sellers\GetMarketplaceParticipationsResponse
    {
        $request = $this->getMarketplaceParticipationsRequest($accessToken, $region);

        $this->configuration->extensions()->preRequest('Sellers', 'getMarketplaceParticipations', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Sellers', 'getMarketplaceParticipations')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Sellers', 'getMarketplaceParticipations'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Sellers',
                        'operation' => 'getMarketplaceParticipations',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Sellers', 'getMarketplaceParticipations', $request, $response);

            if ($this->configuration->loggingEnabled('Sellers', 'getMarketplaceParticipations')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Sellers', 'getMarketplaceParticipations'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Sellers',
                        'operation' => 'getMarketplaceParticipations',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
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

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\Plenty\AmazonPHP\SellingPartner\Model\Sellers\GetMarketplaceParticipationsResponse',
            []
        );
    }

    /**
     * Create request for operation 'getMarketplaceParticipations'.
     *
     * @param AccessToken $accessToken
     *
     * @throws \Plenty\AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getMarketplaceParticipationsRequest(AccessToken $accessToken, string $region) : RequestInterface
    {
        $resourcePath = '/sellers/v1/marketplaceParticipations';
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
        if (\count($formParams) > 0) {
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
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
