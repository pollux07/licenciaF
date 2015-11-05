<?php

namespace DsCorp\Fabricante\FabricanteBundle\Entity;

/**
 * direccion_fabricante
 */
class direccion_fabricante
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
     * @return direccion_fabricante
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
     * @return direccion_fabricante
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
     * @return direccion_fabricante
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
     * @return direccion_fabricante
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
     * @return direccion_fabricante
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
     * @return direccion_fabricante
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fabricante;

    /**
     * @var \DsCorp\General\GeneralBundle\Entity\pais
     */
    private $pais;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fabricante = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fabricante
     *
     * @param \DsCorp\Fabricante\FabricanteBundle\Entity\fabricante $fabricante
     *
     * @return direccion_fabricante
     */
    public function addFabricante(\DsCorp\Fabricante\FabricanteBundle\Entity\fabricante $fabricante)
    {
        $this->fabricante[] = $fabricante;

        return $this;
    }

    /**
     * Remove fabricante
     *
     * @param \DsCorp\Fabricante\FabricanteBundle\Entity\fabricante $fabricante
     */
    public function removeFabricante(\DsCorp\Fabricante\FabricanteBundle\Entity\fabricante $fabricante)
    {
        $this->fabricante->removeElement($fabricante);
    }

    /**
     * Get fabricante
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set pais
     *
     * @param \DsCorp\General\GeneralBundle\Entity\pais $pais
     *
     * @return direccion_fabricante
     */
    public function setPais(\DsCorp\General\GeneralBundle\Entity\pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \DsCorp\General\GeneralBundle\Entity\pais
     */
    public function getPais()
    {
        return $this->pais;
    }
}
