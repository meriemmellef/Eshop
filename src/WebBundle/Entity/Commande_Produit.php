<?php


namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**

 *
 * @ORM\Table("commande_produit")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\CommandeProduitRepository")
 */
class Commande_Produit
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
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Commandes", cascade={"persist"})
     * @ORM\JoinColumn(name="commande_id",referencedColumnName="id")
     */
    private $commande;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Produits", cascade={"persist"})
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    private $produit;
    /**
     *
     * @ORM\Column(type="array", nullable=true)
     */
    private $sizes;
    /**
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite = 0;
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    public function __construct()
    {
        $this->sizes= array();

    }
    public function addSizes($size)
    {

        //  if (!in_array($horaire, $this->horaires)) {
        $this->sizes[] = $size;
        //  }

        return $this;
    }
    public function getSizes()
    {
        if($this->sizes == null)$sizes= array();
        else $sizes = $this->sizes;
        return $sizes;
    }
    public function setSizes($sizes)
    {
        $this->sizes = array_values(sizes);
        return $this->sizes;
    }
    public function removeSizes($size)
    {
        if (false !== $key = array_search($size, $this->sizes, true)) {
            unset($this->sizes[$key]);
            $this->sizes = array_values($this->sizes);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param mixed $commande
     */
    public function setCommande(Commandes $commande)
    {
        $this->commande = $commande;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix( $prix)
    {
        $this->prix = $prix;
    }

}
