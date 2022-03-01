<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Restaurant extends \App\Entity\Restaurant implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'id_restaurant', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'nom_restaurant', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'desc_restaurant', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'capacite', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'num_tel', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'specialite', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'offreTravail'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'id_restaurant', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'nom_restaurant', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'desc_restaurant', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'capacite', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'num_tel', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'specialite', '' . "\0" . 'App\\Entity\\Restaurant' . "\0" . 'offreTravail'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Restaurant $proxy) {
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
    public function getIdRestaurant(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdRestaurant', []);

        return parent::getIdRestaurant();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomRestaurant(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomRestaurant', []);

        return parent::getNomRestaurant();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomRestaurant(string $nom_restaurant): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomRestaurant', [$nom_restaurant]);

        return parent::setNomRestaurant($nom_restaurant);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescRestaurant(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescRestaurant', []);

        return parent::getDescRestaurant();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescRestaurant(string $desc_restaurant): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescRestaurant', [$desc_restaurant]);

        return parent::setDescRestaurant($desc_restaurant);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacite(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacite', []);

        return parent::getCapacite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacite(int $capacite): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacite', [$capacite]);

        return parent::setCapacite($capacite);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumTel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumTel', []);

        return parent::getNumTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumTel(?string $num_tel): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumTel', [$num_tel]);

        return parent::setNumTel($num_tel);
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
    public function setAdresse(?string $adresse): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialite(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialite', []);

        return parent::getSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialite(?string $specialite): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialite', [$specialite]);

        return parent::setSpecialite($specialite);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffreTravail(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffreTravail', []);

        return parent::getOffreTravail();
    }

    /**
     * {@inheritDoc}
     */
    public function addOffreTravail(\App\Entity\OffreTravail $offreTravail): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOffreTravail', [$offreTravail]);

        return parent::addOffreTravail($offreTravail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOffreTravail(\App\Entity\OffreTravail $offreTravail): \App\Entity\Restaurant
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOffreTravail', [$offreTravail]);

        return parent::removeOffreTravail($offreTravail);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
