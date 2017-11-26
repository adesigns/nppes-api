<?php
namespace AlbanyDesigns\NPPESApi;

use AlbanyDesigns\NPPESApi\Entity\ApiResponse;
use AlbanyDesigns\NPPESApi\Entity\Provider;
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
            'curl_options' => [CURLOPT_SSL_VERIFYPEER => (int) $verifySsl, CURLOPT_SSL_VERIFYHOST => (int) $verifySsl]
        ]);
    }

    /**
     * Search for a single provider by NPI Number
     *
     * @param $number
     * @return Provider|null Returns a Provider if one is found by the number, otherwise null
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
     * @param array $parameters Search based on allowed parameters in the NPI Registry (https://npiregistry.cms.hhs.gov/api/demo)
     * @return ApiResponse
     */
    public function search($parameters)
    {
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