<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table("categories")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\CategoriesRepository")
 */
class Categories
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
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column( type="string", length=125, nullable=true)
     */
    private $nom_en;
    /**
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="categories")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;
    /**
     * @ORM\OneToMany(targetEntity="SousCategories", mappedBy="categorie",cascade={"remove"})
     */
    private $sous_categories;
    /**
     * @ORM\OneToMany(targetEntity="Produits", mappedBy="categorie", cascade={"remove"})
     */
    private $produits;
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFood = false;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isAuto = false;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isClothing = false;


    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer",nullable=true)
     */
     private $parent_id;


    public function __toString()
    {

        return $this->getNom();
    }
    public function __construct()
    {
        $time = new \DateTime();
        $time->setTimezone(new \DateTimeZone('Africa/Tunis'));
        $this->createdAt = $time;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Categories
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set nomEn
     *
     * @param string $nom_en
     *
     * @return string
     */
    public function setNomEn($nom_en)
    {
        $this->nom_en = $nom_en;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string
     */
    public function getNomEn()
    {
        return $this->nom_en;
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
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getProduits()
    {
        return $this->produits;
    }

    public function addProduit(Produits $produit)
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit)
    {
        if ($this->produits->contains($produit)) {
            $this->produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSousCategories()
    {
        return $this->sous_categories;
    }

    public function addSousCategorie(SousCategories $sousCategorie)
    {
        if (!$this->sous_categories->contains($sousCategorie)) {
            $this->sous_categories[] = $sousCategorie;
            $sousCategorie->setCategorie($this);
        }

        return $this;
    }

    public function removeSousCategorie(SousCategories $sousCategorie)
    {
        if ($this->sous_categories->contains($sousCategorie)) {
            $this->sous_categories->removeElement($sousCategorie);
            // set the owning side to null (unless already changed)
            if ($sousCategorie->getCategorie() === $this) {
                $sousCategorie->setCategorie(null);
            }
        }
        return $this;
    }
    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return bool
     */
    public function isFood()
    {
        return $this->isFood;
    }

    /**
     * @param bool $isFood
     */
    public function setIsFood($isFood)
    {
        $this->isFood = $isFood;
    }

    /**
     * @return bool
     */
    public function isAuto(): bool
    {
        return $this->isAuto;
    }

    /**
     * @param bool $isAuto
     */
    public function setIsAuto(bool $isAuto)
    {
        $this->isAuto = $isAuto;
    }

    /**
     * @return bool
     */
    public function isClothing(): bool
    {
        return $this->isClothing;
    }

    /**
     * @param bool $isClothing
     */
    public function setIsClothing(bool $isClothing)
    {
        $this->isClothing = $isClothing;
    }



    /**
     * Get isFood
     *
     * @return boolean
     */
    public function getIsFood()
    {
        return $this->isFood;
    }

    /**
     * Get isAuto
     *
     * @return boolean
     */
    public function getIsAuto()
    {
        return $this->isAuto;
    }

    /**
     * Get isClothing
     *
     * @return boolean
     */
    public function getIsClothing()
    {
        return $this->isClothing;
    }

    /**
     * Add sousCategory
     *
     * @param \WebBundle\Entity\SousCategories $sousCategory
     *
     * @return Categories
     */
    public function addSousCategory(\WebBundle\Entity\SousCategories $sousCategory)
    {
        $this->sous_categories[] = $sousCategory;

        return $this;
    }

    /**
     * Remove sousCategory
     *
     * @param \WebBundle\Entity\SousCategories $sousCategory
     */
    public function removeSousCategory(\WebBundle\Entity\SousCategories $sousCategory)
    {
        $this->sous_categories->removeElement($sousCategory);
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param int $parent_id
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
    }




}
