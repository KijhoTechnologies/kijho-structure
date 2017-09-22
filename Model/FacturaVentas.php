<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * FacturaVentas
 *
 * 
 * @ORM\Table(name="factura_ventas")
 * @ORM\Entity(repositoryClass="FacturaVentasRepository")
 */
class FacturaVentas {

    //Factura Pendiente
    const OUTSTANDING_INVOICE = 2;
    //Factura Saldada
    const PAID_INVOICE = 1;
    //Constantes de respuesta de error
    const INVOICE_VALUE_ERROR = 'INV-ER-02';
    const NOT_INVOICES_USER = 'INV-ER-01'; //Usuario no tiene facturas del día - No ha realizado ventas

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $facvCodigo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cli_codigo", referencedColumnName="cli_codigo")
     */
    private $cliCodigo;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Vendedor")
     * @ORM\JoinColumn(name="facv_vendedor", referencedColumnName="id_vendedor", nullable=true)
     */
    private $facvVendedor;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usu_codigo", referencedColumnName="usu_codigo", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facv_fecha", type="date", nullable=true)
     */
    private $facvFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_hora", type="string", length=100, nullable=true)
     */
    private $facvHora;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_total", type="decimal", precision=30, scale=3, nullable=true)
     */
    private $facvTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_ajustePeso", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facvAjustepeso;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_estado", type="integer", nullable=true)
     */
    private $facvEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_separado", type="integer", nullable=true)
     */
    private $facvSeparado;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_anulada", type="string", nullable=false)
     */
    private $facvAnulada;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_descuento", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $facvDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_descuentoProducto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facvDescuentoProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_descuentoCliente", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facvDescuentoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_iva", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $facvIva;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_iva16", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facvIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_iva10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facvIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_iva_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facvIvaExento;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_iva_excluido", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facvIvaExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_retencion", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facvRetencion;

    /**
     * @var float
     *
     * @ORM\Column(name="fact_reteiva", type="float", precision=11, scale=3, nullable=true)
     */
    private $factReteiva;

    /**
     * @var float
     *
     * @ORM\Column(name="fact_reteica", type="float", precision=11, scale=3, nullable=true)
     */
    private $factReteica;

    /**
     * @var float
     *
     * @ORM\Column(name="fact_retecree", type="float", precision=11, scale=3, nullable=true)
     */
    private $factRetecree;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_movimiento_Contable", type="integer", nullable=true)
     */
    private $facvMovimientoContable;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_domicilio", type="string", length=50, nullable=true)
     */
    private $facvDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_motivo_descuento", type="string", length=100, nullable=true)
     */
    private $facvMotivoDescuento;

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
     * @ORM\Column(name="facv_iva5", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $facvIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_monto_tarjeta", type="decimal", precision=30, scale=3, nullable=false)
     */
    private $facvMontoTarjeta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facv_fecha_pago", type="date", nullable=true)
     */
    private $facvFechaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_resolucion", type="integer", nullable=true)
     */
    private $facvResolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="facv_firma", type="string", length=60, nullable=true)
     */
    private $facvFirma;

    /**
     * @ORM\OneToMany(targetEntity="FacturasPorCobrar", mappedBy="facvCodigo")
     */
    private $facPorCobrar;

    /**
     * @ORM\OneToMany(targetEntity="ClienteRegalo", mappedBy="invoice")
     */
    private $giftClient;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Ruta")
     * @ORM\JoinColumn(name="ruta", referencedColumnName="id")
     */
    private $ruta;

    /**
     * 
     * @ORM\OneToMany(targetEntity="Salida", mappedBy="facvCodigo")
     */
    private $items;

    /**
     * 
     * @ORM\OneToMany(targetEntity="SalidaAnulada", mappedBy="facvCodigo")
     */
    private $itemsCanceled;

    /**
     * @ORM\OneToMany(targetEntity="ComentariosFactura", mappedBy="facvCodigo")
     */
    private $comentarios;

    /**
     * @ORM\Column(name="only_change", type="boolean", nullable=false)
     */
    private $onlyChange;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="facvCliNombre", type="string",  length=100, nullable=true)
     */
    private $facv_cli_nombre;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="facvCliCedula", type="string",  length=20, nullable=true)
     */
    private $facvCliCedula;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="facv_cli_telefono", type="string", length=50, nullable=true)
     */
    private $facCliTelefono;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="facv_cli_direccion", type="string", length=100, nullable=true)
     */
    private $facvCliDireccion;

    /**
     *  Atributo para restaurant app
     * 
     * @var float
     *
     * @ORM\Column(name="facv_impConsumo", type="float", precision=10, scale=2,options={"default" : "0.00"}, nullable=true)
     */
    private $facvImpConsumo;

    /**
     *  Atributo para restaurant app
     * 
     * @var integer
     *
     * @ORM\Column(name="facv_mesa", type="integer", nullable=true)
     */
    private $facvMesa;

    /**
     *  Atributo para restaurant app
     * 
     * @var float
     *
     * @ORM\Column(name="facv_propina", type="float", precision=11, scale=3, nullable=true)
     */
    private $facvPropina;

    /**
     *  Atributo para restaurant app
     * 
     * @var float
     *
     * @ORM\Column(name="facv_propina_tarjeta", length=1, type="integer",options={"default" : "0"}, nullable=true)
     */
    private $facvPropinaTarjeta;

    /**
     *  Atributo para restaurant app
     * 
     * @var float
     *
     * @ORM\Column(name="facv_aplicar_ImpConsumo", length=1, type="integer",options={"default" : "0"}, nullable=true)
     */
    private $facvAplicarImpConsumo;

    public function __construct() {
        $this->items = new ArrayCollection();
        $this->itemsCanceled = new ArrayCollection();
        $this->comentarios = new ArrayCollection();
        $this->onlyChange = False;
    }

    public function getItems() {
        return $this->items;
    }

    public function getItemsCanceled() {
        return $this->itemsCanceled;
    }

    /**
     * Get facvCodigo
     *
     * @return integer 
     */
    public function getFacvCodigo() {
        return $this->facvCodigo;
    }

    public function getFacPorCobrar() {
        return $this->facPorCobrar;
    }

    public function setFacPorCobrar(FacturasPorCobrar $fpc) {
        $this->facPorCobrar = $fpc;
        return $this;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return FacturaVentas
     */
    public function setCliCodigo(Cliente $cliente) {
        $this->cliCodigo = $cliente;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo() {
        return $this->cliCodigo;
    }

    /**
     * Set facvVendedor
     *
     * @param string $facvVendedor
     * @return FacturaVentas
     */
    public function setFacvVendedor(Vendedor $facvVendedor) {
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

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return FacturaVentas
     */
    public function setUsuCodigo(Usuario $usuCodigo) {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo() {
        return $this->usuCodigo;
    }

    /**
     * Set facvFecha
     *
     * @param \DateTime $facvFecha
     * @return FacturaVentas
     */
    public function setFacvFecha($facvFecha) {
        $this->facvFecha = $facvFecha;

        return $this;
    }

    /**
     * Get facvFecha
     *
     * @return \DateTime 
     */
    public function getFacvFecha() {
        return $this->facvFecha;
    }

    /**
     * Set facvHora
     *
     * @param string $facvHora
     * @return FacturaVentas
     */
    public function setFacvHora($facvHora) {
        $this->facvHora = $facvHora;

        return $this;
    }

    /**
     * Get facvHora
     *
     * @return string 
     */
    public function getFacvHora() {
        return $this->facvHora;
    }

    /**
     * Set facvTotal
     *
     * @param string $facvTotal
     * @return FacturaVentas
     */
    public function setFacvTotal($facvTotal) {
        $this->facvTotal = $facvTotal;

        return $this;
    }

    /**
     * Get facvTotal
     *
     * @return string 
     */
    public function getFacvTotal() {
        return $this->facvTotal;
    }

    /**
     * Set facvAjustepeso
     *
     * @param string $facvAjustepeso
     * @return FacturaVentas
     */
    public function setFacvAjustepeso($facvAjustepeso) {
        $this->facvAjustepeso = $facvAjustepeso;

        return $this;
    }

    /**
     * Get facvAjustepeso
     *
     * @return string 
     */
    public function getFacvAjustepeso() {
        return $this->facvAjustepeso;
    }

    /**
     * Set facvEstado
     *
     * @param integer $facvEstado
     * @return FacturaVentas
     */
    public function setFacvEstado($facvEstado) {
        $this->facvEstado = $facvEstado;

        return $this;
    }

    /**
     * Get facvEstado
     *
     * @return integer 
     */
    public function getFacvEstado() {
        return $this->facvEstado;
    }

    /**
     * Set facvSeparado
     *
     * @param integer $facvSeparado
     * @return FacturaVentas
     */
    public function setFacvSeparado($facvSeparado) {
        $this->facvSeparado = $facvSeparado;

        return $this;
    }

    /**
     * Get facvSeparado
     *
     * @return integer 
     */
    public function getFacvSeparado() {
        return $this->facvSeparado;
    }

    /**
     * Set facvAnulada
     *
     * @param string $facvAnulada
     * @return FacturaVentas
     */
    public function setFacvAnulada($facvAnulada) {
        $this->facvAnulada = $facvAnulada;

        return $this;
    }

    /**
     * Get facvAnulada
     *
     * @return string 
     */
    public function getFacvAnulada() {
        return $this->facvAnulada;
    }

    /**
     * Set facvDescuento
     *
     * @param string $facvDescuento
     * @return FacturaVentas
     */
    public function setFacvDescuento($facvDescuento) {
        $this->facvDescuento = $facvDescuento;

        return $this;
    }

    /**
     * Get facvDescuento
     *
     * @return string 
     */
    public function getFacvDescuento() {
        return $this->facvDescuento;
    }

    /**
     * Set facvIva
     *
     * @param string $facvIva
     * @return FacturaVentas
     */
    public function setFacvIva($facvIva) {
        $this->facvIva = $facvIva;

        return $this;
    }

    /**
     * Get facvIva
     *
     * @return string 
     */
    public function getFacvIva() {
        return $this->facvIva;
    }

    /**
     * Set facvIva16
     *
     * @param string $facvIva16
     * @return FacturaVentas
     */
    public function setFacvIva16($facvIva16) {
        $this->facvIva16 = $facvIva16;

        return $this;
    }

    /**
     * Get facvIva16
     *
     * @return string 
     */
    public function getFacvIva16() {
        return $this->facvIva16;
    }

    /**
     * Set facvIva10
     *
     * @param string $facvIva10
     * @return FacturaVentas
     */
    public function setFacvIva10($facvIva10) {
        $this->facvIva10 = $facvIva10;

        return $this;
    }

    /**
     * Get facvIva10
     *
     * @return string 
     */
    public function getFacvIva10() {
        return $this->facvIva10;
    }

    /**
     * Set facvIvaExento
     *
     * @param string $facvIvaExento
     * @return FacturaVentas
     */
    public function setFacvIvaExento($facvIvaExento) {
        $this->facvIvaExento = $facvIvaExento;

        return $this;
    }

    /**
     * Get facvIvaExento
     *
     * @return string 
     */
    public function getFacvIvaExento() {
        return $this->facvIvaExento;
    }

    /**
     * Set facvIvaExcluido
     *
     * @param string $facvIvaExcluido
     * @return FacturaVentas
     */
    public function setFacvIvaExcluido($facvIvaExcluido) {
        $this->facvIvaExcluido = $facvIvaExcluido;

        return $this;
    }

    /**
     * Get facvIvaExcluido
     *
     * @return string 
     */
    public function getFacvIvaExcluido() {
        return $this->facvIvaExcluido;
    }

    /**
     * Set facvRetencion
     *
     * @param string $facvRetencion
     * @return FacturaVentas
     */
    public function setFacvRetencion($facvRetencion) {
        $this->facvRetencion = $facvRetencion;

        return $this;
    }

    /**
     * Get facvRetencion
     *
     * @return string 
     */
    public function getFacvRetencion() {
        return $this->facvRetencion;
    }

    /**
     * Set factReteiva
     *
     * @param float $factReteiva
     * @return FacturaVentas
     */
    public function setFactReteiva($factReteiva) {
        $this->factReteiva = $factReteiva;

        return $this;
    }

    /**
     * Get factReteiva
     *
     * @return float 
     */
    public function getFactReteiva() {
        return $this->factReteiva;
    }

    /**
     * Set factReteica
     *
     * @param float $factReteica
     * @return FacturaVentas
     */
    public function setFactReteica($factReteica) {
        $this->factReteica = $factReteica;

        return $this;
    }

    /**
     * Get factReteica
     *
     * @return float 
     */
    public function getFactReteica() {
        return $this->factReteica;
    }

    /**
     * Set factRetecree
     *
     * @param float $factRetecree
     * @return FacturaVentas
     */
    public function setFactRetecree($factRetecree) {
        $this->factRetecree = $factRetecree;

        return $this;
    }

    /**
     * Get factRetecree
     *
     * @return float 
     */
    public function getFactRetecree() {
        return $this->factRetecree;
    }

    /**
     * Set facvMovimientoContable
     *
     * @param integer $facvMovimientoContable
     * @return FacturaVentas
     */
    public function setFacvMovimientoContable($facvMovimientoContable) {
        $this->facvMovimientoContable = $facvMovimientoContable;

        return $this;
    }

    /**
     * Get facvMovimientoContable
     *
     * @return integer 
     */
    public function getFacvMovimientoContable() {
        return $this->facvMovimientoContable;
    }

    /**
     * Set facvDomicilio
     *
     * @param string $facvDomicilio
     * @return FacturaVentas
     */
    public function setFacvDomicilio($facvDomicilio) {
        $this->facvDomicilio = $facvDomicilio;

        return $this;
    }

    /**
     * Get facvDomicilio
     *
     * @return string 
     */
    public function getFacvDomicilio() {
        return $this->facvDomicilio;
    }

    /**
     * Set facvMotivoDescuento
     *
     * @param string $facvMotivoDescuento
     * @return FacturaVentas
     */
    public function setFacvMotivoDescuento($facvMotivoDescuento) {
        $this->facvMotivoDescuento = $facvMotivoDescuento;

        return $this;
    }

    /**
     * Get facvMotivoDescuento
     *
     * @return string 
     */
    public function getFacvMotivoDescuento() {
        return $this->facvMotivoDescuento;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return FacturaVentas
     */
    public function setCodCaja($codCaja) {
        $this->codCaja = $codCaja;

        return $this;
    }

    /**
     * Get codCaja
     *
     * @return integer 
     */
    public function getCodCaja() {
        return $this->codCaja;
    }

    /**
     * Set tipoTarjeta
     *
     * @param string $tipoTarjeta
     * @return FacturaVentas
     */
    public function setTipoTarjeta($tipoTarjeta) {
        $this->tipoTarjeta = $tipoTarjeta;

        return $this;
    }

    /**
     * Get tipoTarjeta
     *
     * @return string 
     */
    public function getTipoTarjeta() {
        return $this->tipoTarjeta;
    }

    /**
     * Set nombreTarjeta
     *
     * @param string $nombreTarjeta
     * @return FacturaVentas
     */
    public function setNombreTarjeta($nombreTarjeta) {
        $this->nombreTarjeta = $nombreTarjeta;

        return $this;
    }

    /**
     * Get nombreTarjeta
     *
     * @return string 
     */
    public function getNombreTarjeta() {
        return $this->nombreTarjeta;
    }

    /**
     * Set codVoucher
     *
     * @param string $codVoucher
     * @return FacturaVentas
     */
    public function setCodVoucher($codVoucher) {
        $this->codVoucher = $codVoucher;

        return $this;
    }

    /**
     * Get codVoucher
     *
     * @return string 
     */
    public function getCodVoucher() {
        return $this->codVoucher;
    }

    /**
     * Set facvIva5
     *
     * @param string $facvIva5
     * @return FacturaVentas
     */
    public function setFacvIva5($facvIva5) {
        $this->facvIva5 = $facvIva5;

        return $this;
    }

    /**
     * Get facvIva5
     *
     * @return string 
     */
    public function getFacvIva5() {
        return $this->facvIva5;
    }

    /**
     * Set facvMontoTarjeta
     *
     * @param string $facvMontoTarjeta
     * @return FacturaVentas
     */
    public function setFacvMontoTarjeta($facvMontoTarjeta) {
        $this->facvMontoTarjeta = $facvMontoTarjeta;

        return $this;
    }

    /**
     * Get facvMontoTarjeta
     *
     * @return string 
     */
    public function getFacvMontoTarjeta() {
        return $this->facvMontoTarjeta;
    }

    /**
     * Set facvFechaPago
     *
     * @param \DateTime $facvFechaPago
     * @return FacturaVentas
     */
    public function setFacvFechaPago($facvFechaPago) {
        $this->facvFechaPago = $facvFechaPago;

        return $this;
    }

    /**
     * Get facvFechaPago
     *
     * @return \DateTime 
     */
    public function getFacvFechaPago() {
        return $this->facvFechaPago;
    }

    /**
     * Set facvResolucion
     *
     * @param integer $facvResolucion
     * @return FacturaVentas
     */
    public function setFacvResolucion($facvResolucion) {
        $this->facvResolucion = $facvResolucion;

        return $this;
    }

    /**
     * Get facvResolucion
     *
     * @return integer 
     */
    public function getFacvResolucion() {
        return $this->facvResolucion;
    }

    public function setRuta(Ruta $ruta = NULL) {
        $this->ruta = $ruta;
        return $this;
    }

    public function getRuta() {
        return $this->ruta;
    }

    function getComentarios() {
        return $this->comentarios;
    }

    function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }

    function getOnlyChange() {
        return $this->onlyChange;
    }

    function setOnlyChange($onlyChange) {
        $this->onlyChange = $onlyChange;
    }

    function getGiftClient() {
        return $this->giftClient;
    }

    function setGiftClient($giftClient) {
        $this->giftClient = $giftClient;
    }

    function getFacvDescuentoProducto() {
        return $this->facvDescuentoProducto;
    }

    function getFacvDescuentoCliente() {
        return $this->facvDescuentoCliente;
    }

    function setFacvDescuentoProducto($facvDescuentoProducto) {
        $this->facvDescuentoProducto = $facvDescuentoProducto;
    }

    function setFacvDescuentoCliente($facvDescuentoCliente) {
        $this->facvDescuentoCliente = $facvDescuentoCliente;
    }

    function getFacvFirma() {
        return $this->facvFirma;
    }

    function setFacvFirma($facvFirma) {
        $this->facvFirma = $facvFirma;
    }

    function getFacv_cli_nombre() {
        return $this->facv_cli_nombre;
    }

    function getFacvCliCedula() {
        return $this->facvCliCedula;
    }

    function getFacCliTelefono() {
        return $this->facCliTelefono;
    }

    function getFacvCliDireccion() {
        return $this->facvCliDireccion;
    }

    function setFacv_cli_nombre($facv_cli_nombre) {
        $this->facv_cli_nombre = $facv_cli_nombre;
    }

    function setFacvCliCedula($facvCliCedula) {
        $this->facvCliCedula = $facvCliCedula;
    }

    function setFacCliTelefono($facCliTelefono) {
        $this->facCliTelefono = $facCliTelefono;
    }

    function setFacvCliDireccion($facvCliDireccion) {
        $this->facvCliDireccion = $facvCliDireccion;
    }
    function getFacvImpConsumo() {
        return $this->facvImpConsumo;
    }

    function getFacvMesa() {
        return $this->facvMesa;
    }

    function getFacvPropina() {
        return $this->facvPropina;
    }

    function getFacvPropinaTarjeta() {
        return $this->facvPropinaTarjeta;
    }

    function getFacvAplicarImpConsumo() {
        return $this->facvAplicarImpConsumo;
    }

    function setFacvImpConsumo($facvImpConsumo) {
        $this->facvImpConsumo = $facvImpConsumo;
    }

    function setFacvMesa($facvMesa) {
        $this->facvMesa = $facvMesa;
    }

    function setFacvPropina($facvPropina) {
        $this->facvPropina = $facvPropina;
    }

    function setFacvPropinaTarjeta($facvPropinaTarjeta) {
        $this->facvPropinaTarjeta = $facvPropinaTarjeta;
    }

    function setFacvAplicarImpConsumo($facvAplicarImpConsumo) {
        $this->facvAplicarImpConsumo = $facvAplicarImpConsumo;
    }


}
