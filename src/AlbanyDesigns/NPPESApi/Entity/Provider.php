<?php
namespace AlbanyDesigns\NPPESApi\Entity;


class Provider
{
    /**
     * @var integer The Provider's NPI Number.
     */
    private $number;

    /**
     * @var string;
     */
    private $createdEpoch;

    /**
     * @var string;
     */
    private $lastUpdatedEpoch;

    /**
     * @var Taxonomy[]
     */
    private $taxonomies;

    /**
     * @var Address[]
     */
    private $addresses;

    /**
     * @var ProviderBasic
     */
    private $basic;

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getCreatedEpoch()
    {
        return $this->createdEpoch;
    }

    /**
     * @param string $createdEpoch
     */
    public function setCreatedEpoch($createdEpoch)
    {
        $this->createdEpoch = $createdEpoch;
    }

    /**
     * @return string
     */
    public function getLastUpdatedEpoch()
    {
        return $this->lastUpdatedEpoch;
    }

    /**
     * @param string $lastUpdatedEpoch
     */
    public function setLastUpdatedEpoch($lastUpdatedEpoch)
    {
        $this->lastUpdatedEpoch = $lastUpdatedEpoch;
    }

    /**
     * @return Taxonomy[]
     */
    public function getTaxonomies()
    {
        return $this->taxonomies;
    }

    /**
     * @param Taxonomy[] $taxonomies
     */
    public function setTaxonomies($taxonomies)
    {
        $this->taxonomies = $taxonomies;
    }

    /**
     * @return Address[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param Address[] $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @return ProviderBasic
     */
    public function getBasic()
    {
        return $this->basic;
    }

    /**
     * @param ProviderBasic $basic
     */
    public function setBasic($basic)
    {
        $this->basic = $basic;
    }
}