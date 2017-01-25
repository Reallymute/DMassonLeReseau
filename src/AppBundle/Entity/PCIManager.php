<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCIManager
 */
class PCIManager
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateValid;

    /**
     * @var integer
     */
    private $status;


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
     * Set dateValid
     *
     * @param \DateTime $dateValid
     * @return PCIManager
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
     * Set status
     *
     * @param integer $status
     * @return PCIManager
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
