<?php
namespace WebBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="WebBundle\Repository\UtilisateursRepository")
 * @ORM\Table(name="user")
 * @UniqueEntity(fields={"username"}, message="username.exist")
 * @UniqueEntity(fields={"email"}, message="fos_user.email.exist")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $lastName;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $date_naissance;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $tel;



    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $telFacultatif;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $matriculeFiscale;
    /**
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="user", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable = true)
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity="Station", inversedBy="gerant", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable = true)
     */
    private $station;


    /**
     * @ORM\Column(type="boolean")
     */
    private $accept_pub = false;

    /**
     * @Assert\Regex(
     * pattern="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",
     * message="Votre mot de passe doit comporter au minimum 8 caractères et contenir une majuscule, une minuscule et un chiffre"
     * )
     */
    protected $plainPassword;

    public function __toString()
    {
        return $this->firstName." ".$this->lastName;

    }

    public function __construct()
    {
        parent::__construct();
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->favoris = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\Commandes", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;
    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\Favoris", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $favoris;

    /**
     * @ORM\OneToMany(targetEntity="WebBundle\Entity\UtilisateursAdresses", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;



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
     * Add commandes
     *
     * @param \WebBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\WebBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \WebBundle\Entity\Commandes $commandes
     */
    public function removeCommande(\WebBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
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
    public function setStation($station)
    {
        $this->station = $station;
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adresses
     *
     * @param \WebBundle\Entity\UtilisateursAdresses $adresses
     * @return Utilisateurs
     */
    public function addAdress(\WebBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \WebBundle\Entity\UtilisateursAdresses $adresses
     */
    public function removeAdress(\WebBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Utilisateurs
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Utilisateurs
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set matriculeFiscale
     *
     * @param string $matriculeFiscale
     *
     * @return Utilisateurs
     */
    public function setMatriculeFiscale($matriculeFiscale)
    {
        $this->matriculeFiscale = $matriculeFiscale;

        return $this;
    }

    /**
     * Get matriculeFiscale
     *
     * @return string
     */
    public function getMatriculeFiscale()
    {
        return $this->matriculeFiscale;
    }
    public function setEmail($email){
        $this->email = $email;
        $this->username = $email;
    }

    public function setEmailCanonical($emailCanonical){
        $this->emailCanonical = $emailCanonical;
        $this->usernameCanonical = $emailCanonical;
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
    public function getTelFacultatif()
    {
        return $this->telFacultatif;
    }

    /**
     * @param mixed $telFacultatif
     */
    public function setTelFacultatif($telFacultatif)
    {
        $this->telFacultatif = $telFacultatif;
    }

    /**
     * @return mixed
     */
    public function getAcceptPub()
    {
        return $this->accept_pub;
    }

    /**
     * @param mixed $accept_pub
     */
    public function setAcceptPub($accept_pub)
    {
        $this->accept_pub = $accept_pub;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }



    /**
     * Add favori
     *
     * @param \WebBundle\Entity\Favoris $favori
     *
     * @return Utilisateurs
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
}
