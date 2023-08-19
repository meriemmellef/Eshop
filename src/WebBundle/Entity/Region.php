<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="WebBundle\Repository\RegionRepository")
 * @ORM\Table(name="region")
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;


    /**
     * @ORM\Column(type="string")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="Delegation", mappedBy="region")
     */
    private $delegations;


    public function __construct() {
        $this->delegations = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     * @return Region
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set grossiste_id
     *
     * @param integer $grossisteId
     * @return Region
     */
    public function setGrossisteId($grossisteId)
    {
        $this->grossiste_id = $grossisteId;

        return $this;
    }

    /**
     * Get grossiste_id
     *
     * @return integer 
     */
    public function getGrossisteId()
    {
        return $this->grossiste_id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Region
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set grossiste
     *
     * @param \WebBundle\Entity\Utilisateurs $grossiste
     * @return Region
     */
    public function setGrossiste(\WebBundle\Entity\Utilisateurs $grossiste = null)
    {
        $this->grossiste = $grossiste;

        return $this;
    }

    /**
     * Get grossiste
     *
     * @return \WebBundle\Entity\Utilisateurs
     */
    public function getGrossiste()
    {
        return $this->grossiste;
    }

    /**
     * Add delegations
     *
     * @param \WebBundle\Entity\Delegation $delegations
     * @return Region
     */
    public function addDelegation(\WebBundle\Entity\Delegation $delegations)
    {
        $this->delegations[] = $delegations;

        return $this;
    }

    /**
     * Remove delegations
     *
     * @param \WebBundle\Entity\Delegation $delegations
     */
    public function removeDelegation(\WebBundle\Entity\Delegation $delegations)
    {
        $this->delegations->removeElement($delegations);
    }

    /**
     * Get delegations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDelegations()
    {
        return $this->delegations;
    }
}
