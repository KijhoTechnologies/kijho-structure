<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion
 *
 * @ORM\Table(name="configuracion")
 * @ORM\Entity(repositoryClass="ConfiguracionRepository")
 */
class Configuracion {

    const MAINTENANCE_INACTIVE = 0;
    const MAINTENANCE_ACTIVE = 1;
    const CODE_NEW_LICENCE_NUMBER = 90;
    const CODE_MIN_NEED_SHOW_VIEW_LICENCE = 5;
    const CODE_INVERT_MEAN_LICENCE_EXPIRED = 1;
    const CODE_BAD_FORMAT = 99;
    const CODE_EXPIRED_LICENCE = 63;
    const CODE_INACTIVE_LICENCE = 64;
    const CODE_FILE_LICENCE_EMPTY = 97;
    const CODE_LICENCE_DATABASE_EMPTY = 96;
    const CODE_LICENCE_CODE_INVALID = 98;
    const CODE_REQUIRED_INTERNET = 0;
    const CODE_PROBLEM_STATUS_LSTM = 515;
    const CODE_LOCAL_LICENSOR = 1;
    const CODE_DEMO_LICENSOR = 2;
    const CODE_PROBLEM_WITH_NIT = 1;

    /**
     * @var integer
     *
     * @ORM\Column(name="conf_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $confCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_regimen", type="string", nullable=false)
     */
    private $confRegimen;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_tipoSeitem", type="string", length=200, nullable=true)
     */
    private $confTiposeitem;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_compras", type="string", nullable=false)
     */
    private $confCompras;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_balanza", type="string", nullable=false)
     */
    private $confBalanza;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_fechas", type="string", nullable=false)
     */
    private $confFechas;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_saldoAnterior", type="string", length=100, nullable=true)
     */
    private $confSaldoanterior;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_impresion_ventas", type="string", nullable=false)
     */
    private $confImpresionVentas;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_impresion_iva", type="string", nullable=true)
     */
    private $confImpresionIva;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_mensaje_cliAtrasados", type="string", nullable=true)
     */
    private $confMensajeCliatrasados;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_ruta_local", type="string", length=50, nullable=true)
     */
    private $confRutaLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_nit_client", type="string", length=50, nullable=true)
     */
    private $confNitClient;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_numero_licencia", type="string", length=100, nullable=true)
     */
    private $confNumeroLicencia;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_licencia_online", type="string", nullable=true)
     */
    private $confLicenciaOnline;

