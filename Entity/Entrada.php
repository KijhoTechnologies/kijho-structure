<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Entrada
 *
 * @ORM\Table(name="entrada", indexes={@ORM\Index(name="entrada_FKIndex1", columns={"prod_codigo"}), @ORM\Index(name="entrada_FKIndex2", columns={"facp_codigo"})})
 * @ORM\Entity(repositoryClass="EntradaRepository")
 */
class Entrada {

    /**
     * @var integer
     *
     * @ORM\Column(name="ent_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_codigo", type="integer", nullable=false)
     */
    private $facpCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="ent_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $entCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ent_precio_compra", type="integer", nullable=false)
     */
    private $entPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_precio_venta", type="decimal", precision=11, scale=3, nullable=true)
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
    private $entLoteProducto;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ent_iva_save", type="integer", nullable=true)
     */
    private $entIvaSave;


    /**
     * Get entCodigo
     *
     * @return integer 
     */
    public function getEntCodigo()
    {
        return $this->entCodigo;
    }

    /**
     * Set facpCodigo
     *
     * @param integer $facpCodigo
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @param integer $entPrecioCompra
     * @return Entrada
     */
    public function setEntPrecioCompra($entPrecioCompra)
    {
        $this->entPrecioCompra = $entPrecioCompra;

        return $this;
    }

    /**
     * Get entPrecioCompra
     *
     * @return integer 
     */
    public function getEntPrecioCompra()
    {
        return $this->entPrecioCompra;
    }

    /**
     * Set entPrecioVenta
     *
     * @param string $entPrecioVenta
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * @return Entrada
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
     * Set entFechaVencimiento
     *
     * @param \DateTime $entFechaVencimiento
     * @return Entrada
     */
    public function setEntFechaVencimiento($entFechaVencimiento)
    {
        $this->entFechaVencimiento = $entFechaVencimiento;

        return $this;
    }

    /**
     * Get entFechaVencimiento
     *
     * @return \DateTime 
     */
    public function getEntFechaVencimiento()
    {
        return $this->entFechaVencimiento;
    }

    /**
     * Set entLoteProducto
     *
     * @param string $entLoteProducto
     * @return Entrada
     */
    public function setEntLoteProducto($entLoteProducto)
    {
        $this->entLoteProducto = $entLoteProducto;

        return $this;
    }

    /**
     * Get entLoteProducto
     *
     * @return string 
     */
    public function getEntLoteProducto()
    {
        return $this->entLoteProducto;
    }
    
    /**
     * Set entIvaSave
     *
     * @param integer $entIvaSave
     * @return Entrada
     */
    public function setEntIvaSave($entIvaSave)
    {
        $this->entIvaSave = $entIvaSave;

        return $this;
    }

    /**
     * Get entIvaSave
     *
     * @return integer 
     */
    public function getEntIvaSave()
    {
        return $this->entIvaSave;
    }
}
