<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * FacturaFisicaVentaDetalle
 *
 * @ORM\Table(name="factura_fisica_venta_detalle")
 * @ORM\Entity(repositoryClass="FacturaFisicaVentaDetalleRepository")
 */
class FacturaFisicaVentaDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="facfvd_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facfvdCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_codigo", type="integer", nullable=false)
     */
    private $facfvCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="facfvd_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $facfvdCantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facfvd_fecha", type="date", nullable=false)
     */
    private $facfvdFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_hora", type="string", length=100, nullable=false)
     */
    private $facfvdHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfvd_concepto", type="integer", nullable=false)
     */
    private $facfvdConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_precio_compra", type="string", length=100, nullable=false)
     */
    private $facfvdPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_precio_venta", type="string", length=100, nullable=false)
     */
    private $facfvdPrecioVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_total", type="string", length=100, nullable=false)
     */
    private $facfvdTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_subTotal", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facfvdSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_iva_16", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facfvdIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_iva_10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facfvdIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_iva_5", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facfvdIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facfvdExento;

    /**
     * @var string
     *
     * @ORM\Column(name="facfvd_excluido", type="string", length=11, nullable=true)
     */
    private $facfvdExcluido;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="facfvd_iva_save", type="integer", nullable=true)
     */
    private $facfvdIvaSave;


    /**
     * Get facfvdCodigo
     *
     * @return integer 
     */
    public function getFacfvdCodigo()
    {
        return $this->facfvdCodigo;
    }

    /**
     * Set facfvCodigo
     *
     * @param integer $facfvCodigo
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvCodigo($facfvCodigo)
    {
        $this->facfvCodigo = $facfvCodigo;

        return $this;
    }

    /**
     * Get facfvCodigo
     *
     * @return integer 
     */
    public function getFacfvCodigo()
    {
        return $this->facfvCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return FacturaFisicaVentaDetalle
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
     * Set facfvdCantidad
     *
     * @param float $facfvdCantidad
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdCantidad($facfvdCantidad)
    {
        $this->facfvdCantidad = $facfvdCantidad;

        return $this;
    }

    /**
     * Get facfvdCantidad
     *
     * @return float 
     */
    public function getFacfvdCantidad()
    {
        return $this->facfvdCantidad;
    }

    /**
     * Set facfvdFecha
     *
     * @param \DateTime $facfvdFecha
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdFecha($facfvdFecha)
    {
        $this->facfvdFecha = $facfvdFecha;

        return $this;
    }

    /**
     * Get facfvdFecha
     *
     * @return \DateTime 
     */
    public function getFacfvdFecha()
    {
        return $this->facfvdFecha;
    }

    /**
     * Set facfvdHora
     *
     * @param string $facfvdHora
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdHora($facfvdHora)
    {
        $this->facfvdHora = $facfvdHora;

        return $this;
    }

    /**
     * Get facfvdHora
     *
     * @return string 
     */
    public function getFacfvdHora()
    {
        return $this->facfvdHora;
    }

    /**
     * Set facfvdConcepto
     *
     * @param integer $facfvdConcepto
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdConcepto($facfvdConcepto)
    {
        $this->facfvdConcepto = $facfvdConcepto;

        return $this;
    }

    /**
     * Get facfvdConcepto
     *
     * @return integer 
     */
    public function getFacfvdConcepto()
    {
        return $this->facfvdConcepto;
    }

    /**
     * Set facfvdPrecioCompra
     *
     * @param string $facfvdPrecioCompra
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdPrecioCompra($facfvdPrecioCompra)
    {
        $this->facfvdPrecioCompra = $facfvdPrecioCompra;

        return $this;
    }

    /**
     * Get facfvdPrecioCompra
     *
     * @return string 
     */
    public function getFacfvdPrecioCompra()
    {
        return $this->facfvdPrecioCompra;
    }

    /**
     * Set facfvdPrecioVenta
     *
     * @param string $facfvdPrecioVenta
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdPrecioVenta($facfvdPrecioVenta)
    {
        $this->facfvdPrecioVenta = $facfvdPrecioVenta;

        return $this;
    }

    /**
     * Get facfvdPrecioVenta
     *
     * @return string 
     */
    public function getFacfvdPrecioVenta()
    {
        return $this->facfvdPrecioVenta;
    }

    /**
     * Set facfvdTotal
     *
     * @param string $facfvdTotal
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdTotal($facfvdTotal)
    {
        $this->facfvdTotal = $facfvdTotal;

        return $this;
    }

    /**
     * Get facfvdTotal
     *
     * @return string 
     */
    public function getFacfvdTotal()
    {
        return $this->facfvdTotal;
    }

    /**
     * Set facfvdSubtotal
     *
     * @param string $facfvdSubtotal
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdSubtotal($facfvdSubtotal)
    {
        $this->facfvdSubtotal = $facfvdSubtotal;

        return $this;
    }

    /**
     * Get facfvdSubtotal
     *
     * @return string 
     */
    public function getFacfvdSubtotal()
    {
        return $this->facfvdSubtotal;
    }

    /**
     * Set facfvdIva16
     *
     * @param string $facfvdIva16
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdIva16($facfvdIva16)
    {
        $this->facfvdIva16 = $facfvdIva16;

        return $this;
    }

    /**
     * Get facfvdIva16
     *
     * @return string 
     */
    public function getFacfvdIva16()
    {
        return $this->facfvdIva16;
    }

    /**
     * Set facfvdIva10
     *
     * @param string $facfvdIva10
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdIva10($facfvdIva10)
    {
        $this->facfvdIva10 = $facfvdIva10;

        return $this;
    }

    /**
     * Get facfvdIva10
     *
     * @return string 
     */
    public function getFacfvdIva10()
    {
        return $this->facfvdIva10;
    }

    /**
     * Set facfvdIva5
     *
     * @param string $facfvdIva5
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdIva5($facfvdIva5)
    {
        $this->facfvdIva5 = $facfvdIva5;

        return $this;
    }

    /**
     * Get facfvdIva5
     *
     * @return string 
     */
    public function getFacfvdIva5()
    {
        return $this->facfvdIva5;
    }

    /**
     * Set facfvdExento
     *
     * @param string $facfvdExento
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdExento($facfvdExento)
    {
        $this->facfvdExento = $facfvdExento;

        return $this;
    }

    /**
     * Get facfvdExento
     *
     * @return string 
     */
    public function getFacfvdExento()
    {
        return $this->facfvdExento;
    }

    /**
     * Set facfvdExcluido
     *
     * @param string $facfvdExcluido
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdExcluido($facfvdExcluido)
    {
        $this->facfvdExcluido = $facfvdExcluido;

        return $this;
    }

    /**
     * Get facfvdExcluido
     *
     * @return string 
     */
    public function getFacfvdExcluido()
    {
        return $this->facfvdExcluido;
    }
    
    /**
     * Set facfvdIvaSave
     *
     * @param integer $facfvdIvaSave
     * @return FacturaFisicaVentaDetalle
     */
    public function setFacfvdIvaSave($facfvdIvaSave)
    {
        $this->facfvdIvaSave = $facfvdIvaSave;

        return $this;
    }

    /**
     * Get facfvdIvaSave
     *
     * @return integer 
     */
    public function getFacfvdIvaSave()
    {
        return $this->facfvdIvaSave;
    }
}
