<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * ProductoEliminadoVenta
 *
 * @ORM\Table(name="producto_eliminado_venta")
 * @ORM\Entity
 */
class ProductoEliminadoVenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pev_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pevCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pev_fecha", type="date", nullable=true)
     */
    private $pevFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="pev_hora", type="string", length=100, nullable=true)
     */
    private $pevHora;

    /**
     * @var string
     *
     * @ORM\Column(name="pev_prod_venta_unit", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $pevProdVentaUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="pev_prod_cantidad", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $pevProdCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="pev_session_venta", type="integer", nullable=true)
     */
    private $pevSessionVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_codigo", type="integer", nullable=false)
     */
    private $facvCodigo;


    /**
     * Get pevCodigo
     *
     * @return integer 
     */
    public function getPevCodigo()
    {
        return $this->pevCodigo;
    }

    /**
     * Set pevFecha
     *
     * @param \DateTime $pevFecha
     * @return ProductoEliminadoVenta
     */
    public function setPevFecha($pevFecha)
    {
        $this->pevFecha = $pevFecha;

        return $this;
    }

    /**
     * Get pevFecha
     *
     * @return \DateTime 
     */
    public function getPevFecha()
    {
        return $this->pevFecha;
    }

    /**
     * Set pevHora
     *
     * @param string $pevHora
     * @return ProductoEliminadoVenta
     */
    public function setPevHora($pevHora)
    {
        $this->pevHora = $pevHora;

        return $this;
    }

    /**
     * Get pevHora
     *
     * @return string 
     */
    public function getPevHora()
    {
        return $this->pevHora;
    }

    /**
     * Set pevProdVentaUnit
     *
     * @param string $pevProdVentaUnit
     * @return ProductoEliminadoVenta
     */
    public function setPevProdVentaUnit($pevProdVentaUnit)
    {
        $this->pevProdVentaUnit = $pevProdVentaUnit;

        return $this;
    }

    /**
     * Get pevProdVentaUnit
     *
     * @return string 
     */
    public function getPevProdVentaUnit()
    {
        return $this->pevProdVentaUnit;
    }

    /**
     * Set pevProdCantidad
     *
     * @param string $pevProdCantidad
     * @return ProductoEliminadoVenta
     */
    public function setPevProdCantidad($pevProdCantidad)
    {
        $this->pevProdCantidad = $pevProdCantidad;

        return $this;
    }

    /**
     * Get pevProdCantidad
     *
     * @return string 
     */
    public function getPevProdCantidad()
    {
        return $this->pevProdCantidad;
    }

    /**
     * Set pevSessionVenta
     *
     * @param integer $pevSessionVenta
     * @return ProductoEliminadoVenta
     */
    public function setPevSessionVenta($pevSessionVenta)
    {
        $this->pevSessionVenta = $pevSessionVenta;

        return $this;
    }

    /**
     * Get pevSessionVenta
     *
     * @return integer 
     */
    public function getPevSessionVenta()
    {
        return $this->pevSessionVenta;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return ProductoEliminadoVenta
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
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return ProductoEliminadoVenta
     */
    public function setUsuCodigo($usuCodigo)
    {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo()
    {
        return $this->usuCodigo;
    }

    /**
     * Set facvCodigo
     *
     * @param integer $facvCodigo
     * @return ProductoEliminadoVenta
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
