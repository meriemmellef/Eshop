<?php

namespace Proxies\__CG__\WebBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Station extends \WebBundle\Entity\Station implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'id', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'nom', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'adresse', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'zone', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'heure_debut', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'heure_fin', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'pays', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'gerant', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'produits', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'commandes', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'createdAt', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'updatedAt', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isActive', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isDeleted', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'horaires', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isOpen', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'file_vente', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isDelivered', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'prixLivraison', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'minprixLivraison', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'tel', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'latitude', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'longitude'];
        }

        return ['__isInitialized__', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'id', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'nom', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'adresse', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'zone', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'heure_debut', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'heure_fin', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'pays', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'gerant', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'produits', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'commandes', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'createdAt', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'updatedAt', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isActive', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isDeleted', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'horaires', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isOpen', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'file_vente', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'isDelivered', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'prixLivraison', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'minprixLivraison', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'tel', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'latitude', '' . "\0" . 'WebBundle\\Entity\\Station' . "\0" . 'longitude'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Station $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getHoraireFromIndex($i)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoraireFromIndex', [$i]);

        return parent::getHoraireFromIndex($i);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(\WebBundle\Entity\Pays $pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getGerant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGerant', []);

        return parent::getGerant();
    }

    /**
     * {@inheritDoc}
     */
    public function setGerant($gerant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGerant', [$gerant]);

        return parent::setGerant($gerant);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduits', []);

        return parent::getProduits();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\WebBundle\Entity\Produits $produit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', [$produit]);

        return parent::addProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeproduits(\WebBundle\Entity\Produits $produit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeproduits', [$produit]);

        return parent::removeproduits($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommandes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommandes', []);

        return parent::getCommandes();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommande(\WebBundle\Entity\Commandes $commande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommande', [$commande]);

        return parent::addCommande($commande);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommande(\WebBundle\Entity\Commandes $commande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommande', [$commande]);

        return parent::removeCommande($commande);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDeleted', []);

        return parent::getIsDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDeleted($isDeleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDeleted', [$isDeleted]);

        return parent::setIsDeleted($isDeleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureDebut', []);

        return parent::getHeureDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureDebut($heure_debut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureDebut', [$heure_debut]);

        return parent::setHeureDebut($heure_debut);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureFin', []);

        return parent::getHeureFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureFin($heure_fin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureFin', [$heure_fin]);

        return parent::setHeureFin($heure_fin);
    }

    /**
     * {@inheritDoc}
     */
    public function addHoraire($horaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHoraire', [$horaire]);

        return parent::addHoraire($horaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getHoraires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoraires', []);

        return parent::getHoraires();
    }

    /**
     * {@inheritDoc}
     */
    public function removeHoraire($horaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHoraire', [$horaire]);

        return parent::removeHoraire($horaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsOpen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsOpen', []);

        return parent::getIsOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsOpen($isOpen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsOpen', [$isOpen]);

        return parent::setIsOpen($isOpen);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileVente(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileVente', []);

        return parent::getFileVente();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileVente(string $file_vente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileVente', [$file_vente]);

        return parent::setFileVente($file_vente);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDelivered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDelivered', []);

        return parent::getIsDelivered();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDelivered($isDelivered)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDelivered', [$isDelivered]);

        return parent::setIsDelivered($isDelivered);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixLivraison(): float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixLivraison', []);

        return parent::getPrixLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixLivraison(float $prixLivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixLivraison', [$prixLivraison]);

        return parent::setPrixLivraison($prixLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinprixLivraison()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinprixLivraison', []);

        return parent::getMinprixLivraison();
    }

    /**
     * {@inheritDoc}
     */
    public function setMinprixLivraison($minprixLivraison)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMinprixLivraison', [$minprixLivraison]);

        return parent::setMinprixLivraison($minprixLivraison);
    }

    /**
     * {@inheritDoc}
     */
    public function setHoraires($horaires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoraires', [$horaires]);

        return parent::setHoraires($horaires);
    }

    /**
     * {@inheritDoc}
     */
    public function setZone(\WebBundle\Entity\Zone $zone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZone', [$zone]);

        return parent::setZone($zone);
    }

    /**
     * {@inheritDoc}
     */
    public function getZone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZone', []);

        return parent::getZone();
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\WebBundle\Entity\Produits $produit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', [$produit]);

        return parent::removeProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function addGerant(\WebBundle\Entity\Utilisateurs $gerant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGerant', [$gerant]);

        return parent::addGerant($gerant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGerant(\WebBundle\Entity\Utilisateurs $gerant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGerant', [$gerant]);

        return parent::removeGerant($gerant);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

}
