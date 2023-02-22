<?php
namespace AlbanyDesigns\NPPESApi;


use AlbanyDesigns\NPPESApi\Entity\ApiResponse;
use AlbanyDesigns\NPPESApi\Entity\Provider;

interface NPPESApiInterface
{

    /**
     * Search for a single provider by NPI Number
     *
     * @param $number
     * @return Provider|null Returns a Provider if one is found by the number, otherwise null
     */
    public function searchByNumber($number);

    /**
     * @param array $parameters Search based on allowed parameters in the NPI Registry (https://npiregistry.cms.hhs.gov/api/demo)
     * @param int|null $limit The number of results to return.
     * @param string|null $version The API version to use.  Everything before 2.1 is deprecated.
     * @return ApiResponse
     */
    public function search(array $parameters, ?int $limit = 20, ?string $version = '2.1');

}