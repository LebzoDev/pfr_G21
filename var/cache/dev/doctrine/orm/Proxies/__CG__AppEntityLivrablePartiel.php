<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LivrablePartiel extends \App\Entity\LivrablePartiel implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'id', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'delai', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'description', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'type', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'nombreRendu', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'nombreCorrige', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'apprenants', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'brief'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'id', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'delai', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'description', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'type', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'nombreRendu', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'nombreCorrige', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'apprenants', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\LivrablePartiel' . "\0" . 'brief'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LivrablePartiel $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function getLibelle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', []);

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle(string $libelle): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', [$libelle]);

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelai(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelai', []);

        return parent::getDelai();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelai(\DateTimeInterface $delai): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelai', [$delai]);

        return parent::setDelai($delai);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreRendu(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreRendu', []);

        return parent::getNombreRendu();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreRendu(?int $nombreRendu): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreRendu', [$nombreRendu]);

        return parent::setNombreRendu($nombreRendu);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreCorrige(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreCorrige', []);

        return parent::getNombreCorrige();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreCorrige(?int $nombreCorrige): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreCorrige', [$nombreCorrige]);

        return parent::setNombreCorrige($nombreCorrige);
    }

    /**
     * {@inheritDoc}
     */
    public function getApprenants(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprenants', []);

        return parent::getApprenants();
    }

    /**
     * {@inheritDoc}
     */
    public function addApprenant(\App\Entity\ApprenantLivrablePartiel $apprenant): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApprenant', [$apprenant]);

        return parent::addApprenant($apprenant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApprenant(\App\Entity\ApprenantLivrablePartiel $apprenant): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApprenant', [$apprenant]);

        return parent::removeApprenant($apprenant);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau(): ?\App\Entity\Niveau
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau(?\App\Entity\Niveau $niveau): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', [$niveau]);

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrief(): ?\App\Entity\Brief
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrief', []);

        return parent::getBrief();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrief(?\App\Entity\Brief $brief): \App\Entity\LivrablePartiel
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrief', [$brief]);

        return parent::setBrief($brief);
    }

}
