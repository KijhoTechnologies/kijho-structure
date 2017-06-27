<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;


/**
 * SalidaSeparadoAnulada
 *
 * @ORM\Table(name="salida_separado_anulada")
 * @ORM\Entity
 */
class SalidaSeparadoAnulada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sep_codigo", type="integer", nullable=false)
     */
    private $sepCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_vendedor", type="string", length=100, nullable=true)
     */
    private $sepVendedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="sal_sep_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $salSepCantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sal_sep_fecha", type="date", nullable=true)
     */
    private $salSepFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_hora", type="string", length=100, nullable=true)
     */
    private $salSepHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="sal_sep_concepto", type="integer", nullable=true)
     */
    private $salSepConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_precio_compra", type="string", length=100, nullable=true)
     */
    private $salSepPrecioCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_precio_venta", type="string", length=100, nullable=true)
     */
    private $salSepPrecioVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_valor_vendido", type="string", length=100, nullable=true)
     */
    private $salSepValorVendido;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_descuento", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $salSepDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_total", type="string", length=100, nullable=true)
     */
    private $salSepTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_subTotal", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salSepSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_iva_16", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salSepIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_iva_10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salSepIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_iva_5", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salSepIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $salSepExento;

    /**
     * @var string
     *
     * @ORM\Column(name="sal_sep_excluido", type="string", length=11, nullable=true)
     */
    private $salSepExcluido;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="sal_sep_iva_save", type="integer", nullable=true)
     */
    private $salSepIvaSave;

    /**
     * @var integer
     *
     * @ORM\Column(name="sal_sep_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salSepCodigo;



    /**
     * Set sepCodigo
     *
     * @param integer $sepCodigo
     * @return SalidaSeparadoAnulada
     */
    public function setSepCodigo($sepCodigo)
    {
        $this->sepCodigo = $sepCodigo;

        return $this;
    }

    /**
     * Get sepCodigo
     *
     * @return integer 
     */
    public function getSepCodigo()
    {
        return $this->sepCodigo;
    }

    /**
     * Set sepVendedor
     *
     * @param string $sepVendedor
     * @return SalidaSeparadoAnulada
     */
    public function setSepVendedor($sepVendedor)
    {
        $this->sepVendedor = $sepVendedor;

        return $this;
    }

    /**
     * Get sepVendedor
     *
     * @return string 
     */
    public function getSepVendedor()
    {
        return $this->sepVendedor;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return SalidaSeparadoAnulada
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
     * Set salSepCantidad
     *
     * @param float $salSepCantidad
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepCantidad($salSepCantidad)
    {
        $this->salSepCantidad = $salSepCantidad;

        return $this;
    }

    /**
     * Get salSepCantidad
     *
     * @return float 
     */
    public function getSalSepCantidad()
    {
        return $this->salSepCantidad;
    }

    /**
     * Set salSepFecha
     *
     * @param \DateTime $salSepFecha
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepFecha($salSepFecha)
    {
        $this->salSepFecha = $salSepFecha;

        return $this;
    }

    /**
     * Get salSepFecha
     *
     * @return \DateTime 
     */
    public function getSalSepFecha()
    {
        return $this->salSepFecha;
    }

    /**
     * Set salSepHora
     *
     * @param string $salSepHora
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepHora($salSepHora)
    {
        $this->salSepHora = $salSepHora;

        return $this;
    }

    /**
     * Get salSepHora
     *
     * @return string 
     */
    public function getSalSepHora()
    {
        return $this->salSepHora;
    }

    /**
     * Set salSepConcepto
     *
     * @param integer $salSepConcepto
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepConcepto($salSepConcepto)
    {
        $this->salSepConcepto = $salSepConcepto;

        return $this;
    }

    /**
     * Get salSepConcepto
     *
     * @return integer 
     */
    public function getSalSepConcepto()
    {
        return $this->salSepConcepto;
    }

    /**
     * Set salSepPrecioCompra
     *
     * @param string $salSepPrecioCompra
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepPrecioCompra($salSepPrecioCompra)
    {
        $this->salSepPrecioCompra = $salSepPrecioCompra;

        return $this;
    }

    /**
     * Get salSepPrecioCompra
     *
     * @return string 
     */
    public function getSalSepPrecioCompra()
    {
        return $this->salSepPrecioCompra;
    }

    /**
     * Set salSepPrecioVenta
     *
     * @param string $salSepPrecioVenta
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepPrecioVenta($salSepPrecioVenta)
    {
        $this->salSepPrecioVenta = $salSepPrecioVenta;

        return $this;
    }

    /**
     * Get salSepPrecioVenta
     *
     * @return string 
     */
    public function getSalSepPrecioVenta()
    {
        return $this->salSepPrecioVenta;
    }

    /**
     * Set salSepValorVendido
     *
     * @param string $salSepValorVendido
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepValorVendido($salSepValorVendido)
    {
        $this->salSepValorVendido = $salSepValorVendido;

        return $this;
    }

    /**
     * Get salSepValorVendido
     *
     * @return string 
     */
    public function getSalSepValorVendido()
    {
        return $this->salSepValorVendido;
    }

    /**
     * Set salSepDescuento
     *
     * @param string $salSepDescuento
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepDescuento($salSepDescuento)
    {
        $this->salSepDescuento = $salSepDescuento;

        return $this;
    }

    /**
     * Get salSepDescuento
     *
     * @return string 
     */
    public function getSalSepDescuento()
    {
        return $this->salSepDescuento;
    }

    /**
     * Set salSepTotal
     *
     * @param string $salSepTotal
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepTotal($salSepTotal)
    {
        $this->salSepTotal = $salSepTotal;

        return $this;
    }

    /**
     * Get salSepTotal
     *
     * @return string 
     */
    public function getSalSepTotal()
    {
        return $this->salSepTotal;
    }

    /**
     * Set salSepSubtotal
     *
     * @param string $salSepSubtotal
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepSubtotal($salSepSubtotal)
    {
        $this->salSepSubtotal = $salSepSubtotal;

        return $this;
    }

    /**
     * Get salSepSubtotal
     *
     * @return string 
     */
    public function getSalSepSubtotal()
    {
        return $this->salSepSubtotal;
    }

    /**
     * Set salSepIva16
     *
     * @param string $salSepIva16
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepIva16($salSepIva16)
    {
        $this->salSepIva16 = $salSepIva16;

        return $this;
    }

    /**
     * Get salSepIva16
     *
     * @return string 
     */
    public function getSalSepIva16()
    {
        return $this->salSepIva16;
    }

    /**
     * Set salSepIva10
     *
     * @param string $salSepIva10
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepIva10($salSepIva10)
    {
        $this->salSepIva10 = $salSepIva10;

        return $this;
    }

    /**
     * Get salSepIva10
     *
     * @return string 
     */
    public function getSalSepIva10()
    {
        return $this->salSepIva10;
    }

    /**
     * Set salSepIva5
     *
     * @param string $salSepIva5
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepIva5($salSepIva5)
    {
        $this->salSepIva5 = $salSepIva5;

        return $this;
    }

    /**
     * Get salSepIva5
     *
     * @return string 
     */
    public function getSalSepIva5()
    {
        return $this->salSepIva5;
    }

    /**
     * Set salSepExento
     *
     * @param string $salSepExento
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepExento($salSepExento)
    {
        $this->salSepExento = $salSepExento;

        return $this;
    }

    /**
     * Get salSepExento
     *
     * @return string 
     */
    public function getSalSepExento()
    {
        return $this->salSepExento;
    }

    /**
     * Set salSepExcluido
     *
     * @param string $salSepExcluido
     * @return SalidaSeparadoAnulada
     */
    public function setSalSepExcluido($salSepExcluido)
    {
        $this->salSepExcluido = $salSepExcluido;

        return $this;
    }

    /**
     * Get salSepExcluido
     *
     * @return string 
     */
    public function getSalSepExcluido()
    {
        return $this->salSepExcluido;
    }
    
    /**
     * Set salSepIvaSave
     *
     * @param integer $salSepIvaSave
     * @return SalidaSeparadoAnulada
     */
    public function setSalIvaSave($salSepIvaSave)
    {
        $this->salSepIvaSave = $salSepIvaSave;

        return $this;
    }

    /**
     * Get salSepIvaSave
     *
     * @return integer 
     */
    public function getSalSepIvaSave()
    {
        return $this->salSepIvaSave;
    }

    /**
     * Get salSepCodigo
     *
     * @return integer 
     */
    public function getSalSepCodigo()
    {
        return $this->salSepCodigo;
    }
}
