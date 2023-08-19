<?php

namespace WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couleur
 *
 * @ORM\Table(name="couleur")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\CouleurRepository")
 */
class Couleur
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
     * @ORM\Column(name="code_couleur", type="string", length=10, nullable=true)
     */
    private $codeCouleur;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Produits", inversedBy="couleurs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produit;
    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\Size", mappedBy="couleur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $sizes;
    public function __construct()
    {
        $this->sizes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeCouleur
     *
     * @param string $codeCouleur
     *
     * @return Couleur
     */
    public function setCodeCouleur($codeCouleur)
    {
        $this->codeCouleur = $codeCouleur;

        return $this;
    }

    /**
     * Get codeCouleur
     *
     * @return string
     */
    public function getCodeCouleur()
    {
        return $this->codeCouleur;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Couleur
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

}
