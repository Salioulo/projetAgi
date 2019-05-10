<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entreprise extends \App\Entity\Entreprise implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'ninea', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'raisonSociale', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'fixe', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'mobile', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'typeEntreprise', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'disponibilite', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'actif', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'secteur', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'createdBy', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'updatedBy', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'nom'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'ninea', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'raisonSociale', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'fixe', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'mobile', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'typeEntreprise', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'disponibilite', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'actif', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'secteur', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'createdBy', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'updatedBy', '' . "\0" . 'App\\Entity\\Entreprise' . "\0" . 'nom'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entreprise $proxy) {
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
    public function getId(): ?int
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
    public function getNinea(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNinea', []);

        return parent::getNinea();
    }

    /**
     * {@inheritDoc}
     */
    public function setNinea(?string $ninea): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNinea', [$ninea]);

        return parent::setNinea($ninea);
    }

    /**
     * {@inheritDoc}
     */
    public function getRaisonSociale(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRaisonSociale', []);

        return parent::getRaisonSociale();
    }

    /**
     * {@inheritDoc}
     */
    public function setRaisonSociale(?string $raisonSociale): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRaisonSociale', [$raisonSociale]);

        return parent::setRaisonSociale($raisonSociale);
    }

    /**
     * {@inheritDoc}
     */
    public function getFixe(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFixe', []);

        return parent::getFixe();
    }

    /**
     * {@inheritDoc}
     */
    public function setFixe(string $fixe): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFixe', [$fixe]);

        return parent::setFixe($fixe);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', []);

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile(string $mobile): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', [$mobile]);

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?string $email): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeEntreprise(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeEntreprise', []);

        return parent::getTypeEntreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeEntreprise(string $typeEntreprise): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeEntreprise', [$typeEntreprise]);

        return parent::setTypeEntreprise($typeEntreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisponibilite(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisponibilite', []);

        return parent::getDisponibilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponibilite(bool $disponibilite): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponibilite', [$disponibilite]);

        return parent::setDisponibilite($disponibilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getActif(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActif', []);

        return parent::getActif();
    }

    /**
     * {@inheritDoc}
     */
    public function setActif(bool $actif): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActif', [$actif]);

        return parent::setActif($actif);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecteur(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecteur', []);

        return parent::getSecteur();
    }

    /**
     * {@inheritDoc}
     */
    public function addSecteur(\App\Entity\Secteur $secteur): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSecteur', [$secteur]);

        return parent::addSecteur($secteur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSecteur(\App\Entity\Secteur $secteur): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSecteur', [$secteur]);

        return parent::removeSecteur($secteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(?string $createdBy): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy(?string $updatedBy): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Entreprise
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

}