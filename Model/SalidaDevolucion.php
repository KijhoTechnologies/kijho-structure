<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * SalidaDevolucion
 *
 * @ORM\Table(name="salida_devolucion")
 * @ORM\Entity(repositoryClass="SalidaDevolucionRepository")
 */
class SalidaDevolucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sade_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sadeCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="dev_codigo", type="integer", nullable=false)
     */
    private $devCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="sade_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $sadeCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="sade_costo_unit", type="string", length=100, nullable=false)
     */
    private $sadeCostoUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="sade_total", type="string", length=100, nullable=false)
     */
    private $sadeTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sade_fecha", type="date", nullable=false)
     */
    private $sadeFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="sade_hora", type="string", length=100, nullable=false)
     */
    private $sadeHora;


    /**
     * Get sadeCodigo
     *
     * @return integer 
     */
    public function getSadeCodigo()
    {
        return $this->sadeCodigo;
    }

    /**
     * Set devCodigo
     *
     * @param integer $devCodigo
     * @return SalidaDevolucion
     */
    public function setDevCodigo($devCodigo)
    {
        $this->devCodigo = $devCodigo;

        return $this;
    }

    /**
     * Get devCodigo
     *
     * @return integer 
     */
    public function getDevCodigo()
    {
        return $this->devCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return SalidaDevolucion
     */
    public function setProdCodigo($prodCodigo)
    {
        $this->prodCodigo = $prodCodigo;

        return $this;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProdCodigo()
    {
        return $this->prodCodigo;
    }

    /**
     * Set sadeCantidad
     *
     * @param float $sadeCantidad
     * @return SalidaDevolucion
     */
    public function setSadeCantidad($sadeCantidad)
    {
        $this->sadeCantidad = $sadeCantidad;

        return $this;
    }

    /**
     * Get sadeCantidad
     *
     * @return float 
     */
    public function getSadeCantidad()
    {
        return $this->sadeCantidad;
    }

    /**
     * Set sadeCostoUnit
     *
     * @param string $sadeCostoUnit
     * @return SalidaDevolucion
     */
    public function setSadeCostoUnit($sadeCostoUnit)
    {
        $this->sadeCostoUnit = $sadeCostoUnit;

        return $this;
    }

    /**
     * Get sadeCostoUnit
     *
     * @return string 
     */
    public function getSadeCostoUnit()
    {
        return $this->sadeCostoUnit;
    }

    /**
     * Set sadeTotal
     *
     * @param string $sadeTotal
     * @return SalidaDevolucion
     */
    public function setSadeTotal($sadeTotal)
    {
        $this->sadeTotal = $sadeTotal;

        return $this;
    }

    /**
     * Get sadeTotal
     *
     * @return string 
     */
    public function getSadeTotal()
    {
        return $this->sadeTotal;
    }

    /**
     * Set sadeFecha
     *
     * @param \DateTime $sadeFecha
     * @return SalidaDevolucion
     */
    public function setSadeFecha($sadeFecha)
    {
        $this->sadeFecha = $sadeFecha;

        return $this;
    }

    /**
     * Get sadeFecha
     *
     * @return \DateTime 
     */
    public function getSadeFecha()
    {
        return $this->sadeFecha;
    }

    /**
     * Set sadeHora
     *
     * @param string $sadeHora
     * @return SalidaDevolucion
     */
    public function setSadeHora($sadeHora)
    {
        $this->sadeHora = $sadeHora;

        return $this;
    }

    /**
     * Get sadeHora
     *
     * @return string 
     */
    public function getSadeHora()
    {
        return $this->sadeHora;
    }
}
