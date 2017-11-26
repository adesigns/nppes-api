<?php
namespace AlbanyDesigns\NPPESApi\Entity;


class ApiResponse
{
    /**
     * @var int Number of results in this response.
     */
    private $resultCount;

    /**
     * @var Provider[]
     */
    private $results;

    /**
     * @return int
     */
    public function getResultCount()
    {
        return $this->resultCount;
    }

    /**
     * @param int $resultCount
     */
    public function setResultCount($resultCount)
    {
        $this->resultCount = $resultCount;
    }

    /**
     * @return Provider[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Provider[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }
}