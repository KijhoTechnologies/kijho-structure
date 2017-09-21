<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfiguracionFactura
 *
 * @ORM\Table(name="configuracion_factura")
 * @ORM\Entity(repositoryClass="ConfiguracionFacturaRepository")
 */
class ConfiguracionFactura {

    /**
     * @var integer
     *
     * @ORM\Column(name="confac_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $confacCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_nombre_empresa", type="string", length=50, nullable=true)
     */
    private $confacNombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_nit", type="string", length=50, nullable=true)
     */
    private $confacNit;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_direccion", type="string", length=50, nullable=true)
     */
    private $confacDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_cuidad_telefono", type="string", length=50, nullable=true)
     */
    private $confacCuidadTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_prefijo_factura", type="string", length=100, nullable=true)
     */
    private $confacPrefijoFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_a", type="string", length=50, nullable=true)
     */
    private $confacTextoA;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_b", type="string", length=50, nullable=true)
     */
    private $confacTextoB;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_c", type="string", length=50, nullable=true)
     */
    private $confacTextoC;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_d", type="string", length=50, nullable=true)
     */
    private $confacTextoD;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_e", type="string", length=50, nullable=true)
     */
    private $confacTextoE;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_nombre_empresa_x", type="string", length=255, nullable=true)
     */
    private $confacNombreEmpresaX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_nit_x", type="string", length=255, nullable=true)
     */
    private $confacNitX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_direccion_x", type="string", length=255, nullable=true)
     */
    private $confacDireccionX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_cuidad_telefono_x", type="string", length=255, nullable=true)
     */
    private $confacCuidadTelefonoX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_a_x", type="string", length=255, nullable=true)
     */
    private $confacTextoAX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_b_x", type="string", length=255, nullable=true)
     */
    private $confacTextoBX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_c_x", type="string", length=255, nullable=true)
     */
    private $confacTextoCX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_d_x", type="string", length=255, nullable=true)
     */
    private $confacTextoDX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_texto_e_x", type="string", length=255, nullable=true)
     */
    private $confacTextoEX;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_logo_x", type="string", length=255, nullable=true)
     */
    private $confacLogoX;

