<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * CotizacionDetalle
 *
 * @ORM\Table(name="cotizacion_detalle", indexes={@ORM\Index(name="cotizacion_detalle_FKIndex1", columns={"prod_codigo"}), @ORM\Index(name="cotizacion_detalle_FKIndex2", columns={"cot_codigo"})})
 * @ORM\Entity
 */
class CotizacionDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cd_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cot_codigo", type="integer", nullable=false)
     */
    private $cotCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="cd_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $cdCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_precio_compra", type="string", length=100, nullable=true)
     */
    private $cdPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_precio_venta", type="string", length=100, nullable=true)
     */
    private $cdPrecioVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_valor_venta", type="string", length=100, nullable=true)
     */
    private $cdValorVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="cd_total", type="string", length=100, nullable=true)
     */
    private $cdTotal;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="cd_iva_save", type="integer", nullable=true)
     */
    private $cdIvaSave;


    /**
     * Get cdCodigo
     *
     * @return integer 
     */
    public function getCdCodigo()
    {
        return $this->cdCodigo;
    }

    /**
     * Set cotCodigo
     *
     * @param integer $cotCodigo
     * @return CotizacionDetalle
     */
    public function setCotCodigo($cotCodigo)
    {
        $this->cotCodigo = $cotCodigo;

        return $this;
    }

    /**
     * Get cotCodigo
     *
     * @return integer 
     */
    public function getCotCodigo()
    {
        return $this->cotCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return CotizacionDetalle
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
     * Set cdCantidad
     *
     * @param float $cdCantidad
     * @return CotizacionDetalle
     */
    public function setCdCantidad($cdCantidad)
    {
        $this->cdCantidad = $cdCantidad;

        return $this;
    }

    /**
     * Get cdCantidad
     *
     * @return float 
     */
    public function getCdCantidad()
    {
        return $this->cdCantidad;
    }

    /**
     * Set cdPrecioCompra
     *
     * @param string $cdPrecioCompra
     * @return CotizacionDetalle
     */
    public function setCdPrecioCompra($cdPrecioCompra)
    {
        $this->cdPrecioCompra = $cdPrecioCompra;

        return $this;
    }

    /**
     * Get cdPrecioCompra
     *
     * @return string 
     */
    public function getCdPrecioCompra()
    {
        return $this->cdPrecioCompra;
    }

    /**
     * Set cdPrecioVenta
     *
     * @param string $cdPrecioVenta
     * @return CotizacionDetalle
     */
    public function setCdPrecioVenta($cdPrecioVenta)
    {
        $this->cdPrecioVenta = $cdPrecioVenta;

        return $this;
    }

    /**
     * Get cdPrecioVenta
     *
     * @return string 
     */
    public function getCdPrecioVenta()
    {
        return $this->cdPrecioVenta;
    }

    /**
     * Set cdValorVenta
     *
     * @param string $cdValorVenta
     * @return CotizacionDetalle
     */
    public function setCdValorVenta($cdValorVenta)
    {
        $this->cdValorVenta = $cdValorVenta;

        return $this;
    }

    /**
     * Get cdValorVenta
     *
     * @return string 
     */
    public function getCdValorVenta()
    {
        return $this->cdValorVenta;
    }

    /**
     * Set cdTotal
     *
     * @param string $cdTotal
     * @return CotizacionDetalle
     */
    public function setCdTotal($cdTotal)
    {
        $this->cdTotal = $cdTotal;

        return $this;
    }

    /**
     * Get cdTotal
     *
     * @return string 
     */
    public function getCdTotal()
    {
        return $this->cdTotal;
    }
    
    /**
     * Set cdIvaSave
     *
     * @param integer $cdIvaSave
     * @return CotizacionDetalle
     */
    public function setCdIvaSave($cdIvaSave)
    {
        $this->cdIvaSave = $cdIvaSave;

        return $this;
    }

    /**
     * Get cdIvaSave
     *
     * @return integer 
     */
    public function getCdIvaSave()
    {
        return $this->cdIvaSave;
    }
}
