<?php

namespace Proxies\__CG__\uni\bundle\marcaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class noticias extends \uni\bundle\marcaBundle\Entity\noticias implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'id', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'titulo', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'contenido', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'foto', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'autor', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'fechaPub', 'categoria', 'notcoms', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'notanun');
        }

        return array('__isInitialized__', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'id', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'titulo', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'contenido', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'foto', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'autor', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'fechaPub', 'categoria', 'notcoms', '' . "\0" . 'uni\\bundle\\marcaBundle\\Entity\\noticias' . "\0" . 'notanun');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (noticias $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenido($contenido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenido', array($contenido));

        return parent::setContenido($contenido);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenido', array());

        return parent::getContenido();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoto($foto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoto', array($foto));

        return parent::setFoto($foto);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoto', array());

        return parent::getFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutor($autor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutor', array($autor));

        return parent::setAutor($autor);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutor', array());

        return parent::getAutor();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaPub($fechaPub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaPub', array($fechaPub));

        return parent::setFechaPub($fechaPub);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaPub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaPub', array());

        return parent::getFechaPub();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoria(\uni\bundle\marcaBundle\Entity\categorias $categoria = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoria', array($categoria));

        return parent::setCategoria($categoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoria', array());

        return parent::getCategoria();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotcom(\uni\bundle\marcaBundle\Entity\comentarios $notcoms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotcom', array($notcoms));

        return parent::addNotcom($notcoms);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotcom(\uni\bundle\marcaBundle\Entity\comentarios $notcoms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotcom', array($notcoms));

        return parent::removeNotcom($notcoms);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotcoms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotcoms', array());

        return parent::getNotcoms();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotanun(\uni\bundle\marcaBundle\Entity\anuncios $notanun)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotanun', array($notanun));

        return parent::addNotanun($notanun);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotanun(\uni\bundle\marcaBundle\Entity\anuncios $notanun)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotanun', array($notanun));

        return parent::removeNotanun($notanun);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotanun()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotanun', array());

        return parent::getNotanun();
    }

}