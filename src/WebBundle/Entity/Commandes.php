<?php

namespace WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table("commandes")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\CommandesRepository")
 */
class Commandes
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
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Utilisateurs", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */

    private $utilisateur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="string")
     */
    private $uid;

    /**
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;
    /**
     * @ORM\ManyToOne(targetEntity="Station", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $station;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\Coupon", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $coupon;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_reservation", type="datetime")
     */
    private $date_reservation;
    /**
     * @var integer
     *
     * @ORM\Column(name="date_reception", type="datetime")
     */
    private $date_reception;

    /**
     * @var string
     *
     * @ORM\Column(name="periode_reception", type="string")
     */
    private $periode_reception;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $date_annulation;

    /**
     *
     * @ORM\Column(name="statutcommande", type="integer")
     */
    private $statutcommande = 0;
    /**
     *
     * @ORM\Column(name="statutpayement", type="integer")
     */
    private $statutpayement;
    /**
     *
     * @ORM\Column(name="remboursement", type="integer")
     */
    private $remboursement = 0;


    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * @ORM\ManyToOne(targetEntity="WebBundle\Entity\UtilisateursAdresses", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresselivraison;


    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $payzen_response;
    private $statut_commande_to_string = array(
        0 => "Non traitée",
        1 => "En cours de traitement",
        2 => "Traitée",
        3 => "Livrée",
        4 => "Annuler",
    );

    private $statut_commande_css_class = array(
        0 => "badge-danger",
        1 => "badge-info",
        2 => "badge-primary",
        3 => "badge-warning",
        4 => "badge-dark",
    );

    public function getStatutCommandeToString()
    {
        return $this->statut_commande_to_string[$this->statutcommande];
    }


    public function getStatusCommandeCssClass()
    {
        return $this->statut_commande_css_class[$this->statutcommande];
    }


    private $statut_payement_to_string = array(
        0 => "Non Payée",
        1 => "Payée",
    );

    private $statut_payement_css_class = array(
        0 => "badge-danger",
        1 => "badge-success",
    );

    public function getStatutPayementToString()
    {
        return $this->statut_payement_to_string[$this->statutpayement];
    }


    public function getStatusPayementCssClass()
    {
        return $this->statut_payement_css_class[$this->statutpayement];
    }


    private $remboursement_to_string = array(
        0 => "Non remboursée",
        1 => "Remboursée",
    );

    private $remboursement_css_class = array(
        0 => "badge-danger",
        1 => "badge-success",
    );


    public function getRemboursementToString()
    {
        return $this->remboursement_to_string[$this->remboursement];
    }


    public function getRemboursementCssClass()
    {
        return $this->remboursement_css_class[$this->remboursement];
    }


    private $periode_to_string = array(
        1 => "8h->10h",
        2 => "10h->12h",
        3 => "12h->14h",
        4 => "14h->16h",
        5 => "16h->18h",
        6 => "18h->20h",
        7 => "20h->22h",

    );


    public function getPeriodeToString()
    {
        if (isset($this->periode_to_string[$this->periode_reception]))
            return $this->periode_to_string[$this->periode_reception];
        return "";
    }


    public function __construct()
    {
        $time = new \DateTime();
        $time->setTimezone(new \DateTimeZone('Africa/Tunis'));
        $this->created_at = $time;
        $this->date_reservation = $time;
        $this->payzen_response = array();

    }

    /**
     * @return mixed
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param mixed $coupon
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
    }


    public function setAdresselivraison(UtilisateursAdresses $adresselivraison)
    {
        $this->adresselivraison = $adresselivraison;
    }

    public function getAdresselivraison()
    {
        return $this->adresselivraison;
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
     * Set valider
     *
     * @param boolean $valider
     *
     * @return Commandes
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Commandes
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
     * Set reference
     *
     * @param integer $reference
     *
     * @return Commandes
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
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
     * Set commande
     *
     * @param array $commande
     *
     * @return Commandes
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return array
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set utilisateur
     *
     * @param \WebBundle\Entity\Utilisateurs $utilisateur
     *
     * @return Commandes
     */
    public function setUtilisateur(\WebBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \WebBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }


    /**
     * Get grossiste
     *
     * @return string
     */
    public function getDateclient()
    {
        switch ($this->periode_reservation) {
            case 1:
                $periode = 'Matin de 8h - 12h';
                break;
            case 2:
                $periode = 'Aprés midi de 13h - 17h';
                break;
            case 3:
                $periode = 'Soir de 17h - 21h';
                break;
        }
        return $this->date_reservation->format('Y-m-d') . " le " . $periode;
    }

    /**
     * @return int
     */
    public function getDateReservation()
    {
        return $this->date_reservation;
    }

    /**
     * @param int $date_reservation
     */
    public function setDateReservation($date_reservation)
    {
        $this->date_reservation = $date_reservation;
    }

    /**
     * @return int
     */
    public function getDateReception()
    {
        return $this->date_reception;
    }

    /**
     * @param int $date_reception
     */
    public function setDateReception($date_reception)
    {
        $this->date_reception = $date_reception;
    }

    /**
     * @return string
     */
    public function getPeriodeReception()
    {
        return $this->periode_reception;
    }

    /**
     * @param string $periode_reception
     */
    public function setPeriodeReception($periode_reception)
    {
        $this->periode_reception = $periode_reception;
    }

    /**
     * @return mixed
     */
    public function getDateAnnulation()
    {
        return $this->date_annulation;
    }

    /**
     * @param mixed $date_annulation
     */
    public function setDateAnnulation($date_annulation)
    {
        $this->date_annulation = $date_annulation;
    }

    /**
     * @return mixed
     */
    public function getStatutcommande()
    {
        return $this->statutcommande;
    }

    /**
     * @param mixed $statutcommande
     */
    public function setStatutcommande($statutcommande)
    {
        $this->statutcommande = $statutcommande;
    }

    /**
     * @return mixed
     */
    public function getStatutpayement()
    {
        return $this->statutpayement;
    }

    /**
     * @param mixed $statutpayement
     */
    public function setStatutpayement($statutpayement)
    {
        $this->statutpayement = $statutpayement;
    }

    /**
     * @return mixed
     */
    public function getRemboursement()
    {
        return $this->remboursement;
    }

    /**
     * @param mixed $remboursement
     */
    public function setRemboursement($remboursement)
    {
        $this->remboursement = $remboursement;
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
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPayzenResponse()
    {
        return $this->payzen_response;
    }

    /**
     * @param mixed $payzen_response
     */
    public function setPayzenResponse($payzen_response)
    {
        $this->payzen_response = $payzen_response;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }


}
