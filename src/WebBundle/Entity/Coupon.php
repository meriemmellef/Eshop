<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Coupon
 *
 * @ORM\Table(name="coupon")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\CouponRepository")
 * @UniqueEntity(
 *     fields={ "code"},
 *     errorPath="code",
 *     message="ce code est deja utilisé")
 */
class Coupon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant=0;
    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="integer")
     */
    private $pourcentage=0;


    /**
     * @var float
     *
     * @ORM\Column(name="nbrcoupon", type="integer")
     */
    private $nbrcoupon=0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_nbrcoupon", type="boolean")
     */
    private $is_nbrcoupon = false;


    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Pays", inversedBy="coupons")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;
    /**
     * @ORM\OneToMany(targetEntity="Commandes", mappedBy="coupon", orphanRemoval=true)
     */
    private $commandes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $is_deleted = false;
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer",nullable=true)
     */
    private $type;


    private $type_to_string = array(
        1 => "réduction par prix",
        2 => "réduction par pourcentage",
    );
    public  function getTypeToString()
    {
        return $this->type_to_string[$this->type];
    }

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    /**
     * @return float
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * @param float $pourcentage
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }

    /**
     * @return float
     */
    public function getNbrcoupon()
    {
        return $this->nbrcoupon;
    }

    /**
     * @param float $nbrcoupon
     */
    public function setNbrcoupon($nbrcoupon)
    {
        $this->nbrcoupon = $nbrcoupon;
    }
    /**
     * @return bool
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param bool $type
     */
    public function setType( $type)
    {
        $this->type = $type;
    }






    public function getCommandes()
    {
        return $this->commandes;
    }

    public function addCommande(Commandes $commande)
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setCoupon($this);
        }

        return $this;
    }

    public function removeCommandes(Commandes $commande)
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->setCoupon() === $this) {
                $commande->setCoupon(null);
            }
        }

        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Coupon
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Coupon
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays(Pays $pays)
    {
        $this->pays = $pays;
    }

    public function setIsNbrcoupon($isNbrcoupon)
    {
        $this->is_nbrcoupon = $isNbrcoupon;

        return $this;
    }

    /**
     * Get is_nbrcoupon
     *
     * @return boolean
     */
    public function getIsNbrcoupon()
    {
        return $this->is_nbrcoupon;
    }
    //is_nbrcoupon
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->is_active;
    }
    public function setIsDeleted($isDeleted)
    {
        $this->is_deleted = $isDeleted;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    /**
     * Remove commande
     *
     * @param \WebBundle\Entity\Commandes $commande
     */
    public function removeCommande(\WebBundle\Entity\Commandes $commande)
    {
        $this->commandes->removeElement($commande);
    }
}
