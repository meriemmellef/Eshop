<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="WebBundle\Repository\StationRepository")
 */
class Station
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;
    /**
     * @ORM\ManyToOne(targetEntity="Zone", inversedBy="stations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $zone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heure_debut;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heure_fin;
    /**
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="stations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pays;

    /**
     * @ORM\OneToOne(targetEntity="Utilisateurs", mappedBy="station", cascade={"persist", "remove"})
     */
    private $gerant;
    /**
     * @ORM\OneToMany(targetEntity="Produits", mappedBy="station", orphanRemoval=true)
     */
    private $produits;
    /**
     * @ORM\OneToMany(targetEntity="Commandes", mappedBy="pays", orphanRemoval=true)
     */
    private $commandes;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $isActive ;

    /**
     * @ORM\Column(type="boolean", options={"default":false})
     */
    private $isDeleted = false;

    /**
     *
     * @ORM\Column(type="array", nullable=true)
     */
    private $horaires;
    /**
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $isOpen = true;

    /**
     *
     *
     * @var string
     *
     * @ORM\Column(name="file_vente", type="string", length=255, nullable=true)
     */
    private $file_vente;
    /**
     *
     * @ORM\Column(type="boolean", options={"default":false})
     */
    private $isDelivered=false;
    /**
     * @var float
     *
     * @ORM\Column( type="float", nullable=true)
     */
    private $prixLivraison=0;
    /**
     * @var
     *
     * @ORM\Column( type="float", nullable=true)
     */
    private $minprixLivraison;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     */
    private $tel;


    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="text", nullable=true)
     */
    private $latitude = null;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="text", nullable=true)
     */
    private $longitude = null;

    public static $horaire_values = array(
        '1' => "de 8h à 10h",
        '2' => "de 10h à 12h",
        '3' => "de 12h à 14h",
        '4' => "de 14h à 16h",
        '5' => "de 16h à 18h",
        '6' => "de 18h à 20h",
        '7' => "de 20h à 22h",

    );


    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->commandes = new ArrayCollection();
        $this->horaires= array('1', '2', '3','4','5','6','7');
        $time = new \DateTime();

        $this->createdAt = $time;

    }

    public function getHoraireFromIndex($i)
    {
        return self::$horaire_values[$i];
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Station
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
    public function getGerant()
    {
        return $this->gerant;
    }

    /**
     * @param mixed $gerant
     */
    public function setGerant($gerant)
    {
        $this->gerant = $gerant;
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
            $produit->setStation($this);
        }

        return $this;
    }

    public function removeproduits(Produits $produit)
    {
        if ($this->produits->contains($produit)) {
            $this->produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getStation() === $this) {
                $produit->setStation(null);
            }
        }

        return $this;
    }
    /**
     * @return mixed
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    public function addCommande(Commandes $commande)
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setStation($this);
        }

        return $this;
    }

    public function removeCommande(Commandes $commande)
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getStation() === $this) {
                $commande->setStation(null);
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
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param mixed $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }



    /**
     * @return mixed
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * @param mixed $heure_debut
     */
    public function setHeureDebut($heure_debut)
    {
        $this->heure_debut = $heure_debut;
    }

    /**
     * @return mixed
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * @param mixed $heure_fin
     */
    public function setHeureFin($heure_fin)
    {
        $this->heure_fin = $heure_fin;
    }

    public function addHoraire($horaire)
    {

      //  if (!in_array($horaire, $this->horaires)) {
            $this->horaires[] = $horaire;
      //  }

        return $this;
    }
    public function getHoraires()
    {
        if($this->horaires == null)$horaires= array();
        else $horaires = $this->horaires;
        return $horaires;
    }
    public function removeHoraire($horaire)
    {
        if (false !== $key = array_search($horaire, $this->horaires, true)) {
            unset($this->horaires[$key]);
            $this->horaires = array_values($this->horaires);
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }

    /**
     * @param mixed $isOpen
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
    }

    /**
     * @return string
     */
    public function getFileVente(): string
    {
        return $this->file_vente;
    }

    /**
     * @param string $file_vente
     */
    public function setFileVente(string $file_vente)
    {
        $this->file_vente = $file_vente;
    }

    /**
     * @return mixed
     */
    public function getIsDelivered()
    {
        return $this->isDelivered;
    }

    /**
     * @param mixed $isDelivered
     */
    public function setIsDelivered($isDelivered)
    {
        $this->isDelivered = $isDelivered;
    }

    /**
     * @return float
     */
    public function getPrixLivraison(): float
    {
        return $this->prixLivraison;
    }

    /**
     * @param float $prixLivraison
     */
    public function setPrixLivraison(float $prixLivraison)
    {
        $this->prixLivraison = $prixLivraison;
    }

    /**
     * @return mixed
     */
    public function getMinprixLivraison()
    {
        return $this->minprixLivraison;
    }

    /**
     * @param mixed $minprixLivraison
     */
    public function setMinprixLivraison($minprixLivraison)
    {
        $this->minprixLivraison = $minprixLivraison;
    }




    /**
     * Set horaires
     *
     * @param array $horaires
     *
     * @return Station
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Set zone
     *
     * @param \WebBundle\Entity\Zone $zone
     *
     * @return Station
     */
    public function setZone(\WebBundle\Entity\Zone $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return \WebBundle\Entity\Zone
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Remove produit
     *
     * @param \WebBundle\Entity\Produits $produit
     */
    public function removeProduit(\WebBundle\Entity\Produits $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Add gerant
     *
     * @param \WebBundle\Entity\Utilisateurs $gerant
     *
     * @return Station
     */
    public function addGerant(\WebBundle\Entity\Utilisateurs $gerant)
    {
        $this->gerant[] = $gerant;

        return $this;
    }

    /**
     * Remove gerant
     *
     * @param \WebBundle\Entity\Utilisateurs $gerant
     */
    public function removeGerant(\WebBundle\Entity\Utilisateurs $gerant)
    {
        $this->gerant->removeElement($gerant);
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }




}
