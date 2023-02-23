<?php
namespace AlbanyDesigns\NPPESApi\Entity;


class ProviderBasic
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $credential;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var \DateTime
     */
    private $lastUpdated;

    /**
     * @var string
     */
    private $organizationName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $soleProprietor;

    /**
     * @var string
     */
    private $namePrefix;

    /**
     * @var \DateTime
     */
    private $enumerationDate;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @param string $credential
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @param \DateTime $lastUpdated
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param string $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getSoleProprietor()
    {
        return $this->soleProprietor;
    }

    /**
     * @param string $soleProprietor
     */
    public function setSoleProprietor($soleProprietor)
    {
        $this->soleProprietor = $soleProprietor;
    }

    /**
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * @param string $namePrefix
     */
    public function setNamePrefix($namePrefix)
    {
        $this->namePrefix = $namePrefix;
    }

    /**
     * @return \DateTime
     */
    public function getEnumerationDate()
    {
        return $this->enumerationDate;
    }

    /**
     * @param \DateTime $enumerationDate
     */
    public function setEnumerationDate($enumerationDate)
    {
        $this->enumerationDate = $enumerationDate;
    }


}