<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Separado
 *
 * @ORM\Table(name="separado")
 * @ORM\Entity(repositoryClass="SeparadoRepository")
 */
class Separado {

    const SEPARADO_FACTURADO_NO = 'No';
    const SEPARADO_FACTURADO_SI = 'Si';
    const SEPARADO_ANULADO_NO = 'No';
    const SEPARADO_ANULADO_SI = 'Si';

    /**
     * @var integer
     *
     * @ORM\Column(name="sep_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sepCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_facturado", type="string", length=255, nullable=false)
     */
    private $sepFacturado;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_vendedor", type="string", length=100, nullable=true)
     */
    private $sepVendedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sep_fecha", type="date", nullable=true)
     */
    private $sepFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_hora", type="string", length=100, nullable=true)
     */
    private $sepHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="sep_abono_inicial", type="integer", nullable=true)
     */
    private $sepAbonoInicial;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_total", type="decimal", precision=30, scale=3, nullable=true)
     */
    private $sepTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_ajustePeso", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sepAjustepeso;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_estado", type="string", length=11, nullable=true)
     */
    private $sepEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_anulada", type="string", length=255, nullable=false)
     */
    private $sepAnulada;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_descuento", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $sepDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_iva", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $sepIva;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_iva16", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_iva10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_iva_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepIvaExento;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_iva_excluido", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepIvaExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_retencion", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepRetencion;

    /**
     * @var integer
     *
     * @ORM\Column(name="sep_movimiento_Contable", type="integer", nullable=true)
     */
    private $sepMovimientoContable;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_domicilio", type="string", length=50, nullable=true)
     */
    private $sepDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_motivo_descuento", type="string", length=100, nullable=true)
     */
    private $sepMotivoDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_tarjeta", type="string", nullable=false)
     */
    private $tipoTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tarjeta", type="string", length=60, nullable=false)
     */
    private $nombreTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_voucher", type="string", length=30, nullable=false)
     */
    private $codVoucher;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_iva5", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $sepIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="sep_monto_tarjeta", type="decimal", precision=30, scale=3, nullable=false)
     */
    private $sepMontoTarjeta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sep_fecha_pago", type="date", nullable=true)
     */
    private $sepFechaPago;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sep_descuentoProducto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sepDescuentoProducto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sep_descuentoCliente", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sepDescuentoCliente;

    function getSepCodigo() {
        return $this->sepCodigo;
    }

    function getSepFacturado() {
        return $this->sepFacturado;
    }

    function getCliCodigo() {
        return $this->cliCodigo;
    }

    function getSepVendedor() {
        return $this->sepVendedor;
    }

    function getUsuCodigo() {
        return $this->usuCodigo;
    }

    function getSepFecha() {
        return $this->sepFecha;
    }

    function getSepHora() {
        return $this->sepHora;
    }

    function getSepAbonoInicial() {
        return $this->sepAbonoInicial;
    }

    function getSepTotal() {
        return $this->sepTotal;
    }

    function getSepAjustepeso() {
        return $this->sepAjustepeso;
    }

    function getSepEstado() {
        return $this->sepEstado;
    }

    function getSepAnulada() {
        return $this->sepAnulada;
    }

    function getSepDescuento() {
        return $this->sepDescuento;
    }

    function getSepIva() {
        return $this->sepIva;
    }

    function getSepIva16() {
        return $this->sepIva16;
    }

    function getSepIva10() {
        return $this->sepIva10;
    }

    function getSepIvaExento() {
        return $this->sepIvaExento;
    }

    function getSepIvaExcluido() {
        return $this->sepIvaExcluido;
    }

    function getSepRetencion() {
        return $this->sepRetencion;
    }

    function getSepMovimientoContable() {
        return $this->sepMovimientoContable;
    }

    function getSepDomicilio() {
        return $this->sepDomicilio;
    }

    function getSepMotivoDescuento() {
        return $this->sepMotivoDescuento;
    }

    function getCodCaja() {
        return $this->codCaja;
    }

    function getTipoTarjeta() {
        return $this->tipoTarjeta;
    }

    function getNombreTarjeta() {
        return $this->nombreTarjeta;
    }

    function getCodVoucher() {
        return $this->codVoucher;
    }

    function getSepIva5() {
        return $this->sepIva5;
    }

    function getSepMontoTarjeta() {
        return $this->sepMontoTarjeta;
    }

    function getSepFechaPago() {
        return $this->sepFechaPago;
    }
    function getSepDescuentoProducto() {
        return $this->sepDescuentoProducto;
    }
    function getSepDescuentoCliente() {
        return $this->sepDescuentoCliente;
    }

    function setSepCodigo($sepCodigo) {
        $this->sepCodigo = $sepCodigo;
    }

    function setSepFacturado($sepFacturado) {
        $this->sepFacturado = $sepFacturado;
    }

    function setCliCodigo($cliCodigo) {
        $this->cliCodigo = $cliCodigo;
    }

    function setSepVendedor($sepVendedor) {
        $this->sepVendedor = $sepVendedor;
    }

    function setUsuCodigo($usuCodigo) {
        $this->usuCodigo = $usuCodigo;
    }

    function setSepFecha(\DateTime $sepFecha) {
        $this->sepFecha = $sepFecha;
    }

    function setSepHora($sepHora) {
        $this->sepHora = $sepHora;
    }

    function setSepAbonoInicial($sepAbonoInicial) {
        $this->sepAbonoInicial = $sepAbonoInicial;
    }

    function setSepTotal($sepTotal) {
        $this->sepTotal = $sepTotal;
    }

    function setSepAjustepeso($sepAjustepeso) {
        $this->sepAjustepeso = $sepAjustepeso;
    }

    function setSepEstado($sepEstado) {
        $this->sepEstado = $sepEstado;
    }

    function setSepAnulada($sepAnulada) {
        $this->sepAnulada = $sepAnulada;
    }

    function setSepDescuento($sepDescuento) {
        $this->sepDescuento = $sepDescuento;
    }

    function setSepIva($sepIva) {
        $this->sepIva = $sepIva;
    }

    function setSepIva16($sepIva16) {
        $this->sepIva16 = $sepIva16;
    }

    function setSepIva10($sepIva10) {
        $this->sepIva10 = $sepIva10;
    }

    function setSepIvaExento($sepIvaExento) {
        $this->sepIvaExento = $sepIvaExento;
    }

    function setSepIvaExcluido($sepIvaExcluido) {
        $this->sepIvaExcluido = $sepIvaExcluido;
    }

    function setSepRetencion($sepRetencion) {
        $this->sepRetencion = $sepRetencion;
    }

    function setSepMovimientoContable($sepMovimientoContable) {
        $this->sepMovimientoContable = $sepMovimientoContable;
    }

    function setSepDomicilio($sepDomicilio) {
        $this->sepDomicilio = $sepDomicilio;
    }

    function setSepMotivoDescuento($sepMotivoDescuento) {
        $this->sepMotivoDescuento = $sepMotivoDescuento;
    }

    function setCodCaja($codCaja) {
        $this->codCaja = $codCaja;
    }

    function setTipoTarjeta($tipoTarjeta) {
        $this->tipoTarjeta = $tipoTarjeta;
    }

    function setNombreTarjeta($nombreTarjeta) {
        $this->nombreTarjeta = $nombreTarjeta;
    }

    function setCodVoucher($codVoucher) {
        $this->codVoucher = $codVoucher;
    }

    function setSepIva5($sepIva5) {
        $this->sepIva5 = $sepIva5;
    }

    function setSepMontoTarjeta($sepMontoTarjeta) {
        $this->sepMontoTarjeta = $sepMontoTarjeta;
    }

    function setSepFechaPago($sepFechaPago) {
        $this->sepFechaPago = $sepFechaPago;
    }
    function setSepDescuentoProducto($sepDescuentoProducto) {
        $this->sepDescuentoProducto = $sepDescuentoProducto;
    }
    function setSepDescuentoCliente($sepDescuentoCliente) {
        $this->sepDescuentoCliente = $sepDescuentoCliente;
    }

}