    /**
     * @var integer
     *
     * @ORM\Column(name="confac_posicion_producto", type="integer", nullable=true)
     */
    private $confacPosicionProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="confac_caracteres_producto", type="integer", nullable=true)
     */
    private $confacCaracteresProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_logo_original", type="string", length=100, nullable=true)
     */
    private $confLogoOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_logo_pos", type="string", length=100, nullable=true)
     */
    private $confLogoEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_cabecera_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoCabeceraPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_numero_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoNumeroPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_fecha_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoFechaPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_nit_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoNitPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_cliente_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoClientePos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_direccion_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoDireccionPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_ciudad_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoCiudadPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_telefono_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoTelefonoPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_celular_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoCelularPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_vendedor_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoVendedorPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_zona_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoZonaPos;

    /**
     * @var string
     *
     * @ORM\Column(name="confac_estado_ruta_pos", type="string", length=100, options={"default" : "Desactivado"}, nullable=true)
     */
    private $confEstadoRutaPos;

    /**
     * @var string
     *
     * @ORM\Column(name="conf_estado_firma_seitem", type="string", length=100, options={"default" : "firmaLogo"}, nullable=true)
     */
    private $confEstadoFirmaSeitem;

    /**
     *  Atributo para restaurant app
     * 
     * @var string
     *
     * @ORM\Column(name="confac_propina", length=5, type="string",  options={"default" : "NO"}, nullable=true)
     */
    private $confacPropina;

    /**
     *  Atributo para restaurant app
     * 
     * @var float
     *
     * @ORM\Column(name="confac_propina_porcentaje", type="float", precision=4, scale=1, nullable=true)
     */
    private $confacPropinaPorcentaje;

    /**
     *  Atributo para restaurant app
     * 
     * @var string
     *
     * @ORM\Column(name="confac_stado_logo", type="string",  options={"default" : "Activado"}, nullable=true)
     */
    private $confacStadoLogo;

    /**
     *  Atributo para restaurant app
     * 
     * @var string
     *
     * @ORM\Column(name="confac_firma_seitem", type="string",  options={"default" : "firmaLogo"}, nullable=true)
     */
    private $confacFirmaSeitem;

    /**
     *  Atributo para restaurant app
     * 
     * @var string
     *
     * @ORM\Column(name="confac_logo_empresa", length=100, type="string",  options={"default" : "logoActual.jpg"}, nullable=true)
     */
    private $confac_logo_empresa;

    function getConfacCodigo() {
        return $this->confacCodigo;
    }

    function getConfacNombreEmpresa() {
        return $this->confacNombreEmpresa;
    }

    function getConfacNit() {
        return $this->confacNit;
    }

    function getConfacDireccion() {
        return $this->confacDireccion;
    }

    function getConfacCuidadTelefono() {
        return $this->confacCuidadTelefono;
    }

    function getConfacPrefijoFactura() {
        return $this->confacPrefijoFactura;
    }

    function getConfacTextoA() {
        return $this->confacTextoA;
    }

    function getConfacTextoB() {
        return $this->confacTextoB;
    }

    function getConfacTextoC() {
        return $this->confacTextoC;
    }

    function getConfacTextoD() {
        return $this->confacTextoD;
    }

    function getConfacTextoE() {
        return $this->confacTextoE;
    }

    function getConfacNombreEmpresaX() {
        return $this->confacNombreEmpresaX;
    }

    function getConfacNitX() {
        return $this->confacNitX;
    }

    function getConfacDireccionX() {
        return $this->confacDireccionX;
    }

    function getConfacCuidadTelefonoX() {
        return $this->confacCuidadTelefonoX;
    }

    function getConfacTextoAX() {
        return $this->confacTextoAX;
    }

    function getConfacTextoBX() {
        return $this->confacTextoBX;
    }

    function getConfacTextoCX() {
        return $this->confacTextoCX;
    }

    function getConfacTextoDX() {
        return $this->confacTextoDX;
    }

    function getConfacTextoEX() {
        return $this->confacTextoEX;
    }

    function getConfacLogoX() {
        return $this->confacLogoX;
    }

    function getConfacPosicionProducto() {
        return $this->confacPosicionProducto;
    }

    function getConfacCaracteresProducto() {
        return $this->confacCaracteresProducto;
    }

    function getConfLogoOriginal() {
        return $this->confLogoOriginal;
    }

    function getConfLogoEstado() {
        return $this->confLogoEstado;
    }

    function getConfEstadoCabeceraPos() {
        return $this->confEstadoCabeceraPos;
    }

    function getConfEstadoNumeroPos() {
        return $this->confEstadoNumeroPos;
    }

    function getConfEstadoFechaPos() {
        return $this->confEstadoFechaPos;
    }

    function getConfEstadoNitPos() {
        return $this->confEstadoNitPos;
    }

    function getConfEstadoClientePos() {
        return $this->confEstadoClientePos;
    }

    function getConfEstadoDireccionPos() {
        return $this->confEstadoDireccionPos;
    }

    function getConfEstadoCiudadPos() {
        return $this->confEstadoCiudadPos;
    }

    function getConfEstadoTelefonoPos() {
        return $this->confEstadoTelefonoPos;
    }

    function getConfEstadoCelularPos() {
        return $this->confEstadoCelularPos;
    }

    function getConfEstadoVendedorPos() {
        return $this->confEstadoVendedorPos;
    }

    function getConfEstadoZonaPos() {
        return $this->confEstadoZonaPos;
    }

    function getConfEstadoRutaPos() {
        return $this->confEstadoRutaPos;
    }

    function getConfEstadoFirmaSeitem() {
        return $this->confEstadoFirmaSeitem;
    }

    function setConfacCodigo($confacCodigo) {
        $this->confacCodigo = $confacCodigo;
    }

    function setConfacNombreEmpresa($confacNombreEmpresa) {
        $this->confacNombreEmpresa = $confacNombreEmpresa;
    }

    function setConfacNit($confacNit) {
        $this->confacNit = $confacNit;
    }

    function setConfacDireccion($confacDireccion) {
        $this->confacDireccion = $confacDireccion;
    }

    function setConfacCuidadTelefono($confacCuidadTelefono) {
        $this->confacCuidadTelefono = $confacCuidadTelefono;
    }

    function setConfacPrefijoFactura($confacPrefijoFactura) {
        $this->confacPrefijoFactura = $confacPrefijoFactura;
    }

    function setConfacTextoA($confacTextoA) {
        $this->confacTextoA = $confacTextoA;
    }

    function setConfacTextoB($confacTextoB) {
        $this->confacTextoB = $confacTextoB;
    }

    function setConfacTextoC($confacTextoC) {
        $this->confacTextoC = $confacTextoC;
    }

    function setConfacTextoD($confacTextoD) {
        $this->confacTextoD = $confacTextoD;
    }

    function setConfacTextoE($confacTextoE) {
        $this->confacTextoE = $confacTextoE;
    }

    function setConfacNombreEmpresaX($confacNombreEmpresaX) {
        $this->confacNombreEmpresaX = $confacNombreEmpresaX;
    }

    function setConfacNitX($confacNitX) {
        $this->confacNitX = $confacNitX;
    }

    function setConfacDireccionX($confacDireccionX) {
        $this->confacDireccionX = $confacDireccionX;
    }

    function setConfacCuidadTelefonoX($confacCuidadTelefonoX) {
        $this->confacCuidadTelefonoX = $confacCuidadTelefonoX;
    }

    function setConfacTextoAX($confacTextoAX) {
        $this->confacTextoAX = $confacTextoAX;
    }

    function setConfacTextoBX($confacTextoBX) {
        $this->confacTextoBX = $confacTextoBX;
    }

    function setConfacTextoCX($confacTextoCX) {
        $this->confacTextoCX = $confacTextoCX;
    }

    function setConfacTextoDX($confacTextoDX) {
        $this->confacTextoDX = $confacTextoDX;
    }

    function setConfacTextoEX($confacTextoEX) {
        $this->confacTextoEX = $confacTextoEX;
    }

    function setConfacLogoX($confacLogoX) {
        $this->confacLogoX = $confacLogoX;
    }

    function setConfacPosicionProducto($confacPosicionProducto) {
        $this->confacPosicionProducto = $confacPosicionProducto;
    }

    function setConfacCaracteresProducto($confacCaracteresProducto) {
        $this->confacCaracteresProducto = $confacCaracteresProducto;
    }

    function setConfLogoOriginal($confLogoOriginal) {
        $this->confLogoOriginal = $confLogoOriginal;
    }

    function setConfLogoEstado($confLogoEstado) {
        $this->confLogoEstado = $confLogoEstado;
    }

    function setConfEstadoCabeceraPos($confEstadoCabeceraPos) {
        $this->confEstadoCabeceraPos = $confEstadoCabeceraPos;
    }

    function setConfEstadoNumeroPos($confEstadoNumeroPos) {
        $this->confEstadoNumeroPos = $confEstadoNumeroPos;
    }

    function setConfEstadoFechaPos($confEstadoFechaPos) {
        $this->confEstadoFechaPos = $confEstadoFechaPos;
    }

    function setConfEstadoNitPos($confEstadoNitPos) {
        $this->confEstadoNitPos = $confEstadoNitPos;
    }

    function setConfEstadoClientePos($confEstadoClientePos) {
        $this->confEstadoClientePos = $confEstadoClientePos;
    }

    function setConfEstadoDireccionPos($confEstadoDireccionPos) {
        $this->confEstadoDireccionPos = $confEstadoDireccionPos;
    }

    function setConfEstadoCiudadPos($confEstadoCiudadPos) {
        $this->confEstadoCiudadPos = $confEstadoCiudadPos;
    }

    function setConfEstadoTelefonoPos($confEstadoTelefonoPos) {
        $this->confEstadoTelefonoPos = $confEstadoTelefonoPos;
    }

    function setConfEstadoCelularPos($confEstadoCelularPos) {
        $this->confEstadoCelularPos = $confEstadoCelularPos;
    }

    function setConfEstadoVendedorPos($confEstadoVendedorPos) {
        $this->confEstadoVendedorPos = $confEstadoVendedorPos;
    }

    function setConfEstadoZonaPos($confEstadoZonaPos) {
        $this->confEstadoZonaPos = $confEstadoZonaPos;
    }

    function setConfEstadoRutaPos($confEstadoRutaPos) {
        $this->confEstadoRutaPos = $confEstadoRutaPos;
    }

    function setConfEstadoFirmaSeitem($confEstadoFirmaSeitem) {
        $this->confEstadoFirmaSeitem = $confEstadoFirmaSeitem;
    }

    function getConfacPropina() {
        return $this->confacPropina;
    }

    function getConfacPropinaPorcentaje() {
        return $this->confacPropinaPorcentaje;
    }

    function getConfacStadoLogo() {
        return $this->confacStadoLogo;
    }

    function getConfacFirmaSeitem() {
        return $this->confacFirmaSeitem;
    }

    function getConfac_logo_empresa() {
        return $this->confac_logo_empresa;
    }

    function setConfacPropina($confacPropina) {
        $this->confacPropina = $confacPropina;
    }

    function setConfacPropinaPorcentaje($confacPropinaPorcentaje) {
        $this->confacPropinaPorcentaje = $confacPropinaPorcentaje;
    }

    function setConfacStadoLogo($confacStadoLogo) {
        $this->confacStadoLogo = $confacStadoLogo;
    }

    function setConfacFirmaSeitem($confacFirmaSeitem) {
        $this->confacFirmaSeitem = $confacFirmaSeitem;
    }

    function setConfac_logo_empresa($confac_logo_empresa) {
        $this->confac_logo_empresa = $confac_logo_empresa;
    }

}
