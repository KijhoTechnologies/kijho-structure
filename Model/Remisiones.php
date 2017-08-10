<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remisiones
 *
 * @ORM\Table(name="remisiones")
 * @ORM\Entity(repositoryClass="RemisionesRepository")
 */
class Remisiones
{
    const REMISIONES_ANULADA_NO = 'No';
    const REMISIONES_ANULADA_SI = 'Si';
    
    /**
     * @var integer
     *
     * @ORM\Column(name="rem_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $remCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rem_nro_factura", type="integer", nullable=false)
     */
    private $remNroFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="rem_anulada", type="string", length=100, nullable=false)
     */
    private $remAnulada = 'No';

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
     * @ORM\Column(name="id_vendedor", type="integer", length=100, nullable=true)
     */
    private $idVendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="rem_hora", type="string", length=100, nullable=false)
     */
    private $remHora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rem_fecha", type="date", nullable=false)
     */
    private $remFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rem_total", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $remTotal;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rem_ajustePeso", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $remAjustepeso;

    /**
     * @var integer
     *
     * @ORM\Column(name="rem_estado", type="integer", nullable=false)
     */
    private $remEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="rem_descuento", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $remDescuento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rem_descuentoProducto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $remDescuentoProducto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rem_descuentoCliente", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $remDescuentoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="rem_domicilio", type="string", length=50, nullable=false)
     */
    private $remDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="rem_motivo_descuento", type="string", length=100, nullable=false)
     */
    private $remMotivoDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rem_fecha_pago", type="date", nullable=false)
     */
    private $remFechaPago;


    /**
     * Get remCodigo
     *
     * @return integer 
     */
    public function getRemCodigo()
    {
        return $this->remCodigo;
    }

    /**
     * Set remNroFactura
     *
     * @param integer $remNroFactura
     * @return Remisiones
     */
    public function setRemNroFactura($remNroFactura)
    {
        $this->remNroFactura = $remNroFactura;

        return $this;
    }

    /**
     * Get remNroFactura
     *
     * @return integer 
     */
    public function getRemNroFactura()
    {
        return $this->remNroFactura;
    }

    /**
     * Set remAnulada
     *
     * @param string $remAnulada
     * @return Remisiones
     */
    public function setRemAnulada($remAnulada)
    {
        $this->remAnulada = $remAnulada;

        return $this;
    }

    /**
     * Get remAnulada
     *
     * @return string 
     */
    public function getRemAnulada()
    {
        return $this->remAnulada;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return Remisiones
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
     * @return Remisiones
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
     * Set remHora
     *
     * @param string $remHora
     * @return Remisiones
     */
    public function setRemHora($remHora)
    {
        $this->remHora = $remHora;

        return $this;
    }

    /**
     * Get remHora
     *
     * @return string 
     */
    public function getRemHora()
    {
        return $this->remHora;
    }

    /**
     * Set remFecha
     *
     * @param \DateTime $remFecha
     * @return Remisiones
     */
    public function setRemFecha($remFecha)
    {
        $this->remFecha = $remFecha;

        return $this;
    }

    /**
     * Get remFecha
     *
     * @return \DateTime 
     */
    public function getRemFecha()
    {
        return $this->remFecha;
    }

    /**
     * Set remTotal
     *
     * @param string $remTotal
     * @return Remisiones
     */
    public function setRemTotal($remTotal)
    {
        $this->remTotal = $remTotal;

        return $this;
    }

    /**
     * Get remTotal
     *
     * @return string 
     */
    public function getRemTotal()
    {
        return $this->remTotal;
    }

    /**
     * Set remEstado
     *
     * @param integer $remEstado
     * @return Remisiones
     */
    public function setRemEstado($remEstado)
    {
        $this->remEstado = $remEstado;

        return $this;
    }

    /**
     * Get remEstado
     *
     * @return integer 
     */
    public function getRemEstado()
    {
        return $this->remEstado;
    }

    /**
     * Set remDescuento
     *
     * @param string $remDescuento
     * @return Remisiones
     */
    public function setRemDescuento($remDescuento)
    {
        $this->remDescuento = $remDescuento;

        return $this;
    }

    /**
     * Get remDescuento
     *
     * @return string 
     */
    public function getRemDescuento()
    {
        return $this->remDescuento;
    }

    /**
     * Set remDomicilio
     *
     * @param string $remDomicilio
     * @return Remisiones
     */
    public function setRemDomicilio($remDomicilio)
    {
        $this->remDomicilio = $remDomicilio;

        return $this;
    }

    /**
     * Get remDomicilio
     *
     * @return string 
     */
    public function getRemDomicilio()
    {
        return $this->remDomicilio;
    }

    /**
     * Set remMotivoDescuento
     *
     * @param string $remMotivoDescuento
     * @return Remisiones
     */
    public function setRemMotivoDescuento($remMotivoDescuento)
    {
        $this->remMotivoDescuento = $remMotivoDescuento;

        return $this;
    }

    /**
     * Get remMotivoDescuento
     *
     * @return string 
     */
    public function getRemMotivoDescuento()
    {
        return $this->remMotivoDescuento;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return Remisiones
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
     * Set remFechaPago
     *
     * @param \DateTime $remFechaPago
     * @return Remisiones
     */
    public function setRemFechaPago($remFechaPago)
    {
        $this->remFechaPago = $remFechaPago;

        return $this;
    }

    /**
     * Get remFechaPago
     *
     * @return \DateTime 
     */
    public function getRemFechaPago()
    {
        return $this->remFechaPago;
    }
    }
