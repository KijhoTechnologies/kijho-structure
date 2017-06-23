<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * RegaloEntrada
 *
 * @ORM\Table(name="regalo_entrada")
 * @ORM\Entity(repositoryClass="RegaloEntradaRepository")
 */
class RegaloEntrada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reen_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reenCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prre_codigo", type="integer", nullable=false)
     */
    private $prreCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="reen_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $reenCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="reen_costo_unit", type="integer", nullable=false)
     */
    private $reenCostoUnit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reen_fecha", type="date", nullable=false)
     */
    private $reenFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="reen_hora", type="string", length=100, nullable=false)
     */
    private $reenHora;


    /**
     * Get reenCodigo
     *
     * @return integer 
     */
    public function getReenCodigo()
    {
        return $this->reenCodigo;
    }

    /**
     * Set prreCodigo
     *
     * @param integer $prreCodigo
     * @return RegaloEntrada
     */
    public function setPrreCodigo($prreCodigo)
    {
        $this->prreCodigo = $prreCodigo;

        return $this;
    }

    /**
     * Get prreCodigo
     *
     * @return integer 
     */
    public function getPrreCodigo()
    {
        return $this->prreCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return RegaloEntrada
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
     * Set reenCantidad
     *
     * @param float $reenCantidad
     * @return RegaloEntrada
     */
    public function setReenCantidad($reenCantidad)
    {
        $this->reenCantidad = $reenCantidad;

        return $this;
    }

    /**
     * Get reenCantidad
     *
     * @return float 
     */
    public function getReenCantidad()
    {
        return $this->reenCantidad;
    }

    /**
     * Set reenCostoUnit
     *
     * @param integer $reenCostoUnit
     * @return RegaloEntrada
     */
    public function setReenCostoUnit($reenCostoUnit)
    {
        $this->reenCostoUnit = $reenCostoUnit;

        return $this;
    }

    /**
     * Get reenCostoUnit
     *
     * @return integer 
     */
    public function getReenCostoUnit()
    {
        return $this->reenCostoUnit;
    }

    /**
     * Set reenFecha
     *
     * @param \DateTime $reenFecha
     * @return RegaloEntrada
     */
    public function setReenFecha($reenFecha)
    {
        $this->reenFecha = $reenFecha;

        return $this;
    }

    /**
     * Get reenFecha
     *
     * @return \DateTime 
     */
    public function getReenFecha()
    {
        return $this->reenFecha;
    }

    /**
     * Set reenHora
     *
     * @param string $reenHora
     * @return RegaloEntrada
     */
    public function setReenHora($reenHora)
    {
        $this->reenHora = $reenHora;

        return $this;
    }

    /**
     * Get reenHora
     *
     * @return string 
     */
    public function getReenHora()
    {
        return $this->reenHora;
    }
}
