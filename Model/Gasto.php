<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Gasto
 *
 * @ORM\Table(name="gasto", indexes={@ORM\Index(name="gasto_FKIndex1", columns={"usu_codigo"}), @ORM\Index(name="gasto_FKIndex2", columns={"tiga_codigo"})})
 * @ORM\Entity(repositoryClass="GastoRepository")
 */
class Gasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gas_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gasCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiga_codigo", type="integer", nullable=false)
     */
    private $tigaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_iva16", type="integer", nullable=false)
     */
    private $gasIva16;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_iva10", type="integer", nullable=false)
     */
    private $gasIva10;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_impoConsumo", type="integer", nullable=true)
     */
    private $gasImpoconsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_subtotal", type="integer", nullable=false)
     */
    private $gasSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_valor", type="integer", nullable=true)
     */
    private $gasValor;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_rete_fuente", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteFuente;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_rete_iva", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteIva;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_rete_ica", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteIca;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_nit", type="string", length=30, nullable=false)
     */
    private $gasNit;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_persona", type="string", length=100, nullable=false)
     */
    private $gasPersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_movimiento_contable", type="integer", nullable=false)
     */
    private $gasMovimientoContable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gas_fecha", type="date", nullable=true)
     */
    private $gasFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_hora", type="string", length=100, nullable=true)
     */
    private $gasHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_factura", type="integer", nullable=true)
     */
    private $codFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_separado", type="integer", nullable=true)
     */
    private $codSeparado;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_factura_fisica", type="string", length=30, nullable=false)
     */
    private $codFacturaFisica;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_descripcion", type="string", length=100, nullable=false)
     */
    private $gasDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_iva5", type="integer", nullable=true)
     */
    private $gasIva5;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_recibo_mercancia", type="integer", nullable=true)
     */
    private $codReciboMercancia;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_exento", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasExento;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_excluido", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasExcluido;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_cod_pago_retencion", type="integer", nullable=true)
     */
    private $gasCodPagoRetencion;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_rete_cree", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteCree;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_afectaCaja", type="string", length=20, nullable=true)
     */
    private $gasAfectacaja;


    /**
     * Get gasCodigo
     *
     * @return integer 
     */
    public function getGasCodigo()
    {
        return $this->gasCodigo;
    }

    /**
     * Set tigaCodigo
     *
     * @param integer $tigaCodigo
     * @return Gasto
     */
    public function setTigaCodigo($tigaCodigo)
    {
        $this->tigaCodigo = $tigaCodigo;

        return $this;
    }

    /**
     * Get tigaCodigo
     *
     * @return integer 
     */
    public function getTigaCodigo()
    {
        return $this->tigaCodigo;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return Gasto
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
     * Set gasIva16
     *
     * @param integer $gasIva16
     * @return Gasto
     */
    public function setGasIva16($gasIva16)
    {
        $this->gasIva16 = $gasIva16;

        return $this;
    }

    /**
     * Get gasIva16
     *
     * @return integer 
     */
    public function getGasIva16()
    {
        return $this->gasIva16;
    }

    /**
     * Set gasIva10
     *
     * @param integer $gasIva10
     * @return Gasto
     */
    public function setGasIva10($gasIva10)
    {
        $this->gasIva10 = $gasIva10;

        return $this;
    }

    /**
     * Get gasIva10
     *
     * @return integer 
     */
    public function getGasIva10()
    {
        return $this->gasIva10;
    }

    /**
     * Set gasImpoconsumo
     *
     * @param integer $gasImpoconsumo
     * @return Gasto
     */
    public function setGasImpoconsumo($gasImpoconsumo)
    {
        $this->gasImpoconsumo = $gasImpoconsumo;

        return $this;
    }

    /**
     * Get gasImpoconsumo
     *
     * @return integer 
     */
    public function getGasImpoconsumo()
    {
        return $this->gasImpoconsumo;
    }

    /**
     * Set gasSubtotal
     *
     * @param integer $gasSubtotal
     * @return Gasto
     */
    public function setGasSubtotal($gasSubtotal)
    {
        $this->gasSubtotal = $gasSubtotal;

        return $this;
    }

    /**
     * Get gasSubtotal
     *
     * @return integer 
     */
    public function getGasSubtotal()
    {
        return $this->gasSubtotal;
    }

    /**
     * Set gasValor
     *
     * @param integer $gasValor
     * @return Gasto
     */
    public function setGasValor($gasValor)
    {
        $this->gasValor = $gasValor;

        return $this;
    }

    /**
     * Get gasValor
     *
     * @return integer 
     */
    public function getGasValor()
    {
        return $this->gasValor;
    }

    /**
     * Set gasReteFuente
     *
     * @param string $gasReteFuente
     * @return Gasto
     */
    public function setGasReteFuente($gasReteFuente)
    {
        $this->gasReteFuente = $gasReteFuente;

        return $this;
    }

    /**
     * Get gasReteFuente
     *
     * @return string 
     */
    public function getGasReteFuente()
    {
        return $this->gasReteFuente;
    }

    /**
     * Set gasReteIva
     *
     * @param string $gasReteIva
     * @return Gasto
     */
    public function setGasReteIva($gasReteIva)
    {
        $this->gasReteIva = $gasReteIva;

        return $this;
    }

    /**
     * Get gasReteIva
     *
     * @return string 
     */
    public function getGasReteIva()
    {
        return $this->gasReteIva;
    }

    /**
     * Set gasReteIca
     *
     * @param string $gasReteIca
     * @return Gasto
     */
    public function setGasReteIca($gasReteIca)
    {
        $this->gasReteIca = $gasReteIca;

        return $this;
    }

    /**
     * Get gasReteIca
     *
     * @return string 
     */
    public function getGasReteIca()
    {
        return $this->gasReteIca;
    }

    /**
     * Set gasNit
     *
     * @param string $gasNit
     * @return Gasto
     */
    public function setGasNit($gasNit)
    {
        $this->gasNit = $gasNit;

        return $this;
    }

    /**
     * Get gasNit
     *
     * @return string 
     */
    public function getGasNit()
    {
        return $this->gasNit;
    }

    /**
     * Set gasPersona
     *
     * @param string $gasPersona
     * @return Gasto
     */
    public function setGasPersona($gasPersona)
    {
        $this->gasPersona = $gasPersona;

        return $this;
    }

    /**
     * Get gasPersona
     *
     * @return string 
     */
    public function getGasPersona()
    {
        return $this->gasPersona;
    }

    /**
     * Set gasMovimientoContable
     *
     * @param integer $gasMovimientoContable
     * @return Gasto
     */
    public function setGasMovimientoContable($gasMovimientoContable)
    {
        $this->gasMovimientoContable = $gasMovimientoContable;

        return $this;
    }

    /**
     * Get gasMovimientoContable
     *
     * @return integer 
     */
    public function getGasMovimientoContable()
    {
        return $this->gasMovimientoContable;
    }

    /**
     * Set gasFecha
     *
     * @param \DateTime $gasFecha
     * @return Gasto
     */
    public function setGasFecha($gasFecha)
    {
        $this->gasFecha = $gasFecha;

        return $this;
    }

    /**
     * Get gasFecha
     *
     * @return \DateTime 
     */
    public function getGasFecha()
    {
        return $this->gasFecha;
    }

    /**
     * Set gasHora
     *
     * @param string $gasHora
     * @return Gasto
     */
    public function setGasHora($gasHora)
    {
        $this->gasHora = $gasHora;

        return $this;
    }

    /**
     * Get gasHora
     *
     * @return string 
     */
    public function getGasHora()
    {
        return $this->gasHora;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return Gasto
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
     * Set codFactura
     *
     * @param integer $codFactura
     * @return Gasto
     */
    public function setCodFactura($codFactura)
    {
        $this->codFactura = $codFactura;

        return $this;
    }

    /**
     * Get codFactura
     *
     * @return integer 
     */
    public function getCodFactura()
    {
        return $this->codFactura;
    }

    /**
     * Set codSeparado
     *
     * @param integer $codSeparado
     * @return Gasto
     */
    public function setCodSeparado($codSeparado)
    {
        $this->codSeparado = $codSeparado;

        return $this;
    }

    /**
     * Get codSeparado
     *
     * @return integer 
     */
    public function getCodSeparado()
    {
        return $this->codSeparado;
    }

    /**
     * Set codFacturaFisica
     *
     * @param string $codFacturaFisica
     * @return Gasto
     */
    public function setCodFacturaFisica($codFacturaFisica)
    {
        $this->codFacturaFisica = $codFacturaFisica;

        return $this;
    }

    /**
     * Get codFacturaFisica
     *
     * @return string 
     */
    public function getCodFacturaFisica()
    {
        return $this->codFacturaFisica;
    }

    /**
     * Set gasDescripcion
     *
     * @param string $gasDescripcion
     * @return Gasto
     */
    public function setGasDescripcion($gasDescripcion)
    {
        $this->gasDescripcion = $gasDescripcion;

        return $this;
    }

    /**
     * Get gasDescripcion
     *
     * @return string 
     */
    public function getGasDescripcion()
    {
        return $this->gasDescripcion;
    }

    /**
     * Set gasIva5
     *
     * @param integer $gasIva5
     * @return Gasto
     */
    public function setGasIva5($gasIva5)
    {
        $this->gasIva5 = $gasIva5;

        return $this;
    }

    /**
     * Get gasIva5
     *
     * @return integer 
     */
    public function getGasIva5()
    {
        return $this->gasIva5;
    }

    /**
     * Set codReciboMercancia
     *
     * @param integer $codReciboMercancia
     * @return Gasto
     */
    public function setCodReciboMercancia($codReciboMercancia)
    {
        $this->codReciboMercancia = $codReciboMercancia;

        return $this;
    }

    /**
     * Get codReciboMercancia
     *
     * @return integer 
     */
    public function getCodReciboMercancia()
    {
        return $this->codReciboMercancia;
    }

    /**
     * Set gasExento
     *
     * @param string $gasExento
     * @return Gasto
     */
    public function setGasExento($gasExento)
    {
        $this->gasExento = $gasExento;

        return $this;
    }

    /**
     * Get gasExento
     *
     * @return string 
     */
    public function getGasExento()
    {
        return $this->gasExento;
    }

    /**
     * Set gasExcluido
     *
     * @param string $gasExcluido
     * @return Gasto
     */
    public function setGasExcluido($gasExcluido)
    {
        $this->gasExcluido = $gasExcluido;

        return $this;
    }

    /**
     * Get gasExcluido
     *
     * @return string 
     */
    public function getGasExcluido()
    {
        return $this->gasExcluido;
    }

    /**
     * Set gasCodPagoRetencion
     *
     * @param integer $gasCodPagoRetencion
     * @return Gasto
     */
    public function setGasCodPagoRetencion($gasCodPagoRetencion)
    {
        $this->gasCodPagoRetencion = $gasCodPagoRetencion;

        return $this;
    }

    /**
     * Get gasCodPagoRetencion
     *
     * @return integer 
     */
    public function getGasCodPagoRetencion()
    {
        return $this->gasCodPagoRetencion;
    }

    /**
     * Set gasReteCree
     *
     * @param string $gasReteCree
     * @return Gasto
     */
    public function setGasReteCree($gasReteCree)
    {
        $this->gasReteCree = $gasReteCree;

        return $this;
    }

    /**
     * Get gasReteCree
     *
     * @return string 
     */
    public function getGasReteCree()
    {
        return $this->gasReteCree;
    }

    /**
     * Set gasAfectacaja
     *
     * @param string $gasAfectacaja
     * @return Gasto
     */
    public function setGasAfectacaja($gasAfectacaja)
    {
        $this->gasAfectacaja = $gasAfectacaja;

        return $this;
    }

    /**
     * Get gasAfectacaja
     *
     * @return string 
     */
    public function getGasAfectacaja()
    {
        return $this->gasAfectacaja;
    }
}
