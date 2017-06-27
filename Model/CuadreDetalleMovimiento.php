<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * CuadreDetalleMovimiento
 *
 * @ORM\Table(name="cuadre_detalle_movimiento")
 * @ORM\Entity
 */
class CuadreDetalleMovimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cuadetmov_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuadetmovCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuadet_codigo", type="integer", nullable=false)
     */
    private $cuadetCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cuadetmov_tipo", type="string", nullable=false)
     */
    private $cuadetmovTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="cuadetmov_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuadetmovCantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cuadetmov_fecha", type="datetime", nullable=false)
     */
    private $cuadetmovFecha;


    /**
     * Get cuadetmovCodigo
     *
     * @return integer 
     */
    public function getCuadetmovCodigo()
    {
        return $this->cuadetmovCodigo;
    }

    /**
     * Set cuadetCodigo
     *
     * @param integer $cuadetCodigo
     * @return CuadreDetalleMovimiento
     */
    public function setCuadetCodigo($cuadetCodigo)
    {
        $this->cuadetCodigo = $cuadetCodigo;

        return $this;
    }

    /**
     * Get cuadetCodigo
     *
     * @return integer 
     */
    public function getCuadetCodigo()
    {
        return $this->cuadetCodigo;
    }

    /**
     * Set cuadetmovTipo
     *
     * @param string $cuadetmovTipo
     * @return CuadreDetalleMovimiento
     */
    public function setCuadetmovTipo($cuadetmovTipo)
    {
        $this->cuadetmovTipo = $cuadetmovTipo;

        return $this;
    }

    /**
     * Get cuadetmovTipo
     *
     * @return string 
     */
    public function getCuadetmovTipo()
    {
        return $this->cuadetmovTipo;
    }

    /**
     * Set cuadetmovCantidad
     *
     * @param float $cuadetmovCantidad
     * @return CuadreDetalleMovimiento
     */
    public function setCuadetmovCantidad($cuadetmovCantidad)
    {
        $this->cuadetmovCantidad = $cuadetmovCantidad;

        return $this;
    }

    /**
     * Get cuadetmovCantidad
     *
     * @return float 
     */
    public function getCuadetmovCantidad()
    {
        return $this->cuadetmovCantidad;
    }

    /**
     * Set cuadetmovFecha
     *
     * @param \DateTime $cuadetmovFecha
     * @return CuadreDetalleMovimiento
     */
    public function setCuadetmovFecha($cuadetmovFecha)
    {
        $this->cuadetmovFecha = $cuadetmovFecha;

        return $this;
    }

    /**
     * Get cuadetmovFecha
     *
     * @return \DateTime 
     */
    public function getCuadetmovFecha()
    {
        return $this->cuadetmovFecha;
    }
}
