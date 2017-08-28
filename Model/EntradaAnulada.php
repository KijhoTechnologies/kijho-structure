<?php

namespace Seitem\WebServicesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntradaAnulada
 *
 * @ORM\Table(name="entrada_anulada")
 * @ORM\Entity
 */
class EntradaAnulada
{
     /**
     * @var integer
     *
     * @ORM\Column(name="ent_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entCodigo;
    
    /**
     * @var \Seitem\WebServicesBundle\Entity\FacturaProveedores
     *
     * @ORM\ManyToOne(targetEntity="FacturaProveedores", inversedBy="itemsCanceled")
     * @ORM\JoinColumn(name="facp_codigo", referencedColumnName="facp_codigo")
     */
    private $facpCodigo;

    /**
     * @var \Seitem\WebServicesBundle\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="Seitem\WebServicesBundle\Entity\Producto")
     * @ORM\JoinColumn(name="prod_codigo", referencedColumnName="prod_codigo")
     */
    private $prodCodigo;
    
    
    /**
     * @var float
     *
     * @ORM\Column(name="ent_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $entCantidad;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ent_precio_compra", type="string", length=100, nullable=true)
     */
    private $entPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_precio_venta", type="string", length=100, nullable=true)
     */
    private $entPrecioVenta;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ent_fecha", type="date", nullable=true)
     */
    private $entFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_hora", type="string", length=100, nullable=true)
     */
    private $entHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="ent_concepto", type="integer", nullable=true)
     */
    private $entConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_subTotal", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $entSubtotal;
   
     /**
     * @var string
     *
     * @ORM\Column(name="ent_iva_16", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $entIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_iva_10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $entIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_iva_5", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $entIva5;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ent_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $entExento;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_excluido", type="string", length=11, nullable=true)
     */
    private $entExcluido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ent_fecha_vencimiento", type="date", nullable=true)
     */
    private $entFechaVencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_lote_producto", type="string", length=200, nullable=true)
     */
    private $ent_lote_producto;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ent_iva_save", type="integer", nullable=true)
     */
    private $entIvaSave;    

    public function __construct(Producto $product, \DateTime $dateTime) {
     
        $this->prodCodigo = $product;
        $this->entFecha = $dateTime;
        $this->entlHora = $dateTime->format('H:i:s');
        $this->entPrecioCompra = $product->getProdCostoUnit();
        $this->entPrecioVenta = $product->getProdVentaUnit();

    }
    
    
    /**
     * Set facpCodigo
     *
     * @param integer $facpCodigo
     * @return EntradaAnulada
     */
    public function setFacpCodigo($facpCodigo)
    {
        $this->facpCodigo = $facpCodigo;

        return $this;
    }

    /**
     * Get facpCodigo
     *
     * @return integer 
     */
    public function getFacpCodigo()
    {
        return $this->facpCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return EntradaAnulada
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
     * Set entCantidad
     *
     * @param float $entCantidad
     * @return EntradaAnulada
     */
    public function setEntCantidad($entCantidad)
    {
        $this->entCantidad = $entCantidad;

        return $this;
    }

    /**
     * Get entCantidad
     *
     * @return float 
     */
    public function getEntCantidad()
    {
        return $this->entCantidad;
    }
    
    /**
     * Set entPrecioCompra
     *
     * @param string $entPrecioCompra
     * @return EntradaAnulada
     */
    public function setEntPrecioCompra($entPrecioCompra)
    {
        $this->entPrecioCompra = $entPrecioCompra;

        return $this;
    }

    /**
     * Get entPrecioCompra
     *
     * @return string 
     */
    public function getEntPrecioCompra()
    {
        return $this->entPrecioCompra;
    }

    /**
     * Set entPrecioVenta
     *
     * @param string $entPrecioVenta
     * @return EntradaAnulada
     */
    public function setEntPrecioVenta($entPrecioVenta)
    {
        $this->entPrecioVenta = $entPrecioVenta;

        return $this;
    }

    /**
     * Get entPrecioVenta
     *
     * @return string 
     */
    public function getEntPrecioVenta()
    {
        return $this->entPrecioVenta;
    }


    /**
     * Set entFecha
     *
     * @param \DateTime $entFecha
     * @return EntradaAnulada
     */
    public function setEntFecha($entFecha)
    {
        $this->entFecha = $entFecha;

        return $this;
    }

    /**
     * Get entFecha
     *
     * @return \DateTime 
     */
    public function getEntFecha()
    {
        return $this->entFecha;
    }

    /**
     * Set entHora
     *
     * @param string $entHora
     * @return EntradaAnulada
     */
    public function setEntHora($entHora)
    {
        $this->entHora = $entHora;

        return $this;
    }

    /**
     * Get entHora
     *
     * @return string 
     */
    public function getEntHora()
    {
        return $this->entHora;
    }

    /**
     * Set entConcepto
     *
     * @param integer $entConcepto
     * @return EntradaAnulada
     */
    public function setEntConcepto($entConcepto)
    {
        $this->entConcepto = $entConcepto;

        return $this;
    }

    /**
     * Get entConcepto
     *
     * @return integer 
     */
    public function getEntConcepto()
    {
        return $this->entConcepto;
    }
    
    /**
     * Set entSubtotal
     *
     * @param string $entSubtotal
     * @return EntradaAnulada
     */
    public function setEntSubtotal($entSubtotal)
    {
        $this->entSubtotal = $entSubtotal;

        return $this;
    }

    /**
     * Get entSubtotal
     *
     * @return string 
     */
    public function getEntSubtotal()
    {
        return $this->entSubtotal;
    }
    
    /**
     * Set entIva16
     *
     * @param string $entIva16
     * @return EntradaAnulada
     */
    public function setEntIva16($entIva16)
    {
        $this->entIva16 = $entIva16;

        return $this;
    }

    /**
     * Get entIva16
     *
     * @return string 
     */
    public function getEntIva16()
    {
        return $this->entIva16;
    }

    /**
     * Set entIva10
     *
     * @param string $entIva10
     * @return EntradaAnulada
     */
    public function setEntIva10($entIva10)
    {
        $this->entIva10 = $entIva10;

        return $this;
    }

    /**
     * Get entIva10
     *
     * @return string 
     */
    public function getEntIva10()
    {
        return $this->entIva10;
    }

    /**
     * Set entIva5
     *
     * @param string $entIva5
     * @return EntradaAnulada
     */
    public function setEntIva5($entIva5)
    {
        $this->entIva5 = $entIva5;

        return $this;
    }

    /**
     * Get entIva5
     *
     * @return string 
     */
    public function getEntIva5()
    {
        return $this->entIva5;
    }

    /**
     * Set entExento
     *
     * @param string $entExento
     * @return EntradaAnulada
     */
    public function setEntExento($entExento)
    {
        $this->entExento = $entExento;

        return $this;
    }

    /**
     * Get entExento
     *
     * @return string 
     */
    public function getEntExento()
    {
        return $this->entExento;
    }

    /**
     * Set entExcluido
     *
     * @param string $entExcluido
     * @return EntradaAnulada
     */
    public function setEntExcluido($entExcluido)
    {
        $this->entExcluido = $entExcluido;

        return $this;
    }

    /**
     * Get entExcluido
     *
     * @return string 
     */
    public function getEntExcluido()
    {
        return $this->entExcluido;
    }

    /**
     * Get entCodigo
     *
     * @return integer 
     */
    public function getEntCodigo()
    {
        return $this->entCodigo;
    }
    
    public function getEntFechaVencimiento() {
        return $this->entFechaVencimiento;
    }

    public function setEntFechaVencimiento(\DateTime $entFechaVencimiento) {
        $this->entFechaVencimiento = $entFechaVencimiento;
    }
    
    public function getEnt_lote_producto() {
        return $this->ent_lote_producto;
    }

    public function setEnt_lote_producto($ent_lote_producto) {
        $this->ent_lote_producto = $ent_lote_producto;
    }

    
    public function setEntIvaSave($entIvaSave) {
        $this->entIvaSave = $entIvaSave;
        return $this;
    }
    
    public function getEntIvaSave(){
        return $this->entIvaSave;
    }
}
