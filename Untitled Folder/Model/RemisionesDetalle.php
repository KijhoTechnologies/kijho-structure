<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * RemisionesDetalle
 *
 * @ORM\Table(name="remisiones_detalle")
 * @ORM\Entity(repositoryClass="RemisionesDetalleRepository")
 */
class RemisionesDetalle {

    /**
     * @var integer
     *
     * @ORM\Column(name="remd_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $remdCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rem_codigo", type="integer", nullable=false)
     */
    private $remCodigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="id_vendedor", type="string", length=100, nullable=true)
     */
    private $idVendedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="remd_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $remdCantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="remd_fecha", type="date", nullable=false)
     */
    private $remdFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="remd_hora", type="string", length=100, nullable=false)
     */
    private $remdHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="remd_concepto", type="integer", nullable=false)
     */
    private $remdConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="remd_precio_compra", type="string", length=100, nullable=false)
     */
    private $remdPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="remd_precio_venta", type="string", length=100, nullable=false)
     */
    private $remdPrecioVenta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="remd_precio_vendido", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $remdPrecioVendido;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="remd_descuento", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $remdDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="remd_total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $remdTotal;


    /**
     * Set remCodigo
     *
     * @param integer $remCodigo
     * @return RemisionesDetalle
     */
    public function setRemCodigo($remCodigo) {
        $this->remCodigo = $remCodigo;

        return $this;
    }

    /**
     * Get remCodigo
     *
     * @return integer 
     */
    public function getRemCodigo() {
        return $this->remCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return RemisionesDetalle
     */
    public function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;

        return $this;
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
     * Set remdCantidad
     *
     * @param float $remdCantidad
     * @return RemisionesDetalle
     */
    public function setRemdCantidad($remdCantidad) {
        $this->remdCantidad = $remdCantidad;

        return $this;
    }

    /**
     * Get remdCantidad
     *
     * @return float 
     */
    public function getRemdCantidad() {
        return $this->remdCantidad;
    }

    /**
     * Set remdFecha
     *
     * @param \DateTime $remdFecha
     * @return RemisionesDetalle
     */
    public function setRemdFecha($remdFecha) {
        $this->remdFecha = $remdFecha;

        return $this;
    }

    /**
     * Get remdFecha
     *
     * @return \DateTime 
     */
    public function getRemdFecha() {
        return $this->remdFecha;
    }

    /**
     * Set remdHora
     *
     * @param string $remdHora
     * @return RemisionesDetalle
     */
    public function setRemdHora($remdHora) {
        $this->remdHora = $remdHora;

        return $this;
    }

    /**
     * Get remdHora
     *
     * @return string 
     */
    public function getRemdHora() {
        return $this->remdHora;
    }

    /**
     * Set remdConcepto
     *
     * @param integer $remdConcepto
     * @return RemisionesDetalle
     */
    public function setRemdConcepto($remdConcepto) {
        $this->remdConcepto = $remdConcepto;

        return $this;
    }

    /**
     * Get remdConcepto
     *
     * @return integer 
     */
    public function getRemdConcepto() {
        return $this->remdConcepto;
    }

    /**
     * Set remdPrecioCompra
     *
     * @param string $remdPrecioCompra
     * @return RemisionesDetalle
     */
    public function setRemdPrecioCompra($remdPrecioCompra) {
        $this->remdPrecioCompra = $remdPrecioCompra;

        return $this;
    }

    /**
     * Get remdPrecioCompra
     *
     * @return string 
     */
    public function getRemdPrecioCompra() {
        return $this->remdPrecioCompra;
    }

    /**
     * Set remdPrecioVenta
     *
     * @param string $remdPrecioVenta
     * @return RemisionesDetalle
     */
    public function setRemdPrecioVenta($remdPrecioVenta) {
        $this->remdPrecioVenta = $remdPrecioVenta;

        return $this;
    }

    /**
     * Get remdPrecioVenta
     *
     * @return string 
     */
    public function getRemdPrecioVenta() {
        return $this->remdPrecioVenta;
    }

    /**
     * Set remdTotal
     *
     * @param string $remdTotal
     * @return RemisionesDetalle
     */
    public function setRemdTotal($remdTotal) {
        $this->remdTotal = $remdTotal;

        return $this;
    }

    /**
     * Get remdTotal
     *
     * @return string 
     */
    public function getRemdTotal() {
        return $this->remdTotal;
    }
    
    public function setIdVendedor($idVendedor) {
        $this->idVendedor = $idVendedor;

        return $this;
    }
    
    public function getIdVendedor() {
        return $this->idVendedor;
    }
    
    public function setRemdPrecioVendido($remdPrecioVendido) {
        $this->remdPrecioVendido = $remdPrecioVendido;

        return $this;
    }
    
    public function getRemdPrecioVendido() {
        return $this->remdPrecioVendido;
    }
    
    public function setRemdDescuento($remdDescuento) {
        $this->remdDescuento = $remdDescuento;

        return $this;
    }
    
    public function getRemdDescuento() {
        return $this->remdDescuento;
    }
    
    public function getRemdCodigo()
    {
        return $this->remdCodigo;
    }

}
