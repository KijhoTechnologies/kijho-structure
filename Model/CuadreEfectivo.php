<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * CuadreEfectivo
 *
 * @ORM\Table(name="cuadre_efectivo")
 * @ORM\Entity
 */
class CuadreEfectivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cuaef_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuaefCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cua_codigo", type="integer", nullable=false)
     */
    private $cuaCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="cuaef_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuaefCantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cuaef_fecha", type="datetime", nullable=false)
     */
    private $cuaefFecha;


    /**
     * Get cuaefCodigo
     *
     * @return integer 
     */
    public function getCuaefCodigo()
    {
        return $this->cuaefCodigo;
    }

    /**
     * Set cuaCodigo
     *
     * @param integer $cuaCodigo
     * @return CuadreEfectivo
     */
    public function setCuaCodigo($cuaCodigo)
    {
        $this->cuaCodigo = $cuaCodigo;

        return $this;
    }

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
     * Set cuaefCantidad
     *
     * @param float $cuaefCantidad
     * @return CuadreEfectivo
     */
    public function setCuaefCantidad($cuaefCantidad)
    {
        $this->cuaefCantidad = $cuaefCantidad;

        return $this;
    }

    /**
     * Get cuaefCantidad
     *
     * @return float 
     */
    public function getCuaefCantidad()
    {
        return $this->cuaefCantidad;
    }

    /**
     * Set cuaefFecha
     *
     * @param \DateTime $cuaefFecha
     * @return CuadreEfectivo
     */
    public function setCuaefFecha($cuaefFecha)
    {
        $this->cuaefFecha = $cuaefFecha;

        return $this;
    }

    /**
     * Get cuaefFecha
     *
     * @return \DateTime 
     */
    public function getCuaefFecha()
    {
        return $this->cuaefFecha;
    }
}
