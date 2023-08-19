<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Categories
 *
 * @ORM\Table("sous_categories")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\SousCategoriesRepository")
 */
class SousCategories
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
     * @var integer
     *
     * @ORM\Column(name="categorie_id", type="integer")
     */
    private $categorie_id;
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
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="sous_categories")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;
    /**
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="sous_categories")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;
    /**
     * @ORM\OneToMany(targetEntity="Produits", mappedBy="sous_categorie", cascade={"remove"})
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
     *
     *
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image = null;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;



    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer",nullable=true)
     */
    private $parent_id;


    public function __construct()
    {
        $this->produits = new ArrayCollection();
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
     * Set image
     *
     * @param string $image
     *
     * @return Produits
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return SousCategories
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

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie(Categories $categorie)
    {
        $this->categorie = $categorie;
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
            $produit->setSousCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit)
    {
        if ($this->produits->contains($produit)) {
            $this->produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getSousCategorie() === $this) {
                $produit->setSousCategorie(null);
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
     * @return int
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * @param int $categorie_id
     */
    public function setCategorieId( $categorie_id)
    {
        $this->categorie_id = $categorie_id;
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
