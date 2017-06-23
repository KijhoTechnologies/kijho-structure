<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * FacturaFisicaVenta
 *
 * @ORM\Table(name="factura_fisica_venta")
 * @ORM\Entity
 */
class FacturaFisicaVenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facfvCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_nro_factura", type="integer", nullable=false)
     */
    private $facfvNroFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="facfv_hora", type="string", length=100, nullable=false)
     */
    private $facfvHora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facfv_fecha", type="date", nullable=false)
     */
    private $facfvFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_total", type="integer", nullable=false)
     */
    private $facfvTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_estado", type="integer", nullable=false)
     */
    private $facfvEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_descuento", type="integer", nullable=false)
     */
    private $facfvDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_iva", type="integer", nullable=false)
     */
    private $facfvIva;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_iva16", type="integer", nullable=false)
     */
    private $facfvIva16;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_iva10", type="integer", nullable=false)
     */
    private $facfvIva10;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_iva_exento", type="integer", nullable=false)
     */
    private $facfvIvaExento;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_iva_excluido", type="integer", nullable=true)
     */
    private $facfvIvaExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="facfv_domicilio", type="string", length=50, nullable=false)
     */
    private $facfvDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="facfv_motivo_descuento", type="string", length=100, nullable=false)
     */
    private $facfvMotivoDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_iva5", type="integer", nullable=false)
     */
    private $facfvIva5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facfv_fecha_pago", type="date", nullable=false)
     */
    private $facfvFechaPago;


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
     * Set facfvNroFactura
     *
     * @param integer $facfvNroFactura
     * @return FacturaFisicaVenta
     */
    public function setFacfvNroFactura($facfvNroFactura)
    {
        $this->facfvNroFactura = $facfvNroFactura;

        return $this;
    }

    /**
     * Get facfvNroFactura
     *
     * @return integer 
     */
    public function getFacfvNroFactura()
    {
        return $this->facfvNroFactura;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return FacturaFisicaVenta
     */
    public function setCliCodigo($cliCodigo)
    {
        $this->cliCodigo = $cliCodigo;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo()
    {
        return $this->cliCodigo;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return FacturaFisicaVenta
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
     * Set facfvHora
     *
     * @param string $facfvHora
     * @return FacturaFisicaVenta
     */
    public function setFacfvHora($facfvHora)
    {
        $this->facfvHora = $facfvHora;

        return $this;
    }

    /**
     * Get facfvHora
     *
     * @return string 
     */
    public function getFacfvHora()
    {
        return $this->facfvHora;
    }

    /**
     * Set facfvFecha
     *
     * @param \DateTime $facfvFecha
     * @return FacturaFisicaVenta
     */
    public function setFacfvFecha($facfvFecha)
    {
        $this->facfvFecha = $facfvFecha;

        return $this;
    }

    /**
     * Get facfvFecha
     *
     * @return \DateTime 
     */
    public function getFacfvFecha()
    {
        return $this->facfvFecha;
    }

    /**
     * Set facfvTotal
     *
     * @param integer $facfvTotal
     * @return FacturaFisicaVenta
     */
    public function setFacfvTotal($facfvTotal)
    {
        $this->facfvTotal = $facfvTotal;

        return $this;
    }

    /**
     * Get facfvTotal
     *
     * @return integer 
     */
    public function getFacfvTotal()
    {
        return $this->facfvTotal;
    }

    /**
     * Set facfvEstado
     *
     * @param integer $facfvEstado
     * @return FacturaFisicaVenta
     */
    public function setFacfvEstado($facfvEstado)
    {
        $this->facfvEstado = $facfvEstado;

        return $this;
    }

    /**
     * Get facfvEstado
     *
     * @return integer 
     */
    public function getFacfvEstado()
    {
        return $this->facfvEstado;
    }

    /**
     * Set facfvDescuento
     *
     * @param integer $facfvDescuento
     * @return FacturaFisicaVenta
     */
    public function setFacfvDescuento($facfvDescuento)
    {
        $this->facfvDescuento = $facfvDescuento;

        return $this;
    }

    /**
     * Get facfvDescuento
     *
     * @return integer 
     */
    public function getFacfvDescuento()
    {
        return $this->facfvDescuento;
    }

    /**
     * Set facfvIva
     *
     * @param integer $facfvIva
     * @return FacturaFisicaVenta
     */
    public function setFacfvIva($facfvIva)
    {
        $this->facfvIva = $facfvIva;

        return $this;
    }

    /**
     * Get facfvIva
     *
     * @return integer 
     */
    public function getFacfvIva()
    {
        return $this->facfvIva;
    }

    /**
     * Set facfvIva16
     *
     * @param integer $facfvIva16
     * @return FacturaFisicaVenta
     */
    public function setFacfvIva16($facfvIva16)
    {
        $this->facfvIva16 = $facfvIva16;

        return $this;
    }

    /**
     * Get facfvIva16
     *
     * @return integer 
     */
    public function getFacfvIva16()
    {
        return $this->facfvIva16;
    }

    /**
     * Set facfvIva10
     *
     * @param integer $facfvIva10
     * @return FacturaFisicaVenta
     */
    public function setFacfvIva10($facfvIva10)
    {
        $this->facfvIva10 = $facfvIva10;

        return $this;
    }

    /**
     * Get facfvIva10
     *
     * @return integer 
     */
    public function getFacfvIva10()
    {
        return $this->facfvIva10;
    }

    /**
     * Set facfvIvaExento
     *
     * @param integer $facfvIvaExento
     * @return FacturaFisicaVenta
     */
    public function setFacfvIvaExento($facfvIvaExento)
    {
        $this->facfvIvaExento = $facfvIvaExento;

        return $this;
    }

    /**
     * Get facfvIvaExento
     *
     * @return integer 
     */
    public function getFacfvIvaExento()
    {
        return $this->facfvIvaExento;
    }

    /**
     * Set facfvIvaExcluido
     *
     * @param integer $facfvIvaExcluido
     * @return FacturaFisicaVenta
     */
    public function setFacfvIvaExcluido($facfvIvaExcluido)
    {
        $this->facfvIvaExcluido = $facfvIvaExcluido;

        return $this;
    }

    /**
     * Get facfvIvaExcluido
     *
     * @return integer 
     */
    public function getFacfvIvaExcluido()
    {
        return $this->facfvIvaExcluido;
    }

    /**
     * Set facfvDomicilio
     *
     * @param string $facfvDomicilio
     * @return FacturaFisicaVenta
     */
    public function setFacfvDomicilio($facfvDomicilio)
    {
        $this->facfvDomicilio = $facfvDomicilio;

        return $this;
    }

    /**
     * Get facfvDomicilio
     *
     * @return string 
     */
    public function getFacfvDomicilio()
    {
        return $this->facfvDomicilio;
    }

    /**
     * Set facfvMotivoDescuento
     *
     * @param string $facfvMotivoDescuento
     * @return FacturaFisicaVenta
     */
    public function setFacfvMotivoDescuento($facfvMotivoDescuento)
    {
        $this->facfvMotivoDescuento = $facfvMotivoDescuento;

        return $this;
    }

    /**
     * Get facfvMotivoDescuento
     *
     * @return string 
     */
    public function getFacfvMotivoDescuento()
    {
        return $this->facfvMotivoDescuento;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return FacturaFisicaVenta
     */
    public function setCodCaja($codCaja)
    {
        $this->codCaja = $codCaja;

        return $this;
    }

    /**
     * Get codCaja
     *
     * @return integer 
     */
    public function getCodCaja()
    {
        return $this->codCaja;
    }

    /**
     * Set facfvIva5
     *
     * @param integer $facfvIva5
     * @return FacturaFisicaVenta
     */
    public function setFacfvIva5($facfvIva5)
    {
        $this->facfvIva5 = $facfvIva5;

        return $this;
    }

    /**
     * Get facfvIva5
     *
     * @return integer 
     */
    public function getFacfvIva5()
    {
        return $this->facfvIva5;
    }

    /**
     * Set facfvFechaPago
     *
     * @param \DateTime $facfvFechaPago
     * @return FacturaFisicaVenta
     */
    public function setFacfvFechaPago($facfvFechaPago)
    {
        $this->facfvFechaPago = $facfvFechaPago;

        return $this;
    }

    /**
     * Get facfvFechaPago
     *
     * @return \DateTime 
     */
    public function getFacfvFechaPago()
    {
        return $this->facfvFechaPago;
    }
}
