<?php
namespace AlbanyDesigns\NPPESApi;

use AlbanyDesigns\NPPESApi\Entity\ApiResponse;
use JsonMapper;
use RestClient;

class NPPESApi implements NPPESApiInterface
{
    const BASE_URL = "https://npiregistry.cms.hhs.gov/api/";

    private $apiClient = null;

    public function __construct($verifySsl = true)
    {
        $this->apiClient = new RestClient([
            'base_url' => self::BASE_URL,
            'curl_options' => [CURLOPT_SSL_VERIFYPEER => (int) $verifySsl === true ? 1 : 0, CURLOPT_SSL_VERIFYHOST => $verifySsl === true ? 2 : 0]
        ]);
    }

    /**
     * @inheritDoc
     */
    public function searchByNumber($number)
    {
        $apiRequest = $this->apiClient->get("", ['number' => $number]);

        $response = $this->handleResponse($apiRequest);

        if ($response->getResultCount() == 1) {
            return $response->getResults()[0];
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function search(array $parameters, ?int $limit = 10, ?string $version = '2.1')
    {
        // backwards compatibility
        if (empty($parameters['version'])) {
            $parameters['version'] = $version;
        }

        // backwards compatibility
        if (empty($parameters['limit'])) {
            $parameters['limit'] = $limit;
        }

        return $this->handleResponse($this->apiClient->get("", $parameters));
    }

    /**
     * @param $response CURL resposne from the API Client
     *
     * @return ApiResponse
     * @throws NPPESAPIException When there was an error in the request parameters.
     */
    private function handleResponse($response) {

        switch ($response->info->http_code) {
            case 200:
                $mapper = new JsonMapper();
                return $mapper->map(json_decode($response->response), new ApiResponse());
            default:
                throw new NPPESAPIException($response->response);
        }
    }
}