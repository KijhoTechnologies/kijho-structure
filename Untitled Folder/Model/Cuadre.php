<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Cuadre
 *
 * @ORM\Table(name="cuadre")
 * @ORM\Entity
 */
class Cuadre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cua_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cua_fecha", type="date", nullable=false)
     */
    private $cuaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cua_hora", type="string", length=100, nullable=false)
     */
    private $cuaHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="cua_total", type="integer", nullable=false)
     */
    private $cuaTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="cua_efectivo", type="integer", nullable=false)
     */
    private $cuaEfectivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_codigo", type="integer", nullable=true)
     */
    private $facvCodigo;


    /**
     * Get cuaCodigo
     *
     * @return integer 
     */
    public function getCuaCodigo()
    {
        return $this->cuaCodigo;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return Cuadre
     */
    public function setCliCodigo($cliCodigo)
    {
        $this->cliCodigo = $cliCodigo;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo()
    {
        return $this->cliCodigo;
    }

    /**
     * Set cuaFecha
     *
     * @param \DateTime $cuaFecha
     * @return Cuadre
     */
    public function setCuaFecha($cuaFecha)
    {
        $this->cuaFecha = $cuaFecha;

        return $this;
    }

    /**
     * Get cuaFecha
     *
     * @return \DateTime 
     */
    public function getCuaFecha()
    {
        return $this->cuaFecha;
    }

    /**
     * Set cuaHora
     *
     * @param string $cuaHora
     * @return Cuadre
     */
    public function setCuaHora($cuaHora)
    {
        $this->cuaHora = $cuaHora;

        return $this;
    }

    /**
     * Get cuaHora
     *
     * @return string 
     */
    public function getCuaHora()
    {
        return $this->cuaHora;
    }

    /**
     * Set cuaTotal
     *
     * @param integer $cuaTotal
     * @return Cuadre
     */
    public function setCuaTotal($cuaTotal)
    {
        $this->cuaTotal = $cuaTotal;

        return $this;
    }

    /**
     * Get cuaTotal
     *
     * @return integer 
     */
    public function getCuaTotal()
    {
        return $this->cuaTotal;
    }

    /**
     * Set cuaEfectivo
     *
     * @param integer $cuaEfectivo
     * @return Cuadre
     */
    public function setCuaEfectivo($cuaEfectivo)
    {
        $this->cuaEfectivo = $cuaEfectivo;

        return $this;
    }

    /**
     * Get cuaEfectivo
     *
     * @return integer 
     */
    public function getCuaEfectivo()
    {
        return $this->cuaEfectivo;
    }

    /**
     * Set facvCodigo
     *
     * @param integer $facvCodigo
     * @return Cuadre
     */
    public function setFacvCodigo($facvCodigo)
    {
        $this->facvCodigo = $facvCodigo;

        return $this;
    }

    /**
     * Get facvCodigo
     *
     * @return integer 
     */
    public function getFacvCodigo()
    {
        return $this->facvCodigo;
    }
}
