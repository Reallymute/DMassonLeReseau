<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="public.account", schema="public")
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FamilyNamePerson", type="text")
     */
    private $familyNamePerson;

    /**
     * @var string
     *
     * @ORM\Column(name="GivenNamePerson", type="text")
     */
    private $givenNamePerson;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateValid", type="datetime")
     */
    private $dateValid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateExpire", type="datetime")
     */
    private $dateExpire;

    /**
     * @var integer
     *
     * @ORM\Column(name="DataType", type="smallint")
     */
    private $dataType;

    /**
     * @var string
     *
     * @ORM\Column(name="ValidDataTypes", type="text")
     */
    private $validDataTypes;

    /**
     * @var array
     *
     * @ORM\Column(name="DataArray", type="json_array")
     */
    private $dataArray;

    /**
     * @var integer
     *
     * @ORM\Column(name="DataStatus", type="smallint")
     */
    private $dataStatus;

    /**
     * @var array
     *
     * @ORM\Column(name="ValidDataStatus", type="json_array")
     */
    private $validDataStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ExternalTokenRef", type="string", length=255)
     */
    private $externalTokenRef;

    /**
     * @var string
     *
     * @ORM\Column(name="DataSummary", type="string", length=255)
     */
    private $dataSummary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TokenExpire", type="datetime")
     */
    private $tokenExpire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set familyNamePerson
     *
     * @param string $familyNamePerson
     * @return Account
     */
    public function setFamilyNamePerson($familyNamePerson)
    {
        $this->familyNamePerson = $familyNamePerson;

        return $this;
    }

    /**
     * Get familyNamePerson
     *
     * @return string 
     */
    public function getFamilyNamePerson()
    {
        return $this->familyNamePerson;
    }

    /**
     * Set givenNamePerson
     *
     * @param string $givenNamePerson
     * @return Account
     */
    public function setGivenNamePerson($givenNamePerson)
    {
        $this->givenNamePerson = $givenNamePerson;

        return $this;
    }

    /**
     * Get givenNamePerson
     *
     * @return string 
     */
    public function getGivenNamePerson()
    {
        return $this->givenNamePerson;
    }

    /**
     * Set dateValid
     *
     * @param \DateTime $dateValid
     * @return Account
     */
    public function setDateValid($dateValid)
    {
        $this->dateValid = $dateValid;

        return $this;
    }

    /**
     * Get dateValid
     *
     * @return \DateTime 
     */
    public function getDateValid()
    {
        return $this->dateValid;
    }

    /**
     * Set dateExpire
     *
     * @param \DateTime $dateExpire
     * @return Account
     */
    public function setDateExpire($dateExpire)
    {
        $this->dateExpire = $dateExpire;

        return $this;
    }

    /**
     * Get dateExpire
     *
     * @return \DateTime 
     */
    public function getDateExpire()
    {
        return $this->dateExpire;
    }

    /**
     * Set dataType
     *
     * @param integer $dataType
     * @return Account
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get dataType
     *
     * @return integer 
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Set validDataTypes
     *
     * @param string $validDataTypes
     * @return Account
     */
    public function setValidDataTypes($validDataTypes)
    {
        $this->validDataTypes = $validDataTypes;

        return $this;
    }

    /**
     * Get validDataTypes
     *
     * @return string 
     */
    public function getValidDataTypes()
    {
        return $this->validDataTypes;
    }

    /**
     * Set dataArray
     *
     * @param array $dataArray
     * @return Account
     */
    public function setDataArray($dataArray)
    {
        $this->dataArray = $dataArray;

        return $this;
    }

    /**
     * Get dataArray
     *
     * @return array 
     */
    public function getDataArray()
    {
        return $this->dataArray;
    }

    /**
     * Set dataStatus
     *
     * @param integer $dataStatus
     * @return Account
     */
    public function setDataStatus($dataStatus)
    {
        $this->dataStatus = $dataStatus;

        return $this;
    }

    /**
     * Get dataStatus
     *
     * @return integer 
     */
    public function getDataStatus()
    {
        return $this->dataStatus;
    }

    /**
     * Set validDataStatus
     *
     * @param array $validDataStatus
     * @return Account
     */
    public function setValidDataStatus($validDataStatus)
    {
        $this->validDataStatus = $validDataStatus;

        return $this;
    }

    /**
     * Get validDataStatus
     *
     * @return array 
     */
    public function getValidDataStatus()
    {
        return $this->validDataStatus;
    }

    /**
     * Set externalTokenRef
     *
     * @param string $externalTokenRef
     * @return Account
     */
    public function setExternalTokenRef($externalTokenRef)
    {
        $this->externalTokenRef = $externalTokenRef;

        return $this;
    }

    /**
     * Get externalTokenRef
     *
     * @return string 
     */
    public function getExternalTokenRef()
    {
        return $this->externalTokenRef;
    }

    /**
     * Set dataSummary
     *
     * @param string $dataSummary
     * @return Account
     */
    public function setDataSummary($dataSummary)
    {
        $this->dataSummary = $dataSummary;

        return $this;
    }

    /**
     * Get dataSummary
     *
     * @return string 
     */
    public function getDataSummary()
    {
        return $this->dataSummary;
    }

    /**
     * Set tokenExpire
     *
     * @param \DateTime $tokenExpire
     * @return Account
     */
    public function setTokenExpire($tokenExpire)
    {
        $this->tokenExpire = $tokenExpire;

        return $this;
    }

    /**
     * Get tokenExpire
     *
     * @return \DateTime 
     */
    public function getTokenExpire()
    {
        return $this->tokenExpire;
    }
}
