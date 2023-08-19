<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Produits
 *
 * @ORM\Table("produits")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\ProduitsRepository")
 * @Vich\Uploadable
 */
class Produits
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
     * @var integer
     *
     * @ORM\Column(name="sous_categorie_id", type="integer")
     */
    private $sous_categorie_id;

    /**
     *
     *
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image = null;

    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\SousCategories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $sous_categorie;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Pays", inversedBy="produits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Station", inversedBy="produits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $station;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomen", type="string", length=125)
     */
    private $nomen;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionen", type="text", nullable=true)
     */
    private $descriptionen;
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_promo", type="float",nullable=true)
     */
    private $prix_promo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=true)
     */
    private $disponible;
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_promo", type="boolean")
     */
    private $is_promo = false;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_achat;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite = 0;
    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $maxcommande;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mincommande;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $updated_at;
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=125,nullable=true)
     */
    private $titre_promo;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $poucentage_promo;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $num_produit_promo;
    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\Favoris", mappedBy="produit", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $favoris;
    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\Couleur", mappedBy="produit", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $couleurs;
    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\Size", mappedBy="produit", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $sizes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer",nullable=true)
     */
    private $parent_id;

    /**
     * @var int
     *
     * @ORM\Column(name="isActiveInAllStation", type="boolean", nullable=true)
     */
    private $isActiveInAllStation;



    public static $size_values = array(
        '0' => "XS",
        '1' => "S",
        '2' => "M",
        '3' => "L",
        '4' => "XL",
        '5' => "XXL",
        '6' => "XXXL",
        '7' => "4XL",
        '8' => "5XL"
    );

    public function getSizeToString($size)
    {
        return self::$size_values[$size];
    }

    public function getSizeValue()
    {
        return self::$size_values;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->favoris = new \Doctrine\Common\Collections\ArrayCollection();
        $this->couleurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sizes = new \Doctrine\Common\Collections\ArrayCollection();

    }
    /**
     * @return int
     */
    public function getisActiveInAllStation()
    {
        return $this->isActiveInAllStation;
    }

    /**
     * @param int $isActiveInAllStation
     */
    public function setisActiveInAllStation($isActiveInAllStation)
    {
        $this->isActiveInAllStation = $isActiveInAllStation;
    }

    public function addSize(\WebBundle\Entity\Size $size)
    {
        $this->sizes[] = $size;

        return $this;
    }

    public function removeSize(\WebBundle\Entity\Size $size)
    {
        $this->sizes->removeElement($size);
    }

    public function getSizes()
    {
        return $this->sizes;

    }

    /**
     * Add commandes
     *
     * @param \WebBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addFavoris(\WebBundle\Entity\Favoris $favoris)
    {
        $this->favoris[] = $favoris;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \WebBundle\Entity\Commandes $commandes
     */
    public function removeFavoris(\WebBundle\Entity\Favoris $favoris)
    {
        $this->favoris->removeElement($favoris);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Add commandes
     *
     * @param \WebBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCouleur(\WebBundle\Entity\Couleur $couleur)
    {
        $this->couleurs[] = $couleur;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \WebBundle\Entity\Commandes $commandes
     */
    public function removeCouleur(\WebBundle\Entity\Couleur $couleur)
    {
        $this->couleurs->removeElement($couleur);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCouleurs()
    {
        return $this->couleurs;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
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
     * @return Produits
     */
    public function setNom($nom = Null)
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
     * Set nomen
     *
     * @param string $nomen
     *
     * @return Produits
     */
    public function setNomen($nomen = Null)
    {
        $this->nomen = $nomen;

        return $this;
    }

    /**
     * Get nomen
     *
     * @return string
     */
    public function getNomen()
    {
        return $this->nomen;
    }
    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }




    /**
     * Set description
     *
     * @param string $descriptionen
     *
     * @return Produits
     */
    public function setDescriptionen($descriptionen)
    {
        $this->descriptionen = $descriptionen;

        return $this;
    }

    /**
     * Get descriptionen
     *
     * @return string
     */
    public function getDescriptionen()
    {
        return $this->descriptionen;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Produits
     */
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

    /**
     * Set nbAchat
     *
     * @param integer $nbAchat
     *
     * @return Produits
     */
    public function setNbAchat($nbAchat)
    {
        $this->nb_achat = $nbAchat;

        return $this;
    }

    /**
     * Get nbAchat
     *
     * @return integer
     */
    public function getNbAchat()
    {
        return $this->nb_achat;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie(Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @return mixed
     */
    public function getSousCategorie()
    {
        return $this->sous_categorie;
    }

    /**
     * @param mixed $sous_categorie
     */
    public function setSousCategorie(SousCategories $sous_categorie)
    {
        $this->sous_categorie = $sous_categorie;
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
    public function getStation()
    {
        return $this->station;
    }

    /**
     * @param mixed $station
     */
    public function setStation(Station $station)
    {
        $this->station = $station;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Produits
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }


    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getMaxcommande()
    {
        return $this->maxcommande;
    }

    /**
     * @param mixed $maxcommande
     */
    public function setMaxcommande($maxcommande)
    {
        $this->maxcommande = $maxcommande;
    }

    /**
     * @return mixed
     */
    public function getMincommande()
    {
        return $this->mincommande;
    }

    /**
     * @param mixed $mincommande
     */
    public function setMincommande($mincommande)
    {
        $this->mincommande = $mincommande;
    }

    /**
     * @return float
     */
    public function getPrixPromo()
    {
        return $this->prix_promo;
    }

    /**
     * @param float $prix_promo
     */
    public function setPrixPromo($prix_promo)
    {
        $this->prix_promo = $prix_promo;
    }

    /**
     * @return bool
     */
    public function isIsPromo()
    {
        return $this->is_promo;
    }

    /**
     * @param bool $is_promo
     */
    public function setIsPromo($is_promo)
    {
        $this->is_promo = $is_promo;
    }

    /**
     * @return string
     */
    public function getTitrePromo()
    {
        return $this->titre_promo;
    }

    /**
     * @param string $titre_promo
     */
    public function setTitrePromo($titre_promo)
    {
        $this->titre_promo = $titre_promo;
    }

    /**
     * @return mixed
     */
    public function getPoucentagePromo()
    {
        return $this->poucentage_promo;
    }

    /**
     * @param mixed $poucentage_promo
     */
    public function setPoucentagePromo($poucentage_promo)
    {
        $this->poucentage_promo = $poucentage_promo;
    }

    /**
     * @return mixed
     */
    public function getNumProduitPromo()
    {
        return $this->num_produit_promo;
    }

    /**
     * @param mixed $num_produit_promo
     */
    public function setNumProduitPromo($num_produit_promo)
    {
        $this->num_produit_promo = $num_produit_promo;
    }

    public function getFinalPrice()
    {
        if ($this->is_promo and $this->prix_promo and $this->prix_promo > 0) {

            return array(
                "prix" => $this->prix_promo,
                "old_prix" => $this->prix,
                "is_promo" => $this->is_promo,
                "percentage" => 0
            );
        }
        if ($this->is_promo and $this->poucentage_promo and $this->num_produit_promo == 1) {
            $nouveau_prix = ($this->prix / 100) * (100 - $this->poucentage_promo);
            return array("prix" => $nouveau_prix, "old_prix" => $this->prix, "is_promo" => $this->is_promo, "percentage" => $this->poucentage_promo);
        }
        if ($this->is_promo and $this->poucentage_promo and $this->num_produit_promo > 1) {

            return array("prix" => $this->prix, "old_prix" => $this->prix, "is_promo" => $this->is_promo, "percentage" => $this->poucentage_promo);
        }
        return array("prix" => $this->prix, "old_prix" => 0, "is_promo" => $this->is_promo, "percentage" => 0);

    }

    public function getTotalPrice($quantite)
    {
        if ($this->is_promo and $this->prix_promo > 0) {
            return array(
                "prix" => $this->prix_promo * $quantite,
                "old_prix" => $this->prix * $quantite,
                "is_promo" => $this->is_promo,
                "percentage" => 0
            );
        } elseif ($this->is_promo and $this->poucentage_promo and $quantite >= $this->num_produit_promo) {
            $nb_produit_promo = intval($quantite / $this->num_produit_promo);
            $nb_produit__hors_promo = $quantite - $nb_produit_promo;
            $nouveau_prix = (($this->prix / 100) * (100 - $this->poucentage_promo) * $nb_produit_promo) + ($this->prix * $nb_produit__hors_promo);
            return array("prix" => $nouveau_prix, "old_prix" => $this->prix * $quantite, "is_promo" => $this->is_promo, "percentage" => $this->poucentage_promo);
        }
        return array("prix" => $this->prix * $quantite, "old_prix" => 0, "is_promo" => $this->is_promo, "percentage" => 0);

    }

    /**
     * Set categorieId
     *
     * @param integer $categorieId
     *
     * @return Produits
     */
    public function setCategorieId($categorieId)
    {
        $this->categorie_id = $categorieId;

        return $this;
    }

    /**
     * Get categorieId
     *
     * @return integer
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }







    /**
     * Set sousCategorieId
     *
     * @param integer $sousCategorieId
     *
     * @return Produits
     */
    public function setSousCategorieId($sousCategorieId)
    {
        $this->sous_categorie_id = $sousCategorieId;

        return $this;
    }

    /**
     * Get sousCategorieId
     *
     * @return integer
     */
    public function getSousCategorieId()
    {
        return $this->sous_categorie_id;
    }

    /**
     * Get isPromo
     *
     * @return boolean
     */
    public function getIsPromo()
    {
        return $this->is_promo;
    }

    /**
     * Add favori
     *
     * @param \WebBundle\Entity\Favoris $favori
     *
     * @return Produits
     */
    public function addFavori(\WebBundle\Entity\Favoris $favori)
    {
        $this->favoris[] = $favori;

        return $this;
    }

    /**
     * Remove favori
     *
     * @param \WebBundle\Entity\Favoris $favori
     */
    public function removeFavori(\WebBundle\Entity\Favoris $favori)
    {
        $this->favoris->removeElement($favori);
    }

    public function getFormatedPrice(float $price, Pays $pays)
    {
        try {
            return number_format($price, $pays->getDeviseNbDigitsDecimal(), $pays->getDeviseDecimalSeparator(), $pays->getDeviseThousandsSeparator()) . " " . $pays->getDevise();
        } catch (\Exception $exception) {
            return "";
        }
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
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
