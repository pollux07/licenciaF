<?php

namespace DsCorp\Cliente\ClienteBundle\Entity;

/**
 * direccion_cliente
 */
class direccion_cliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var string
     */
    private $numeroExt;

    /**
     * @var string
     */
    private $numeroInt;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var integer
     */
    private $codigoPostal;

    /**
     * @var string
     */
    private $deleMuni;


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
     * Set calle
     *
     * @param string $calle
     *
     * @return direccion_cliente
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numeroExt
     *
     * @param string $numeroExt
     *
     * @return direccion_cliente
     */
    public function setNumeroExt($numeroExt)
    {
        $this->numeroExt = $numeroExt;

        return $this;
    }

    /**
     * Get numeroExt
     *
     * @return string
     */
    public function getNumeroExt()
    {
        return $this->numeroExt;
    }

    /**
     * Set numeroInt
     *
     * @param string $numeroInt
     *
     * @return direccion_cliente
     */
    public function setNumeroInt($numeroInt)
    {
        $this->numeroInt = $numeroInt;

        return $this;
    }

    /**
     * Get numeroInt
     *
     * @return string
     */
    public function getNumeroInt()
    {
        return $this->numeroInt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return direccion_cliente
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     *
     * @return direccion_cliente
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set deleMuni
     *
     * @param string $deleMuni
     *
     * @return direccion_cliente
     */
    public function setDeleMuni($deleMuni)
    {
        $this->deleMuni = $deleMuni;

        return $this;
    }

    /**
     * Get deleMuni
     *
     * @return string
     */
    public function getDeleMuni()
    {
        return $this->deleMuni;
    }
    /**
     * @var \DsCorp\Cliente\ClienteBundle\Entity\cliente
     */
    private $cliente;


    /**
     * Set cliente
     *
     * @param \DsCorp\Cliente\ClienteBundle\Entity\cliente $cliente
     *
     * @return direccion_cliente
     */
    public function setCliente(\DsCorp\Cliente\ClienteBundle\Entity\cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \DsCorp\Cliente\ClienteBundle\Entity\cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
