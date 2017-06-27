<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * CuadreDetalle
 *
 * @ORM\Table(name="cuadre_detalle")
 * @ORM\Entity(repositoryClass="CuadreDetalleRepository")
 */
class CuadreDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cuadet_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cuadetCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cua_codigo", type="integer", nullable=false)
     */
    private $cuaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_costo", type="integer", nullable=false)
     */
    private $prodCosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_precio", type="integer", nullable=false)
     */
    private $prodPrecio;

    /**
     * @var float
     *
     * @ORM\Column(name="cuadet_cant_entrega", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuadetCantEntrega;

    /**
     * @var float
     *
     * @ORM\Column(name="cuadet_cant_devuelve", type="float", precision=10, scale=0, nullable=false)
     */
    private $cuadetCantDevuelve;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuadet_total", type="integer", nullable=false)
     */
    private $cuadetTotal;


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
     * Set cuaCodigo
     *
     * @param integer $cuaCodigo
     * @return CuadreDetalle
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
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return CuadreDetalle
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
     * Set prodCosto
     *
     * @param integer $prodCosto
     * @return CuadreDetalle
     */
    public function setProdCosto($prodCosto)
    {
        $this->prodCosto = $prodCosto;

        return $this;
    }

    /**
     * Get prodCosto
     *
     * @return integer 
     */
    public function getProdCosto()
    {
        return $this->prodCosto;
    }

    /**
     * Set prodPrecio
     *
     * @param integer $prodPrecio
     * @return CuadreDetalle
     */
    public function setProdPrecio($prodPrecio)
    {
        $this->prodPrecio = $prodPrecio;

        return $this;
    }

    /**
     * Get prodPrecio
     *
     * @return integer 
     */
    public function getProdPrecio()
    {
        return $this->prodPrecio;
    }

    /**
     * Set cuadetCantEntrega
     *
     * @param float $cuadetCantEntrega
     * @return CuadreDetalle
     */
    public function setCuadetCantEntrega($cuadetCantEntrega)
    {
        $this->cuadetCantEntrega = $cuadetCantEntrega;

        return $this;
    }

    /**
     * Get cuadetCantEntrega
     *
     * @return float 
     */
    public function getCuadetCantEntrega()
    {
        return $this->cuadetCantEntrega;
    }

    /**
     * Set cuadetCantDevuelve
     *
     * @param float $cuadetCantDevuelve
     * @return CuadreDetalle
     */
    public function setCuadetCantDevuelve($cuadetCantDevuelve)
    {
        $this->cuadetCantDevuelve = $cuadetCantDevuelve;

        return $this;
    }

    /**
     * Get cuadetCantDevuelve
     *
     * @return float 
     */
    public function getCuadetCantDevuelve()
    {
        return $this->cuadetCantDevuelve;
    }

    /**
     * Set cuadetTotal
     *
     * @param integer $cuadetTotal
     * @return CuadreDetalle
     */
    public function setCuadetTotal($cuadetTotal)
    {
        $this->cuadetTotal = $cuadetTotal;

        return $this;
    }

    /**
     * Get cuadetTotal
     *
     * @return integer 
     */
    public function getCuadetTotal()
    {
        return $this->cuadetTotal;
    }
}