    /**
     * @var float
     *
     * @ORM\Column(name="conf_iva_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $confIva1;

    /**
     * @var float
     *
     * @ORM\Column(name="conf_iva_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $confIva2;

    /**
     * @var float
     *
     * @ORM\Column(name="conf_iva_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $confIva3;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_correo_backup_1", type="string", length=100, nullable=true)
     */
    private $confCorreoBackup1;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_correo_backup_2", type="string", length=100, nullable=true)
     */
    private $confCorreoBackup2;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_correo_backup_3", type="string", length=100, nullable=true)
     */
    private $confCorreoBackup3;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_enviar_reporte_email", type="string", nullable=true)
     */
    private $confEnviarReporteEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_correo_destinatario_1", type="string", length=100, nullable=true)
     */
    private $confCorreoDestinatario1;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_correo_destinatario_2", type="string", length=100, nullable=true)
     */
    private $confCorreoDestinatario2;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_correo_destinatario_3", type="string", length=100, nullable=true)
     */
    private $confCorreoDestinatario3;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_language", type="string", nullable=true)
     */
    private $confLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_inventario_negativo", type="string", nullable=true)
     */
    private $confInventarioNegativo;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_preguntar_licencia_local", type="string", nullable=true)
     */
    private $confPreguntarLicenciaLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_tipo_impresora_pos", type="string", nullable=false)
     */
    private $confTipoImpresoraPos;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_lista_facturas", type="string", nullable=true)
     */
    private $confListaFacturas;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_preguntar_numero_caja", type="string", nullable=true)
     */
    private $confPreguntarNumeroCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_obtener_peso_directo", type="string", nullable=true)
     */
    private $confObtenerPesoDirecto;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_Uvt", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $confUvt;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_decimales", type="string", nullable=true)
     */
    private $confDecimales;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_salario_minimo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $confSalarioMinimo;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_tarifa_retecree", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $confTarifaRetecree;

    /**
     * @var float
     *
     * @ORM\Column(name="conf_tarifa_reteiva", type="float", precision=10, scale=2, nullable=true)
     */
    private $confTarifaReteiva;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_ajustePeso", type="string", nullable=true)
     */
    private $confAjustepeso;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuento", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetadescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_nivelarInventario", type="string", nullable=true)
     */
    private $confNivelarinventario;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_resol_simplificado", type="string", nullable=true)
     */
    private $confResolSimplificado;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_multiple_pago", type="string", nullable=true)
     */
    private $confMultiplePago;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_vendedor", type="string", nullable=true)
     */
    private $confVendedor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="conf_fechaNivelarInv", type="date", nullable=true)
     */
    private $confFechanivelarinv;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_tipoUtilidad", type="string", options={"default" : "MATEMATICO"}, nullable=true)
     */
    private $confTipoutilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_bdCentralizada", type="string", nullable=true)
     */
    private $confBdcentralizada;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_urlBd", type="string", length=150, nullable=true)
     */
    private $confUrlbd;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_agregar_producto", type="string", nullable=true)
     */
    private $confAgregarProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_cambiar_precio_remision", type="string", nullable=true)
     */
    private $confCambiarPrecioRemision;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_imagen_cotizaciones", type="string", nullable=true)
     */
    private $confImagenCotizaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_afecta_caja", type="string", nullable=true)
     */
    private $confAfectaCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_dtoIva16", type="string", nullable=true)
     */
    private $confDtoiva16;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_depto", type="string", length=100, nullable=true)
     */
    private $confDepto;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_ciudad", type="string", length=100, nullable=true)
     */
    private $confCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_precio_producto_venta", type="string", nullable=true)
     */
    private $confPrecioProductoVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_condiconar_categoria", type="string", nullable=true)
     */
    private $confCondiconarCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_impr_vr_unit", type="string", nullable=true)
     */
    private $confImprVrUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_excel_contable", type="string", nullable=true)
     */
    private $confExcelContable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conf_concat_prod_categ", type="boolean", nullable=true)
     */
    private $confConcatProdCateg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conf_unidades_abonos", type="boolean", nullable=true)
     */
    private $confUnidadesAbonos;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_registrarEliminacionProductos", type="string", nullable=true)
     */
    private $confRegistrareliminacionproductos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conf_imprimir_fac_abonos", type="boolean", nullable=true)
     */
    private $confImprimirFacAbonos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conf_usuario_venta", type="boolean", nullable=true)
     */
    private $confUsuarioVenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conf_comentarios_venta", type="boolean", nullable=true)
     */
    private $confComentariosVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_dtoGeneral", type="string", nullable=true)
     */
    private $confDtogeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_procentajeDescVentas", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $confProcentajedescventas;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_inventario_actual", type="string", nullable=true)
     */
    private $confInventarioActual;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuento16", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetaDescuento16;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuento10", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetaDescuento10;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuento5", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetaDescuento5;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuentoExento", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetaDescuentoExento;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuentoExcluido", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetaDescuentoExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_zetaDescuentoSimplificado", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $confZetaDescuentoSimplificado;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_logo_original", type="string", length=100, options={"default" : "logoActual.jpg"}, nullable=true)
     */
    private $confLogoOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_logo_pdf", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoLogoPdf;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_posicion_logo_pdf", type="string", length=100, options={"default" : "center"}, nullable=true)
     */
    private $confPosicionLogoPdf;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_posicion_cabecera", type="string", length=100, options={"default" : "center"}, nullable=true)
     */
    private $confPosicionCabecera;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_forPago", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoForPago;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_cliente", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_vendedor", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoVendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_nit_cedula", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoNitCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_telefono", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_celular", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_direccion", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_ciudad", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_departamento", type="string", length=100, options={"default" : "Activo"}, nullable=true)
     */
    private $confEstadoDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_gestion_rutas_zonas", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confGestionRutasZonas;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_produ_cambio", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoProduCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_fecha_vencimiento", type="string", length=100, options={"default" : "Activado"}, nullable=true)
     */
    private $confFechaVencimiento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="conf_tituloFactura", type="string", length=100, options={"default" : "FACTURA DE VENTA"}, nullable=true)
     */
    private $confTituloFactura;


    /*
     * Atributos para tecnical service app
     */

    /**
     * @var string
     *
     * @ORM\Column(name="conf_email_1_reporte", type="string", length=100,  nullable=true)
     */
    private $confEmail1Reporte;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_email_2_reporte", type="string", length=100,  nullable=true)
     */
    private $confEmail2Reporte;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_mensaje_invent_negati", type="string", length=100, options={"default" : "Desactivado"},  nullable=true)
     */
    private $confMensajeInventNegati;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_historial_abono", type="string", length=100, options={"default" : "Activado"},  nullable=true)
     */
    private $confHistorialAbono;

    /*
     * FIN BLOQUE Atributos para tecnical service app
     */

    /**
     * Get confCodigo
     *
     * @return integer 
     */
    public function getConfCodigo() {
        return $this->confCodigo;
    }

    /**
     * Set confRegimen
     *
     * @param string $confRegimen
     * @return Configuracion
     */
    public function setConfRegimen($confRegimen) {
        $this->confRegimen = $confRegimen;

        return $this;
    }

    /**
     * Get confRegimen
     *
     * @return string 
     */
    public function getConfRegimen() {
        return $this->confRegimen;
    }

    /**
     * Set confTiposeitem
     *
     * @param string $confTiposeitem
     * @return Configuracion
     */
    public function setConfTiposeitem($confTiposeitem) {
        $this->confTiposeitem = $confTiposeitem;

        return $this;
    }

    /**
     * Get confTiposeitem
     *
     * @return string 
     */
    public function getConfTiposeitem() {
        return $this->confTiposeitem;
    }

    /**
     * Set confCompras
     *
     * @param string $confCompras
     * @return Configuracion
     */
    public function setConfCompras($confCompras) {
        $this->confCompras = $confCompras;

        return $this;
    }

    /**
     * Get confCompras
     *
     * @return string 
     */
    public function getConfCompras() {
        return $this->confCompras;
    }

    /**
     * Set confBalanza
     *
     * @param string $confBalanza
     * @return Configuracion
     */
    public function setConfBalanza($confBalanza) {
        $this->confBalanza = $confBalanza;

        return $this;
    }

    /**
     * Get confBalanza
     *
     * @return string 
     */
    public function getConfBalanza() {
        return $this->confBalanza;
    }

    /**
     * Set confFechas
     *
     * @param string $confFechas
     * @return Configuracion
     */
    public function setConfFechas($confFechas) {
        $this->confFechas = $confFechas;

        return $this;
    }

    /**
     * Get confFechas
     *
     * @return string 
     */
    public function getConfFechas() {
        return $this->confFechas;
    }

    /**
     * Set confSaldoanterior
     *
     * @param string $confSaldoanterior
     * @return Configuracion
     */
    public function setConfSaldoanterior($confSaldoanterior) {
        $this->confSaldoanterior = $confSaldoanterior;

        return $this;
    }

    /**
     * Get confSaldoanterior
     *
     * @return string 
     */
    public function getConfSaldoanterior() {
        return $this->confSaldoanterior;
    }

    /**
     * Set confImpresionVentas
     *
     * @param string $confImpresionVentas
     * @return Configuracion
     */
    public function setConfImpresionVentas($confImpresionVentas) {
        $this->confImpresionVentas = $confImpresionVentas;

        return $this;
    }

    /**
     * Get confImpresionVentas
     *
     * @return string 
     */
    public function getConfImpresionVentas() {
        return $this->confImpresionVentas;
    }

    /**
     * Set confImpresionIva
     *
     * @param string $confImpresionIva
     * @return Configuracion
     */
    public function setConfImpresionIva($confImpresionIva) {
        $this->confImpresionIva = $confImpresionIva;

        return $this;
    }

    /**
     * Get confImpresionIva
     *
     * @return string 
     */
    public function getConfImpresionIva() {
        return $this->confImpresionIva;
    }

    /**
     * Set confMensajeCliatrasados
     *
     * @param string $confMensajeCliatrasados
     * @return Configuracion
     */
    public function setConfMensajeCliatrasados($confMensajeCliatrasados) {
        $this->confMensajeCliatrasados = $confMensajeCliatrasados;

        return $this;
    }

    /**
     * Get confInventarioActual
     *
     * @return string 
     */
    public function getConfInventarioActual() {
        return $this->confInventarioActual;
    }

    /**
     * Set confInventarioActual
     *
     * @param string $confInventarioActual
     * @return Configuracion
     */
    public function setConfInventarioActual($confInventarioActual) {
        $this->confInventarioActual = $confInventarioActual;

        return $this;
    }

    /**
     * Get confMensajeCliatrasados
     *
     * @return string 
     */
    public function getConfMensajeCliatrasados() {
        return $this->confMensajeCliatrasados;
    }

    /**
     * Set confRutaLocal
     *
     * @param string $confRutaLocal
     * @return Configuracion
     */
    public function setConfRutaLocal($confRutaLocal) {
        $this->confRutaLocal = $confRutaLocal;

        return $this;
    }

    /**
     * Get confRutaLocal
     *
     * @return string 
     */
    public function getConfRutaLocal() {
        return $this->confRutaLocal;
    }

    /**
     * Set confNitClient
     *
     * @param string $confNitClient
     * @return Configuracion
     */
    public function setConfNitClient($confNitClient) {
        $this->confNitClient = $confNitClient;

        return $this;
    }

    /**
     * Get confNitClient
     *
     * @return string 
     */
    public function getConfNitClient() {
        return $this->confNitClient;
    }

    /**
     * Set confNumeroLicencia
     *
     * @param string $confNumeroLicencia
     * @return Configuracion
     */
    public function setConfNumeroLicencia($confNumeroLicencia) {
        $this->confNumeroLicencia = $confNumeroLicencia;

        return $this;
    }

    /**
     * Get confNumeroLicencia
     *
     * @return string 
     */
    public function getConfNumeroLicencia() {
        return $this->confNumeroLicencia;
    }

    /**
     * Set confLicenciaOnline
     *
     * @param string $confLicenciaOnline
     * @return Configuracion
     */
    public function setConfLicenciaOnline($confLicenciaOnline) {
        $this->confLicenciaOnline = $confLicenciaOnline;

        return $this;
    }

    /**
     * Get confLicenciaOnline
     *
     * @return string 
     */
    public function getConfLicenciaOnline() {
        return $this->confLicenciaOnline;
    }

    /**
     * Set confIva1
     *
     * @param float $confIva1
     * @return Configuracion
     */
    public function setConfIva1($confIva1) {
        $this->confIva1 = $confIva1;

        return $this;
    }

    /**
     * Get confIva1
     *
     * @return float 
     */
    public function getConfIva1() {
        return $this->confIva1;
    }

    /**
     * Set confIva2
     *
     * @param float $confIva2
     * @return Configuracion
     */
    public function setConfIva2($confIva2) {
        $this->confIva2 = $confIva2;

        return $this;
    }

    /**
     * Get confIva2
     *
     * @return float 
     */
    public function getConfIva2() {
        return $this->confIva2;
    }

    /**
     * Set confIva3
     *
     * @param float $confIva3
     * @return Configuracion
     */
    public function setConfIva3($confIva3) {
        $this->confIva3 = $confIva3;

        return $this;
    }

    /**
     * Get confIva3
     *
     * @return float 
     */
    public function getConfIva3() {
        return $this->confIva3;
    }

    /**
     * Set confCorreoBackup1
     *
     * @param string $confCorreoBackup1
     * @return Configuracion
     */
    public function setConfCorreoBackup1($confCorreoBackup1) {
        $this->confCorreoBackup1 = $confCorreoBackup1;

        return $this;
    }

    /**
     * Get confCorreoBackup1
     *
     * @return string 
     */
    public function getConfCorreoBackup1() {
        return $this->confCorreoBackup1;
    }

    /**
     * Set confCorreoBackup2
     *
     * @param string $confCorreoBackup2
     * @return Configuracion
     */
    public function setConfCorreoBackup2($confCorreoBackup2) {
        $this->confCorreoBackup2 = $confCorreoBackup2;

        return $this;
    }

    /**
     * Get confCorreoBackup2
     *
     * @return string 
     */
    public function getConfCorreoBackup2() {
        return $this->confCorreoBackup2;
    }

    /**
     * Set confCorreoBackup3
     *
     * @param string $confCorreoBackup3
     * @return Configuracion
     */
    public function setConfCorreoBackup3($confCorreoBackup3) {
        $this->confCorreoBackup3 = $confCorreoBackup3;

        return $this;
    }

    /**
     * Get confCorreoBackup3
     *
     * @return string 
     */
    public function getConfCorreoBackup3() {
        return $this->confCorreoBackup3;
    }

    /**
     * Set confEnviarReporteEmail
     *
     * @param string $confEnviarReporteEmail
     * @return Configuracion
     */
    public function setConfEnviarReporteEmail($confEnviarReporteEmail) {
        $this->confEnviarReporteEmail = $confEnviarReporteEmail;

        return $this;
    }

    /**
     * Get confEnviarReporteEmail
     *
     * @return string 
     */
    public function getConfEnviarReporteEmail() {
        return $this->confEnviarReporteEmail;
    }

    /**
     * Set confCorreoDestinatario1
     *
     * @param string $confCorreoDestinatario1
     * @return Configuracion
     */
    public function setConfCorreoDestinatario1($confCorreoDestinatario1) {
        $this->confCorreoDestinatario1 = $confCorreoDestinatario1;

        return $this;
    }

    /**
     * Get confCorreoDestinatario1
     *
     * @return string 
     */
    public function getConfCorreoDestinatario1() {
        return $this->confCorreoDestinatario1;
    }

    /**
     * Set confCorreoDestinatario2
     *
     * @param string $confCorreoDestinatario2
     * @return Configuracion
     */
    public function setConfCorreoDestinatario2($confCorreoDestinatario2) {
        $this->confCorreoDestinatario2 = $confCorreoDestinatario2;

        return $this;
    }

    /**
     * Get confCorreoDestinatario2
     *
     * @return string 
     */
    public function getConfCorreoDestinatario2() {
        return $this->confCorreoDestinatario2;
    }

    /**
     * Set confCorreoDestinatario3
     *
     * @param string $confCorreoDestinatario3
     * @return Configuracion
     */
    public function setConfCorreoDestinatario3($confCorreoDestinatario3) {
        $this->confCorreoDestinatario3 = $confCorreoDestinatario3;

        return $this;
    }

    /**
     * Get confCorreoDestinatario3
     *
     * @return string 
     */
    public function getConfCorreoDestinatario3() {
        return $this->confCorreoDestinatario3;
    }

    /**
     * Set confLanguage
     *
     * @param string $confLanguage
     * @return Configuracion
     */
    public function setConfLanguage($confLanguage) {
        $this->confLanguage = $confLanguage;

        return $this;
    }

    /**
     * Get confLanguage
     *
     * @return string 
     */
    public function getConfLanguage() {
        return $this->confLanguage;
    }

    /**
     * Set confInventarioNegativo
     *
     * @param string $confInventarioNegativo
     * @return Configuracion
     */
    public function setConfInventarioNegativo($confInventarioNegativo) {
        $this->confInventarioNegativo = $confInventarioNegativo;

        return $this;
    }

    /**
     * Get confInventarioNegativo
     *
     * @return string 
     */
    public function getConfInventarioNegativo() {
        return $this->confInventarioNegativo;
    }

    /**
     * Set confPreguntarLicenciaLocal
     *
     * @param string $confPreguntarLicenciaLocal
     * @return Configuracion
     */
    public function setConfPreguntarLicenciaLocal($confPreguntarLicenciaLocal) {
        $this->confPreguntarLicenciaLocal = $confPreguntarLicenciaLocal;

        return $this;
    }

    /**
     * Get confPreguntarLicenciaLocal
     *
     * @return string 
     */
    public function getConfPreguntarLicenciaLocal() {
        return $this->confPreguntarLicenciaLocal;
    }

    /**
     * Set confTipoImpresoraPos
     *
     * @param string $confTipoImpresoraPos
     * @return Configuracion
     */
    public function setConfTipoImpresoraPos($confTipoImpresoraPos) {
        $this->confTipoImpresoraPos = $confTipoImpresoraPos;

        return $this;
    }

    /**
     * Get confTipoImpresoraPos
     *
     * @return string 
     */
    public function getConfTipoImpresoraPos() {
        return $this->confTipoImpresoraPos;
    }

    /**
     * Set confListaFacturas
     *
     * @param string $confListaFacturas
     * @return Configuracion
     */
    public function setConfListaFacturas($confListaFacturas) {
        $this->confListaFacturas = $confListaFacturas;

        return $this;
    }

    /**
     * Get confListaFacturas
     *
     * @return string 
     */
    public function getConfListaFacturas() {
        return $this->confListaFacturas;
    }

    /**
     * Set confPreguntarNumeroCaja
     *
     * @param string $confPreguntarNumeroCaja
     * @return Configuracion
     */
    public function setConfPreguntarNumeroCaja($confPreguntarNumeroCaja) {
        $this->confPreguntarNumeroCaja = $confPreguntarNumeroCaja;

        return $this;
    }

    /**
     * Get confPreguntarNumeroCaja
     *
     * @return string 
     */
    public function getConfPreguntarNumeroCaja() {
        return $this->confPreguntarNumeroCaja;
    }

    /**
     * Set confObtenerPesoDirecto
     *
     * @param string $confObtenerPesoDirecto
     * @return Configuracion
     */
    public function setConfObtenerPesoDirecto($confObtenerPesoDirecto) {
        $this->confObtenerPesoDirecto = $confObtenerPesoDirecto;

        return $this;
    }

    /**
     * Get confObtenerPesoDirecto
     *
     * @return string 
     */
    public function getConfObtenerPesoDirecto() {
        return $this->confObtenerPesoDirecto;
    }

    /**
     * Set confUvt
     *
     * @param string $confUvt
     * @return Configuracion
     */
    public function setConfUvt($confUvt) {
        $this->confUvt = $confUvt;

        return $this;
    }

    /**
     * Get confUvt
     *
     * @return string 
     */
    public function getConfUvt() {
        return $this->confUvt;
    }

    /**
     * Set confDecimales
     *
     * @param string $confDecimales
     * @return Configuracion
     */
    public function setConfDecimales($confDecimales) {
        $this->confDecimales = $confDecimales;

        return $this;
    }

    /**
     * Get confDecimales
     *
     * @return string 
     */
    public function getConfDecimales() {
        return $this->confDecimales;
    }

    /**
     * Set confSalarioMinimo
     *
     * @param string $confSalarioMinimo
     * @return Configuracion
     */
    public function setConfSalarioMinimo($confSalarioMinimo) {
        $this->confSalarioMinimo = $confSalarioMinimo;

        return $this;
    }

    /**
     * Get confSalarioMinimo
     *
     * @return string 
     */
    public function getConfSalarioMinimo() {
        return $this->confSalarioMinimo;
    }

    /**
     * Set confTarifaRetecree
     *
     * @param string $confTarifaRetecree
     * @return Configuracion
     */
    public function setConfTarifaRetecree($confTarifaRetecree) {
        $this->confTarifaRetecree = $confTarifaRetecree;

        return $this;
    }

    /**
     * Get confTarifaRetecree
     *
     * @return string 
     */
    public function getConfTarifaRetecree() {
        return $this->confTarifaRetecree;
    }

    /**
     * Set confTarifaReteiva
     *
     * @param float $confTarifaReteiva
     * @return Configuracion
     */
    public function setConfTarifaReteiva($confTarifaReteiva) {
        $this->confTarifaReteiva = $confTarifaReteiva;

        return $this;
    }

    /**
     * Get confTarifaReteiva
     *
     * @return float 
     */
    public function getConfTarifaReteiva() {
        return $this->confTarifaReteiva;
    }

    /**
     * Set confAjustepeso
     *
     * @param string $confAjustepeso
     * @return Configuracion
     */
    public function setConfAjustepeso($confAjustepeso) {
        $this->confAjustepeso = $confAjustepeso;

        return $this;
    }

    /**
     * Get confAjustepeso
     *
     * @return string 
     */
    public function getConfAjustepeso() {
        return $this->confAjustepeso;
    }

    /**
     * Set confZetadescuento
     *
     * @param string $confZetadescuento
     * @return Configuracion
     */
    public function setConfZetadescuento($confZetadescuento) {
        $this->confZetadescuento = $confZetadescuento;

        return $this;
    }

    /**
     * Get confZetadescuento
     *
     * @return string 
     */
    public function getConfZetadescuento() {
        return $this->confZetadescuento;
    }

    /**
     * Set confNivelarinventario
     *
     * @param string $confNivelarinventario
     * @return Configuracion
     */
    public function setConfNivelarinventario($confNivelarinventario) {
        $this->confNivelarinventario = $confNivelarinventario;

        return $this;
    }

    /**
     * Get confNivelarinventario
     *
     * @return string 
     */
    public function getConfNivelarinventario() {
        return $this->confNivelarinventario;
    }

    /**
     * Set confResolSimplificado
     *
     * @param string $confResolSimplificado
     * @return Configuracion
     */
    public function setConfResolSimplificado($confResolSimplificado) {
        $this->confResolSimplificado = $confResolSimplificado;

        return $this;
    }

    /**
     * Get confResolSimplificado
     *
     * @return string 
     */
    public function getConfResolSimplificado() {
        return $this->confResolSimplificado;
    }

    /**
     * Set confMultiplePago
     *
     * @param string $confMultiplePago
     * @return Configuracion
     */
    public function setConfMultiplePago($confMultiplePago) {
        $this->confMultiplePago = $confMultiplePago;

        return $this;
    }

    /**
     * Get confMultiplePago
     *
     * @return string 
     */
    public function getConfMultiplePago() {
        return $this->confMultiplePago;
    }

    /**
     * Set confVendedor
     *
     * @param string $confVendedor
     * @return Configuracion
     */
    public function setConfVendedor($confVendedor) {
        $this->confVendedor = $confVendedor;

        return $this;
    }

    /**
     * Get confVendedor
     *
     * @return string 
     */
    public function getConfVendedor() {
        return $this->confVendedor;
    }

    /**
     * Set confFechanivelarinv
     *
     * @param \DateTime $confFechanivelarinv
     * @return Configuracion
     */
    public function setConfFechanivelarinv($confFechanivelarinv) {
        $this->confFechanivelarinv = $confFechanivelarinv;

        return $this;
    }

    /**
     * Get confFechanivelarinv
     *
     * @return \DateTime 
     */
    public function getConfFechanivelarinv() {
        return $this->confFechanivelarinv;
    }

    /**
     * Set confTipoutilidad
     *
     * @param string $confTipoutilidad
     * @return Configuracion
     */
    public function setConfTipoutilidad($confTipoutilidad) {
        $this->confTipoutilidad = $confTipoutilidad;

        return $this;
    }

    /**
     * Get confTipoutilidad
     *
     * @return string 
     */
    public function getConfTipoutilidad() {
        return $this->confTipoutilidad;
    }

    /**
     * Set confBdcentralizada
     *
     * @param string $confBdcentralizada
     * @return Configuracion
     */
    public function setConfBdcentralizada($confBdcentralizada) {
        $this->confBdcentralizada = $confBdcentralizada;

        return $this;
    }

    /**
     * Get confBdcentralizada
     *
     * @return string 
     */
    public function getConfBdcentralizada() {
        return $this->confBdcentralizada;
    }

    /**
     * Set confUrlbd
     *
     * @param string $confUrlbd
     * @return Configuracion
     */
    public function setConfUrlbd($confUrlbd) {
        $this->confUrlbd = $confUrlbd;

        return $this;
    }

    /**
     * Get confUrlbd
     *
     * @return string 
     */
    public function getConfUrlbd() {
        return $this->confUrlbd;
    }

    /**
     * Set confAgregarProducto
     *
     * @param string $confAgregarProducto
     * @return Configuracion
     */
    public function setConfAgregarProducto($confAgregarProducto) {
        $this->confAgregarProducto = $confAgregarProducto;

        return $this;
    }

    /**
     * Get confAgregarProducto
     *
     * @return string 
     */
    public function getConfAgregarProducto() {
        return $this->confAgregarProducto;
    }

    /**
     * Set confCambiarPrecioRemision
     *
     * @param string $confCambiarPrecioRemision
     * @return Configuracion
     */
    public function setConfCambiarPrecioRemision($confCambiarPrecioRemision) {
        $this->confCambiarPrecioRemision = $confCambiarPrecioRemision;

        return $this;
    }

    /**
     * Get confCambiarPrecioRemision
     *
     * @return string 
     */
    public function getConfCambiarPrecioRemision() {
        return $this->confCambiarPrecioRemision;
    }

    /**
     * Set confImagenCotizaciones
     *
     * @param string $confImagenCotizaciones
     * @return Configuracion
     */
    public function setConfImagenCotizaciones($confImagenCotizaciones) {
        $this->confImagenCotizaciones = $confImagenCotizaciones;

        return $this;
    }

    /**
     * Get confImagenCotizaciones
     *
     * @return string 
     */
    public function getConfImagenCotizaciones() {
        return $this->confImagenCotizaciones;
    }

    /**
     * Set confAfectaCaja
     *
     * @param string $confAfectaCaja
     * @return Configuracion
     */
    public function setConfAfectaCaja($confAfectaCaja) {
        $this->confAfectaCaja = $confAfectaCaja;

        return $this;
    }

    /**
     * Get confAfectaCaja
     *
     * @return string 
     */
    public function getConfAfectaCaja() {
        return $this->confAfectaCaja;
    }

    /**
     * Set confDtoiva16
     *
     * @param string $confDtoiva16
     * @return Configuracion
     */
    public function setConfDtoiva16($confDtoiva16) {
        $this->confDtoiva16 = $confDtoiva16;

        return $this;
    }

    /**
     * Get confDtoiva16
     *
     * @return string 
     */
    public function getConfDtoiva16() {
        return $this->confDtoiva16;
    }

    /**
     * Set confDepto
     *
     * @param string $confDepto
     * @return Configuracion
     */
    public function setConfDepto($confDepto) {
        $this->confDepto = $confDepto;

        return $this;
    }

    /**
     * Get confDepto
     *
     * @return string 
     */
    public function getConfDepto() {
        return $this->confDepto;
    }

    /**
     * Set confCiudad
     *
     * @param string $confCiudad
     * @return Configuracion
     */
    public function setConfCiudad($confCiudad) {
        $this->confCiudad = $confCiudad;

        return $this;
    }

    /**
     * Get confCiudad
     *
     * @return string 
     */
    public function getConfCiudad() {
        return $this->confCiudad;
    }

    /**
     * Set confPrecioProductoVenta
     *
     * @param string $confPrecioProductoVenta
     * @return Configuracion
     */
    public function setConfPrecioProductoVenta($confPrecioProductoVenta) {
        $this->confPrecioProductoVenta = $confPrecioProductoVenta;

        return $this;
    }

    /**
     * Get confPrecioProductoVenta
     *
     * @return string 
     */
    public function getConfPrecioProductoVenta() {
        return $this->confPrecioProductoVenta;
    }

    /**
     * Set confCondiconarCategoria
     *
     * @param string $confCondiconarCategoria
     * @return Configuracion
     */
    public function setConfCondiconarCategoria($confCondiconarCategoria) {
        $this->confCondiconarCategoria = $confCondiconarCategoria;

        return $this;
    }

    /**
     * Get confCondiconarCategoria
     *
     * @return string 
     */
    public function getConfCondiconarCategoria() {
        return $this->confCondiconarCategoria;
    }

    /**
     * Set confImprVrUnit
     *
     * @param string $confImprVrUnit
     * @return Configuracion
     */
    public function setConfImprVrUnit($confImprVrUnit) {
        $this->confImprVrUnit = $confImprVrUnit;

        return $this;
    }

    /**
     * Get confImprVrUnit
     *
     * @return string 
     */
    public function getConfImprVrUnit() {
        return $this->confImprVrUnit;
    }

    /**
     * Set confExcelContable
     *
     * @param string $confExcelContable
     * @return Configuracion
     */
    public function setConfExcelContable($confExcelContable) {
        $this->confExcelContable = $confExcelContable;

        return $this;
    }

    /**
     * Get confExcelContable
     *
     * @return string 
     */
    public function getConfExcelContable() {
        return $this->confExcelContable;
    }

    /**
     * Set confConcatProdCateg
     *
     * @param boolean $confConcatProdCateg
     * @return Configuracion
     */
    public function setConfConcatProdCateg($confConcatProdCateg) {
        $this->confConcatProdCateg = $confConcatProdCateg;

        return $this;
    }

    /**
     * Get confConcatProdCateg
     *
     * @return boolean 
     */
    public function getConfConcatProdCateg() {
        return $this->confConcatProdCateg;
    }

    /**
     * Set confUnidadesAbonos
     *
     * @param boolean $confUnidadesAbonos
     * @return Configuracion
     */
    public function setConfUnidadesAbonos($confUnidadesAbonos) {
        $this->confUnidadesAbonos = $confUnidadesAbonos;

        return $this;
    }

    /**
     * Get confUnidadesAbonos
     *
     * @return boolean 
     */
    public function getConfUnidadesAbonos() {
        return $this->confUnidadesAbonos;
    }

    /**
     * Set confRegistrareliminacionproductos
     *
     * @param string $confRegistrareliminacionproductos
     * @return Configuracion
     */
    public function setConfRegistrareliminacionproductos($confRegistrareliminacionproductos) {
        $this->confRegistrareliminacionproductos = $confRegistrareliminacionproductos;

        return $this;
    }

    /**
     * Get confRegistrareliminacionproductos
     *
     * @return string 
     */
    public function getConfRegistrareliminacionproductos() {
        return $this->confRegistrareliminacionproductos;
    }

    /**
     * Set confImprimirFacAbonos
     *
     * @param boolean $confImprimirFacAbonos
     * @return Configuracion
     */
    public function setConfImprimirFacAbonos($confImprimirFacAbonos) {
        $this->confImprimirFacAbonos = $confImprimirFacAbonos;

        return $this;
    }

    /**
     * Get confImprimirFacAbonos
     *
     * @return boolean 
     */
    public function getConfImprimirFacAbonos() {
        return $this->confImprimirFacAbonos;
    }

    /**
     * Set confUsuarioVenta
     *
     * @param boolean $confUsuarioVenta
     * @return Configuracion
     */
    public function setConfUsuarioVenta($confUsuarioVenta) {
        $this->confUsuarioVenta = $confUsuarioVenta;

        return $this;
    }

    /**
     * Get confUsuarioVenta
     *
     * @return boolean 
     */
    public function getConfUsuarioVenta() {
        return $this->confUsuarioVenta;
    }

    /**
     * Set confComentariosVenta
     *
     * @param boolean $confComentariosVenta
     * @return Configuracion
     */
    public function setConfComentariosVenta($confComentariosVenta) {
        $this->confComentariosVenta = $confComentariosVenta;

        return $this;
    }

    /**
     * Get confComentariosVenta
     *
     * @return boolean 
     */
    public function getConfComentariosVenta() {
        return $this->confComentariosVenta;
    }

    /**
     * Set confDtogeneral
     *
     * @param string $confDtogeneral
     * @return Configuracion
     */
    public function setConfDtogeneral($confDtogeneral) {
        $this->confDtogeneral = $confDtogeneral;

        return $this;
    }

    /**
     * Get confDtogeneral
     *
     * @return string 
     */
    public function getConfDtogeneral() {
        return $this->confDtogeneral;
    }

    /**
     * Set confProcentajedescventas
     *
     * @param string $confProcentajedescventas
     * @return Configuracion
     */
    public function setConfProcentajedescventas($confProcentajedescventas) {
        $this->confProcentajedescventas = $confProcentajedescventas;

        return $this;
    }

    /**
     * Get confProcentajedescventas
     *
     * @return string 
     */
    public function getConfProcentajedescventas() {
        return $this->confProcentajedescventas;
    }

    /**
     * Set confZetaDescuento16
     *
     * @param string $confZetaDescuento16
     * @return Configuracion
     */
    public function setConfZetaDescuento16($confZetaDescuento16) {
        $this->confZetaDescuento16 = $confZetaDescuento16;

        return $this;
    }

    /**
     * Get confZetaDescuento16
     *
     * @return string 
     */
    public function getConfZetaDescuento16() {
        return $this->confZetaDescuento16;
    }

    /**
     * Set confZetaDescuento10
     *
     * @param string $confZetaDescuento10
     * @return Configuracion
     */
    public function setConfZetaDescuento10($confZetaDescuento10) {
        $this->confZetaDescuento10 = $confZetaDescuento10;

        return $this;
    }

    /**
     * Get confZetaDescuento10
     *
     * @return string 
     */
    public function getConfZetaDescuento10() {
        return $this->confZetaDescuento10;
    }

    /**
     * Set confZetaDescuento5
     *
     * @param string $confZetaDescuento5
     * @return Configuracion
     */
    public function setConfZetaDescuento5($confZetaDescuento5) {
        $this->confZetaDescuento5 = $confZetaDescuento5;

        return $this;
    }

    /**
     * Get confZetaDescuento5
     *
     * @return string 
     */
    public function getConfZetaDescuento5() {
        return $this->confZetaDescuento5;
    }

    /**
     * Set confZetaDescuentoExento
     *
     * @param string $confZetaDescuentoExento
     * @return Configuracion
     */
    public function setConfZetaDescuentoExento($confZetaDescuentoExento) {
        $this->confZetaDescuentoExento = $confZetaDescuentoExento;

        return $this;
    }

    /**
     * Get confZetaDescuentoExento
     *
     * @return string 
     */
    public function getConfZetaDescuentoExento() {
        return $this->confZetaDescuentoExento;
    }

    /**
     * Set confZetaDescuentoExcluido
     *
     * @param string $confZetaDescuentoExcluido
     * @return Configuracion
     */
    public function setConfZetaDescuentoExcluido($confZetaDescuentoExcluido) {
        $this->confZetaDescuentoExcluido = $confZetaDescuentoExcluido;

        return $this;
    }

    /**
     * Get confZetaDescuentoExcluido
     *
     * @return string 
     */
    public function getConfZetaDescuentoExcluido() {
        return $this->confZetaDescuentoExcluido;
    }

    /**
     * Set confZetaDescuentoSimplificado
     *
     * @param string $confZetaDescuentoSimplificado
     * @return Configuracion
     */
    public function setConfZetaDescuentoSimplificado($confZetaDescuentoSimplificado) {
        $this->confZetaDescuentoSimplificado = $confZetaDescuentoSimplificado;

        return $this;
    }

    /**
     * Get confZetaDescuentoSimplificado
     *
     * @return string 
     */
    public function getConfZetaDescuentoSimplificado() {
        return $this->confZetaDescuentoSimplificado;
    }

    /**
     * Get confLogoOriginal
     *
     * @return string 
     */
    function getConfLogoOriginal() {
        return $this->confLogoOriginal;
    }

    /**
     * Set confLogoOriginal
     *
     * @param string $confLogoOriginal
     * @return Configuracion
     */
    function setConfLogoOriginal($confLogoOriginal) {
        $this->confLogoOriginal = $confLogoOriginal;
    }

    /**
     * Get confPosicionCabecera
     *
     * @return string 
     */
    function getConfPosicionCabecera() {
        return $this->confPosicionCabecera;
    }

    /**
     * Get confEstadoForPago
     *
     * @return string 
     */
    function getConfEstadoForPago() {
        return $this->confEstadoForPago;
    }

    /**
     * Get confEstadoCliente
     *
     * @return string 
     */
    function getConfEstadoCliente() {
        return $this->confEstadoCliente;
    }

    /**
     * Get confEstadoVendedor
     *
     * @return string 
     */
    function getConfEstadoVendedor() {
        return $this->confEstadoVendedor;
    }

    /**
     * Get confEstadoNitCedula
     *
     * @return string 
     */
    function getConfEstadoNitCedula() {
        return $this->confEstadoNitCedula;
    }

    /**
     * Get confEstadoTelefono
     *
     * @return string 
     */
    function getConfEstadoTelefono() {
        return $this->confEstadoTelefono;
    }

    /**
     * Get confEstadoCelular
     *
     * @return string 
     */
    function getConfEstadoCelular() {
        return $this->confEstadoCelular;
    }

    /**
     * Get confEstadoDireccion
     *
     * @return string 
     */
    function getConfEstadoDireccion() {
        return $this->confEstadoDireccion;
    }

    /**
     * Get confEstadoCiudad
     *
     * @return string 
     */
    function getConfEstadoCiudad() {
        return $this->confEstadoCiudad;
    }

    /**
     * Set confPosicionCabecera 
     *
     * @param string $confPosicionCabecera
     * @return Configuracion
     */
    function setConfPosicionCabecera($confPosicionCabecera) {
        $this->confPosicionCabecera = $confPosicionCabecera;
    }

    /**
     * Set confEstadoForPago
     *
     * @param string $confEstadoForPago
     * @return Configuracion
     */
    function setConfEstadoForPago($confEstadoForPago) {
        $this->confEstadoForPago = $confEstadoForPago;
    }

    /**
     * Set confEstadoForPago
     *
     * @param string $confEstadoForPago
     * @return Configuracion
     */
    function setConfEstadoCliente($confEstadoCliente) {
        $this->confEstadoForPago = $confEstadoCliente;
    }

    /**
     * Set confEstadoVendedor 
     *
     * @param string $confEstadoVendedor 
     * @return Configuracion
     */
    function setConfEstadoVendedor($confEstadoVendedor) {
        $this->confEstadoVendedor = $confEstadoVendedor;
    }

    /**
     * Set confEstadoNitCedula 
     *
     * @param string $confEstadoNitCedula
     * @return Configuracion
     */
    function setConfEstadoNitCedula($confEstadoNitCedula) {
        $this->confEstadoNitCedula = $confEstadoNitCedula;
    }

    /**
     * Set confEstadoTelefono 
     *
     * @param string $confEstadoTelefono
     * @return Configuracion
     */
    function setConfEstadoTelefono($confEstadoTelefono) {
        $this->confEstadoTelefono = $confEstadoTelefono;
    }

    /**
     * Set confEstadoCelular 
     *
     * @param string $confEstadoCelular
     * @return Configuracion
     */
    function setConfEstadoCelular($confEstadoCelular) {
        $this->confEstadoCelular = $confEstadoCelular;
    }

    /**
     * Set confEstadoDireccion 
     *
     * @param string $confEstadoDireccion
     * @return Configuracion
     */
    function setConfEstadoDireccion($confEstadoDireccion) {
        $this->confEstadoDireccion = $confEstadoDireccion;
    }

    /**
     * Set confEstadoCiudad  
     *
     * @param string $confEstadoCiudad  
     * @return Configuracion
     */
    function setConfEstadoCiudad($confEstadoCiudad) {
        $this->confEstadoCiudad = $confEstadoCiudad;
    }

    /**
     * Get confEstadoDepartamento
     *
     * @return string 
     */
    function getConfEstadoDepartamento() {
        return $this->confEstadoDepartamento;
    }

    /**
     * Set confEstadoDepartamento 
     *
     * @param string $confEstadoDepartamento 
     * @return Configuracion
     */
    function setConfEstadoDepartamento($confEstadoDepartamento) {
        $this->confEstadoDepartamento = $confEstadoDepartamento;
    }

    /**
     * Get confGestionRutasZonas
     *
     * @return string 
     */
    function getConfGestionRutasZonas() {
        return $this->confGestionRutasZonas;
    }

    /**
     * Set confGestionRutasZonas 
     *
     * @param string $confGestionRutasZonas
     * @return Configuracion
     */
    function setConfGestionRutasZonas($confGestionRutasZonas) {
        $this->confGestionRutasZonas = $confGestionRutasZonas;
    }

    /**
     * Get confEstadoProduCambio
     *
     * @return string 
     */
    function getConfEstadoProduCambio() {
        return $this->confEstadoProduCambio;
    }

    /**
     * Set confEstadoProduCambio
     *
     * @param string $confEstadoProduCambio
     * @return Configuracion
     */
    function setConfEstadoProduCambio($confEstadoProduCambio) {
        $this->confEstadoProduCambio = $confEstadoProduCambio;
    }

    /**
     * Get confFechaVencimiento
     *
     * @return string 
     */
    function getConfFechaVencimiento() {
        return $this->confFechaVencimiento;
    }

    /**
     * Set confFechaVencimiento
     *
     * @param string $confFechaVencimiento
     * @return Configuracion
     */
    function setConfFechaVencimiento($confFechaVencimiento) {
        $this->confFechaVencimiento = $confFechaVencimiento;
    }

    function getConfEstadoLogoPdf() {
        return $this->confEstadoLogoPdf;
    }

    function getConfPosicionLogoPdf() {
        return $this->confPosicionLogoPdf;
    }

    function setConfEstadoLogoPdf($confEstadoLogoPdf) {
        $this->confEstadoLogoPdf = $confEstadoLogoPdf;
    }

    function setConfPosicionLogoPdf($confPosicionLogoPdf) {
        $this->confPosicionLogoPdf = $confPosicionLogoPdf;
    }
    
    function getConfTituloFactura() {
        return $this->confTituloFactura;
    }

    function setConfTituloFactura($confTituloFactura) {
        $this->confTituloFactura = $confTituloFactura;
    }

    function getConfEmail1Reporte() {
        return $this->confEmail1Reporte;
    }

    function getConfEmail2Reporte() {
        return $this->confEmail2Reporte;
    }

    function setConfEmail1Reporte($confEmail1Reporte) {
        $this->confEmail1Reporte = $confEmail1Reporte;
    }

    function setConfEmail2Reporte($confEmail2Reporte) {
        $this->confEmail2Reporte = $confEmail2Reporte;
    }

    function getConfMensajeInventNegati() {
        return $this->confMensajeInventNegati;
    }

    function setConfMensajeInventNegati($confMensajeInventNegati) {
        $this->confMensajeInventNegati = $confMensajeInventNegati;
    }

    function getConfHistorialAbono() {
        return $this->confHistorialAbono;
    }

    function setConfHistorialAbono($confHistorialAbono) {
        $this->confHistorialAbono = $confHistorialAbono;
    }

}
