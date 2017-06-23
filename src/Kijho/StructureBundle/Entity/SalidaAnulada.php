<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalidaAnulada
 *
 * @ORM\Table(name="salida_anulada")
 * @ORM\Entity
 */
class SalidaAnulada {

    /**
     * @var integer
     *
     * @ORM\Column(name="sal_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_vendedor", type="string", length=100, nullable=true)
     */
    private $facvVendedor;

    /**
     * @var Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="prod_codigo", referencedColumnName="prod_codigo", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="sal_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $salCantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sal_fecha", type="date", nullable=true)
     */
    private $salFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_hora", type="string", length=100, nullable=true)
     */
    private $salHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="sal_concepto", type="integer", nullable=true)
     */
    private $salConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_precio_compra", type="string", length=100, nullable=true)
     */
    private $salPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_precio_venta", type="string", length=100, nullable=true)
     */
    private $salPrecioVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_valor_vendido", type="string", length=100, nullable=true)
     */
    private $salValorVendido;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_descuento", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $salDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_total", type="string", length=100, nullable=true)
     */
    private $salTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_subTotal", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_iva_16", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_iva_10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_iva_5", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salExento;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_excluido", type="string", length=11, nullable=true)
     */
    private $salExcluido;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="devolucion", type="boolean", nullable=false, options={"default"=false})
     */
    private $devolucion;

    /**
     * @var integer
     *
     * @ORM\Column(name="sal_iva_save", type="integer", nullable=true)
     */
    private $salIvaSave;

    /**
     *
     * @ORM\ManyToOne(targetEntity="FacturaVentas", inversedBy="itemsCanceled")
     * @ORM\JoinColumn(name="facvCodigo_id", referencedColumnName="facv_codigo")
     */
    private $facvCodigo;

    public function __construct(Producto $product, \DateTime $dateTime) {
        $this->facvVendedor = NULL;
        $this->prodCodigo = $product;
        $this->salFecha = $dateTime;
        $this->salHora = $dateTime->format('H:i:s');
        $this->salPrecioCompra = $product->getProdCostoUnit();
        $this->salPrecioVenta = $product->getProdVentaUnit();
        $this->devolucion = false;
    }

    /**
     * Get salCodigo
     *
     * @return integer 
     */
    public function getSalCodigo() {
        return $this->salCodigo;
    }

    /**
     * Set facvCodigo
     *
     * @param integer $facvCodigo
     * @return SalidaAnulada
     */
    public function setFacvCodigo($facvCodigo) {
        $this->facvCodigo = $facvCodigo;

        return $this;
    }

    /**
     * Get facvCodigo
     *
     * @return integer 
     */
    public function getFacvCodigo() {
        return $this->facvCodigo;
    }

    /**
     * Set facvVendedor
     *
     * @param string $facvVendedor
     * @return SalidaAnulada
     */
    public function setFacvVendedor($facvVendedor) {
        $this->facvVendedor = $facvVendedor;

        return $this;
    }

    /**
     * Get facvVendedor
     *
     * @return string 
     */
    public function getFacvVendedor() {
        return $this->facvVendedor;
    }

    function setSalCodigo($salCodigo) {
        $this->salCodigo = $salCodigo;
    }

    function setProdCodigo(Producto $prodCodigo) {
        $this->prodCodigo = $prodCodigo;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProdCodigo() {
        return $this->prodCodigo;
    }

    /**
     * Set salCantidad
     *
     * @param float $salCantidad
     * @return SalidaAnulada
     */
    public function setSalCantidad($salCantidad) {
        $this->salCantidad = $salCantidad;

        return $this;
    }

    /**
     * Get salCantidad
     *
     * @return float 
     */
    public function getSalCantidad() {
        return $this->salCantidad;
    }

    /**
     * Set salFecha
     *
     * @param \DateTime $salFecha
     * @return SalidaAnulada
     */
    public function setSalFecha($salFecha) {
        $this->salFecha = $salFecha;

        return $this;
    }

    /**
     * Get salFecha
     *
     * @return \DateTime 
     */
    public function getSalFecha() {
        return $this->salFecha;
    }

    /**
     * Set salHora
     *
     * @param string $salHora
     * @return SalidaAnulada
     */
    public function setSalHora($salHora) {
        $this->salHora = $salHora;

        return $this;
    }

    /**
     * Get salHora
     *
     * @return string 
     */
    public function getSalHora() {
        return $this->salHora;
    }

    /**
     * Set salConcepto
     *
     * @param integer $salConcepto
     * @return SalidaAnulada
     */
    public function setSalConcepto($salConcepto) {
        $this->salConcepto = $salConcepto;

        return $this;
    }

    /**
     * Get salConcepto
     *
     * @return integer 
     */
    public function getSalConcepto() {
        return $this->salConcepto;
    }

    /**
     * Set salPrecioCompra
     *
     * @param string $salPrecioCompra
     * @return SalidaAnulada
     */
    public function setSalPrecioCompra($salPrecioCompra) {
        $this->salPrecioCompra = $salPrecioCompra;

        return $this;
    }

    /**
     * Get salPrecioCompra
     *
     * @return string 
     */
    public function getSalPrecioCompra() {
        return $this->salPrecioCompra;
    }

    /**
     * Set salPrecioVenta
     *
     * @param string $salPrecioVenta
     * @return SalidaAnulada
     */
    public function setSalPrecioVenta($salPrecioVenta) {
        $this->salPrecioVenta = $salPrecioVenta;

        return $this;
    }

    /**
     * Get salPrecioVenta
     *
     * @return string 
     */
    public function getSalPrecioVenta() {
        return $this->salPrecioVenta;
    }

    /**
     * Set salValorVendido
     *
     * @param string $salValorVendido
     * @return SalidaAnulada
     */
    public function setSalValorVendido($salValorVendido) {
        $this->salValorVendido = $salValorVendido;

        return $this;
    }

    /**
     * Get salValorVendido
     *
     * @return string 
     */
    public function getSalValorVendido() {
        return $this->salValorVendido;
    }

    /**
     * Set salDescuento
     *
     * @param string $salDescuento
     * @return SalidaAnulada
     */
    public function setSalDescuento($salDescuento) {
        $this->salDescuento = $salDescuento;

        return $this;
    }

    /**
     * Get salDescuento
     *
     * @return string 
     */
    public function getSalDescuento() {
        return $this->salDescuento;
    }

    /**
     * Set salTotal
     *
     * @param string $salTotal
     * @return SalidaAnulada
     */
    public function setSalTotal($salTotal) {
        $this->salTotal = $salTotal;

        return $this;
    }

    /**
     * Get salTotal
     *
     * @return string 
     */
    public function getSalTotal() {
        return $this->salTotal;
    }

    /**
     * Set salSubtotal
     *
     * @param string $salSubtotal
     * @return SalidaAnulada
     */
    public function setSalSubtotal($salSubtotal) {
        $this->salSubtotal = $salSubtotal;

        return $this;
    }

    /**
     * Get salSubtotal
     *
     * @return string 
     */
    public function getSalSubtotal() {
        return $this->salSubtotal;
    }

    /**
     * Set salIva16
     *
     * @param string $salIva16
     * @return SalidaAnulada
     */
    public function setSalIva16($salIva16) {
        $this->salIva16 = $salIva16;

        return $this;
    }

    /**
     * Get salIva16
     *
     * @return string 
     */
    public function getSalIva16() {
        return $this->salIva16;
    }

    /**
     * Set salIva10
     *
     * @param string $salIva10
     * @return SalidaAnulada
     */
    public function setSalIva10($salIva10) {
        $this->salIva10 = $salIva10;

        return $this;
    }

    /**
     * Get salIva10
     *
     * @return string 
     */
    public function getSalIva10() {
        return $this->salIva10;
    }

    /**
     * Set salIva5
     *
     * @param string $salIva5
     * @return SalidaAnulada
     */
    public function setSalIva5($salIva5) {
        $this->salIva5 = $salIva5;

        return $this;
    }

    /**
     * Get salIva5
     *
     * @return string 
     */
    public function getSalIva5() {
        return $this->salIva5;
    }

    /**
     * Set salExento
     *
     * @param string $salExento
     * @return SalidaAnulada
     */
    public function setSalExento($salExento) {
        $this->salExento = $salExento;

        return $this;
    }

    /**
     * Get salExento
     *
     * @return string 
     */
    public function getSalExento() {
        return $this->salExento;
    }

    /**
     * Set salExcluido
     *
     * @param string $salExcluido
     * @return SalidaAnulada
     */
    public function setSalExcluido($salExcluido) {
        $this->salExcluido = $salExcluido;

        return $this;
    }

    /**
     * Get salExcluido
     *
     * @return string 
     */
    public function getSalExcluido() {
        return $this->salExcluido;
    }

    public function setDevolucion($devolucion) {
        $this->devolucion = $devolucion;
        return $this;
    }

    public function getDevolucion() {
        return $this->devolucion;
    }

    /**
     * Set salIvaSave
     *
     * @param integer $salIvaSave
     * @return SalidaAnulada
     */
    public function setSalIvaSave($salIvaSave) {
        $this->salIvaSave = $salIvaSave;

        return $this;
    }

    /**
     * Get salIvaSave
     *
     * @return integer 
     */
    public function getSalIvaSave() {
        return $this->salIvaSave;
    }

}
