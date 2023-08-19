<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Pays
 *
 * @ORM\Table("pays")
 * @ORM\Entity(repositoryClass="WebBundle\Repository\PaysRepository")
 * @UniqueEntity(fields={"code"}, message="code.exist")
 */
class Pays
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
     * @ORM\Column(type="string", length=3)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $front_language = "EN";

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $web_site_title = "E-boutique";

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $web_site_name_filiale = "TotalEnergies.com";
    /**
     * @ORM\Column(type="string", length=300)
     */
    private $web_site_url_filiale = "https://totalenergies.com/";

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $how_to_buy_help = " ";

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $station_popup_title = "";


    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $station_popup_description = "";


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cgu_file;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $personel_data_file;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cgv_file;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mention_legale_file;
    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $rappel_rgpd_text;
    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $cookies_banner;


    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $devise= "$";

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $devise_nb_digits_decimal = 0;
    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $devise_decimal_separator = "";
    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $devise_thousands_separator = "";


    /**
     * @ORM\Column(type="string", length=50)
     */
    private $timezone;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mail_transport = "gmail";
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_username = "test@gmail.com";
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_password;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_host = "smtp.gmail.com";
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mail_port = 587;
    /**
     * @ORM\Column(type="string", length=6)
     */
    private $mail_encryption = "tls";
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $mail_auth_mode;

    /**
     * @ORM\OneToMany(targetEntity="Station", mappedBy="pays", orphanRemoval=true)
     * @OrderBy({"nom" = "ASC"})
     */
    private $stations;

    /**
     * @ORM\OneToMany(targetEntity="Produits", mappedBy="pays", orphanRemoval=true)
     */
    private $produits;

    /**
     * @ORM\OneToMany(targetEntity="Categories", mappedBy="pays", orphanRemoval=true)
     */
    private $categories;
    /**
     * @ORM\OneToMany(targetEntity="SousCategories", mappedBy="pays", orphanRemoval=true)
     */
    private $sous_categories;
    /**
     * @ORM\OneToMany(targetEntity="Commandes", mappedBy="pays", orphanRemoval=true)
     */
    private $commandes;

    /**
     * @ORM\OneToMany (targetEntity="Utilisateurs", mappedBy="pays", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $smsNewCommand;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $smsConfirmCommand;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActiveSmsConfirmCommand;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActiveSmsNewCommand;




    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mailNewCommand;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mailConfirmCommand;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActiveMailNewCommand;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActiveMailConfirmCommand;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codePhone ="+216";

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=255, nullable=true)
     */
    private $image1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image2", type="string", length=255, nullable=true)
     */
    private $image2 ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image3", type="string", length=255, nullable=true)
     */
    private $image3 ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image4", type="string", length=255, nullable=true)
     */
    private $image4;



    public function __construct()
    {
        $this->stations = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->produits = new ArrayCollection();
        $this->sous_categories = new ArrayCollection();
        $this->commandes = new ArrayCollection();

        $time = new \DateTime();
        //$time->setTimezone(new \DateTimeZone('UTC'));
     //was   $this->createdAt = $time;

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
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function getStations()
    {
        return $this->stations;
    }

    public function addStation(Station $station)
    {
        if (!$this->stations->contains($station)) {
            $this->stations[] = $station;
            $station->setPays($this);
        }

        return $this;
    }

    public function removeStation(Station $station)
    {
        if ($this->stations->contains($station)) {
            $this->stations->removeElement($station);
            // set the owning side to null (unless already changed)
            if ($station->getPays() === $this) {
                $station->setPays(null);
            }
        }

        return $this;
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
            $produit->setPays($this);
        }

        return $this;
    }

    public function removeProduit(Produits $produit)
    {
        if ($this->produits->contains($produit)) {
            $this->produits->removeElement($produit);
            // set the owning side to null (unless already changed)
            if ($produit->getPays() === $this) {
                $produit->setPays(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    public function addCategorie(Categories $categorie)
    {
        if (!$this->categories->contains($categorie)) {
            $this->categories[] = $categorie;
            $categorie->setPays($this);
        }

        return $this;
    }

    public function removeCategorie(Categories $categorie)
    {
        if ($this->categories->contains($categorie)) {
            $this->categories->removeElement($categorie);
            // set the owning side to null (unless already changed)
            if ($categorie->getPays() === $this) {
                $categorie->setPays(null);
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
            $sousCategorie->setPays($this);
        }

        return $this;
    }

    public function removeSousCategorie(SousCategories $sousCategorie)
    {
        if ($this->sous_categories->contains($sousCategorie)) {
            $this->sous_categories->removeElement($sousCategorie);
            // set the owning side to null (unless already changed)
            if ($sousCategorie->getPays() === $this) {
                $sousCategorie->setPays(null);
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
            $commande->setPays($this);
        }

        return $this;
    }

    public function removeCommande(SousCategories $commande)
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getPays() === $this) {
                $commande->setPays(null);
            }
        }
        return $this;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(Utilisateurs $user)
    {
        $this->user = $user;
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
    public function getIsActiveSmsConfirmCommand()
    {
        return $this->isActiveSmsConfirmCommand;
    }
    /**
     * @param mixed $isActiveSmsConfirmCommand
     */
    public function setIsActiveSmsConfirmCommand( $isActiveSmsConfirmCommand)
    {
        $this->isActiveSmsConfirmCommand = $isActiveSmsConfirmCommand;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsActiveSmsNewCommand()
    {
        return $this->isActiveSmsNewCommand;
    }
    /**
     * @param mixed $isActiveSmsNewCommand
     */
    public function setIsActiveSmsNewCommand( $isActiveSmsNewCommand)
    {
        $this->isActiveSmsNewCommand = $isActiveSmsNewCommand;

        return $this;
    }

    /**
     * Set devise
     *
     * @param string $devise
     *
     * @return Pays
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Pays
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Add category
     *
     * @param \WebBundle\Entity\Categories $category
     *
     * @return Pays
     */
    public function addCategory(\WebBundle\Entity\Categories $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \WebBundle\Entity\Categories $category
     */
    public function removeCategory(\WebBundle\Entity\Categories $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Add sousCategory
     *
     * @param \WebBundle\Entity\SousCategories $sousCategory
     *
     * @return Pays
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
     * Set deviseTousandsSeparator
     *
     * @param string $deviseTousandsSeparator
     *
     * @return Pays
     */
    public function setDeviseTousandsSeparator($deviseTousandsSeparator)
    {
        $this->devise_tousands_separator = !isset($deviseTousandsSeparator) ? '' : $deviseTousandsSeparator;

        return $this;
    }

    /**
     * Get deviseTousandsSeparator
     *
     * @return string
     */
    public function getDeviseTousandsSeparator()
    {
        return $this->devise_tousands_separator;
    }


    /**
     * Set deviseThousandsSeparator
     *
     * @param string $deviseThousandsSeparator
     *
     * @return Pays
     */
    public function setDeviseThousandsSeparator($deviseThousandsSeparator)
    {
        $this->devise_thousands_separator = $deviseThousandsSeparator;

        return $this;
    }

    /**
     * Get deviseThousandsSeparator
     *
     * @return string
     */
    public function getDeviseThousandsSeparator()
    {
        return $this->devise_thousands_separator;
    }

    /**
     * Set deviseDecimalSeparator
     *
     * @param string $deviseDecimalSeparator
     *
     * @return Pays
     */
    public function setDeviseDecimalSeparator($deviseDecimalSeparator)
    {
        $this->devise_decimal_separator = $deviseDecimalSeparator;

        return $this;
    }

    /**
     * Get deviseDecimalSeparator
     *
     * @return string
     */
    public function getDeviseDecimalSeparator()
    {
        return $this->devise_decimal_separator;
    }

    /**
     * Set deviseNbDigitsDecimal
     *
     * @param integer $deviseNbDigitsDecimal
     *
     * @return Pays
     */
    public function setDeviseNbDigitsDecimal($deviseNbDigitsDecimal)
    {
        $this->devise_nb_digits_decimal = $deviseNbDigitsDecimal;

        return $this;
    }

    /**
     * Get deviseNbDigitsDecimal
     *
     * @return integer
     */
    public function getDeviseNbDigitsDecimal()
    {
        return $this->devise_nb_digits_decimal;
    }

    /**
     * Set webSiteTitle
     *
     * @param string $webSiteTitle
     *
     * @return Pays
     */
    public function setWebSiteTitle($webSiteTitle)
    {
        $this->web_site_title = $webSiteTitle;

        return $this;
    }

    /**
     * Get webSiteTitle
     *
     * @return string
     */
    public function getWebSiteTitle()
    {
        return $this->web_site_title;
    }

    /**
     * Set webSiteFiliale
     *
     * @param string $webSiteFiliale
     *
     * @return Pays
     */
    public function setWebSiteFiliale($webSiteFiliale)
    {
        $this->web_site_filiale = $webSiteFiliale;

        return $this;
    }

    /**
     * Get webSiteFiliale
     *
     * @return string
     */
    public function getWebSiteFiliale()
    {
        return $this->web_site_filiale;
    }

    /**
     * Set mailTransport
     *
     * @param string $mailTransport
     *
     * @return Pays
     */
    public function setMailTransport($mailTransport)
    {
        $this->mail_transport = $mailTransport;

        return $this;
    }

    /**
     * Get mailTransport
     *
     * @return string
     */
    public function getMailTransport()
    {
        return $this->mail_transport;
    }

    /**
     * Set mailUsername
     *
     * @param string $mailUsername
     *
     * @return Pays
     */
    public function setMailUsername($mailUsername)
    {
        $this->mail_username = $mailUsername;

        return $this;
    }

    /**
     * Get mailUsername
     *
     * @return string
     */
    public function getMailUsername()
    {
        return $this->mail_username;
    }

    /**
     * Set mailPassword
     *
     * @param string $mailPassword
     *
     * @return Pays
     */
    public function setMailPassword($mailPassword)
    {
        $this->mail_password = $mailPassword;

        return $this;
    }

    /**
     * Get mailPassword
     *
     * @return string
     */
    public function getMailPassword()
    {
        return $this->mail_password;
    }

    /**
     * Set mailHost
     *
     * @param string $mailHost
     *
     * @return Pays
     */
    public function setMailHost($mailHost)
    {
        $this->mail_host = $mailHost;

        return $this;
    }

    /**
     * Get mailHost
     *
     * @return string
     */
    public function getMailHost()
    {
        return $this->mail_host;
    }

    /**
     * Set mailPort
     *
     * @param string $mailPort
     *
     * @return Pays
     */
    public function setMailPort($mailPort)
    {
        $this->mail_port = $mailPort;

        return $this;
    }

    /**
     * Get mailPort
     *
     * @return string
     */
    public function getMailPort()
    {
        return $this->mail_port;
    }

    /**
     * Set mailEncryption
     *
     * @param string $mailEncryption
     *
     * @return Pays
     */
    public function setMailEncryption($mailEncryption)
    {
        $this->mail_encryption = $mailEncryption;

        return $this;
    }

    /**
     * Get mailEncryption
     *
     * @return string
     */
    public function getMailEncryption()
    {
        return $this->mail_encryption;
    }

    /**
     * Set mailAuthMode
     *
     * @param string $mailAuthMode
     *
     * @return Pays
     */
    public function setMailAuthMode($mailAuthMode)
    {
        $this->mail_auth_mode = $mailAuthMode;

        return $this;
    }

    /**
     * Get mailAuthMode
     *
     * @return string
     */
    public function getMailAuthMode()
    {
        return $this->mail_auth_mode;
    }

    /**
     * Set webSiteNameFiliale
     *
     * @param string $webSiteNameFiliale
     *
     * @return Pays
     */
    public function setWebSiteNameFiliale($webSiteNameFiliale)
    {
        $this->web_site_name_filiale = $webSiteNameFiliale;

        return $this;
    }

    /**
     * Get webSiteNameFiliale
     *
     * @return string
     */
    public function getWebSiteNameFiliale()
    {
        return $this->web_site_name_filiale;
    }

    /**
     * Add user
     *
     * @param \WebBundle\Entity\Utilisateurs $user
     *
     * @return Pays
     */
    public function addUser(\WebBundle\Entity\Utilisateurs $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \WebBundle\Entity\Utilisateurs $user
     */
    public function removeUser(\WebBundle\Entity\Utilisateurs $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Set webSiteUrlFiliale
     *
     * @param string $webSiteUrlFiliale
     *
     * @return Pays
     */
    public function setWebSiteUrlFiliale($webSiteUrlFiliale)
    {
        $this->web_site_url_filiale = $webSiteUrlFiliale;

        return $this;
    }

    /**
     * Get webSiteUrlFiliale
     *
     * @return string
     */
    public function getWebSiteUrlFiliale()
    {
        return $this->web_site_url_filiale;
    }

    /**
     * Set frontLanguage
     *
     * @param string $frontLanguage
     *
     * @return Pays
     */
    public function setFrontLanguage($frontLanguage)
    {
        $this->front_language = $frontLanguage;

        return $this;
    }

    /**
     * Get frontLanguage
     *
     * @return string
     */
    public function getFrontLanguage()
    {
        return $this->front_language;
    }

    /**
     * Set howToBuyHelp
     *
     * @param string $howToBuyHelp
     *
     * @return Pays
     */
    public function setHowToBuyHelp($howToBuyHelp)
    {
        $this->how_to_buy_help = $howToBuyHelp;

        return $this;
    }

    /**
     * Get howToBuyHelp
     *
     * @return string
     */
    public function getHowToBuyHelp()
    {
        return $this->how_to_buy_help;
    }

    /**
     * Set cguFile
     *
     * @param string $cguFile
     *
     * @return Pays
     */
    public function setCguFile($cguFile)
    {
        $this->cgu_file = $cguFile;

        return $this;
    }

    /**
     * Get cguFile
     *
     * @return string
     */
    public function getCguFile()
    {
        return $this->cgu_file;
    }

    /**
     * Set personelDataFile
     *
     * @param string $personelDataFile
     *
     * @return Pays
     */
    public function setPersonelDataFile($personelDataFile)
    {
        $this->personel_data_file = $personelDataFile;

        return $this;
    }

    /**
     * Get personelDataFile
     *
     * @return string
     */
    public function getPersonelDataFile()
    {
        return $this->personel_data_file;
    }

    /**
     * Set cgvFile
     *
     * @param string $cgvFile
     *
     * @return Pays
     */
    public function setCgvFile($cgvFile)
    {
        $this->cgv_file = $cgvFile;

        return $this;
    }

    /**
     * Get cgvFile
     *
     * @return string
     */
    public function getCgvFile()
    {
        return $this->cgv_file;
    }

    /**
     * Set mentionLegaleFile
     *
     * @param string $mentionLegaleFile
     *
     * @return Pays
     */
    public function setMentionLegaleFile($mentionLegaleFile)
    {
        $this->mention_legale_file = $mentionLegaleFile;

        return $this;
    }

    /**
     * Get mentionLegaleFile
     *
     * @return string
     */
    public function getMentionLegaleFile()
    {
        return $this->mention_legale_file;
    }

    /**
     * Set rapelRgpdText
     *
     * @param string $rapelRgpdText
     *
     * @return Pays
     */
    public function setRapelRgpdText($rapelRgpdText)
    {
        $this->rapel_rgpd_text = $rapelRgpdText;

        return $this;
    }

    /**
     * Get rapelRgpdText
     *
     * @return string
     */
    public function getRapelRgpdText()
    {
        return $this->rapel_rgpd_text;
    }

    /**
     * Set rappelRgpdText
     *
     * @param string $rappelRgpdText
     *
     * @return Pays
     */
    public function setRappelRgpdText($rappelRgpdText)
    {
        $this->rappel_rgpd_text = $rappelRgpdText;

        return $this;
    }

    /**
     * Get rappelRgpdText
     *
     * @return string
     */
    public function getRappelRgpdText()
    {
        return $this->rappel_rgpd_text;
    }

    /**
     * Set cookiesBanner
     *
     * @param string $cookiesBanner
     *
     * @return Pays
     */
    public function setCookiesBanner($cookiesBanner)
    {
        $this->cookies_banner = $cookiesBanner;

        return $this;
    }

    /**
     * Get cookiesBanner
     *
     * @return string
     */
    public function getCookiesBanner()
    {
        return $this->cookies_banner;
    }


    /**
     * Set stationPopupDescription
     *
     * @param string $stationPopupDescription
     *
     * @return Pays
     */
    public function setStationPopupDescription($stationPopupDescription)
    {
        $this->station_popup_description = $stationPopupDescription;

        return $this;
    }

    /**
     * Get stationPopupDescription
     *
     * @return string
     */
    public function getStationPopupDescription()
    {
        return $this->station_popup_description;
    }

    /**
     * Set stationPopupTitle
     *
     * @param string $stationPopupTitle
     *
     * @return Pays
     */
    public function setStationPopupTitle($stationPopupTitle)
    {
        $this->station_popup_title = $stationPopupTitle;

        return $this;
    }

    /**
     * Get stationPopupTitle
     *
     * @return string
     */
    public function getStationPopupTitle()
    {
        return $this->station_popup_title;
    }



    /**
     * Set smsConfirmCommand
     *
     * @param string $smsConfirmCommand
     *
     * @return Pays
     */
    public function setSmsConfirmCommand($smsConfirmCommand)
    {
        $this->smsConfirmCommand = $smsConfirmCommand;

        return $this;
    }



    /**
     * Get smsConfirmCommand
     *
     * @return string
     */
    public function getSmsConfirmCommand()
    {
        return $this->smsConfirmCommand;
    }




    /**
     * Set smsNewCommand
     *
     * @param string $smsNewCommand
     *
     * @return Pays
     */
    public function setSmsNewCommand($smsNewCommand)
    {
        $this->smsNewCommand = $smsNewCommand;

        return $this;
    }



    /**
     * Get smsNewCommand
     *
     * @return string
     */
    public function getSmsNewCommand()
    {
        return $this->smsNewCommand;
    }


    /**
     * Get codePhone
     *
     * @return string
     */
    public function getCodePhone()
    {
        return $this->codePhone;
    }


    /**
     * Set codePhone
     *
     * @param string $codePhone
     *
     * @return Pays
     */
    public function setCodePhone( $codePhone)
    {
        $this->codePhone = $codePhone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailNewCommand()
    {
        return $this->mailNewCommand;
    }

    /**
     * @param mixed $mailNewCommand
     */
    public function setMailNewCommand($mailNewCommand)
    {
        $this->mailNewCommand = $mailNewCommand;
    }

    /**
     * @return mixed
     */
    public function getMailConfirmCommand()
    {
        return $this->mailConfirmCommand;
    }

    /**
     * @param mixed $mailConfirmCommand
     */
    public function setMailConfirmCommand($mailConfirmCommand)
    {
        $this->mailConfirmCommand = $mailConfirmCommand;
    }

    /**
     * @return mixed
     */
    public function getIsActiveMailNewCommand()
    {
        return $this->isActiveMailNewCommand;
    }

    /**
     * @param mixed $isActiveMailNewCommand
     */
    public function setIsActiveMailNewCommand($isActiveMailNewCommand)
    {
        $this->isActiveMailNewCommand = $isActiveMailNewCommand;
    }

    /**
     * @return mixed
     */
    public function getIsActiveMailConfirmCommand()
    {
        return $this->isActiveMailConfirmCommand;
    }

    /**
     * @param mixed $isActiveMailConfirmCommand
     */
    public function setIsActiveMailConfirmCommand($isActiveMailConfirmCommand)
    {
        $this->isActiveMailConfirmCommand = $isActiveMailConfirmCommand;
    }



    /**
     * Set image1
     *
     * @param string $image1
     *
     * @return Pays
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }



    /**
     * Set image2
     *
     * @param string $image2
     *
     * @return Pays
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }





    /**
     * Set image1
     *
     * @param string $image1
     *
     * @return Pays
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }




    /**
     * Set image4
     *
     * @param string $image4
     *
     * @return Pays
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string
     */
    public function getImage4()
    {
        return $this->image4;
    }
}
