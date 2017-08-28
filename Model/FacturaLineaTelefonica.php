<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * SEITEM SERVICIO TECNICO

 * FacturasPorPagar
 *
 * @ORM\Table(name="factura_linea_telefonica")
 * @ORM\Entity
 */
class FacturaLineaTelefonica {

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faclCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_linea", type="integer", nullable=false)
     */
    private $codigoLinea;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_cliente", type="integer", nullable=false)
     */
    private $codigoCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_precio_compra_minuto", type="integer", nullable=false)
     */
    private $faclPrecioCompraMinuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_precio_venta_minuto", type="integer", nullable=false)
     */
    private $faclPrecioVentaMinuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_cantidad_minutos", type="integer", nullable=false)
     */
    private $faclCantidadMinutos;

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_total", type="integer", nullable=false)
     */
    private $faclTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_fecha", type="date", nullable=false)
     */
    private $faclFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="facl_hora", type="string", length=100, nullable=true)
     */
    private $faclHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="facl_observacion", type="string", nullable=true)
     */
    private $faclObservacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    function getFaclCodigo() {
        return $this->faclCodigo;
    }

    function getCodigoLinea() {
        return $this->codigoLinea;
    }

    function getCodigoCliente() {
        return $this->codigoCliente;
    }

    function getFaclPrecioCompraMinuto() {
        return $this->faclPrecioCompraMinuto;
    }

    function getFaclPrecioVentaMinuto() {
        return $this->faclPrecioVentaMinuto;
    }

    function getFaclCantidadMinutos() {
        return $this->faclCantidadMinutos;
    }

    function getFaclTotal() {
        return $this->faclTotal;
    }

    function getFaclFecha() {
        return $this->faclFecha;
    }

    function getFaclHora() {
        return $this->faclHora;
    }

    function getFaclObservacion() {
        return $this->faclObservacion;
    }

    function getUsuCodigo() {
        return $this->usuCodigo;
    }

    function getCodCaja() {
        return $this->codCaja;
    }

    function setFaclCodigo($faclCodigo) {
        $this->faclCodigo = $faclCodigo;
    }

    function setCodigoLinea($codigoLinea) {
        $this->codigoLinea = $codigoLinea;
    }

    function setCodigoCliente($codigoCliente) {
        $this->codigoCliente = $codigoCliente;
    }

    function setFaclPrecioCompraMinuto($faclPrecioCompraMinuto) {
        $this->faclPrecioCompraMinuto = $faclPrecioCompraMinuto;
    }

    function setFaclPrecioVentaMinuto($faclPrecioVentaMinuto) {
        $this->faclPrecioVentaMinuto = $faclPrecioVentaMinuto;
    }

    function setFaclCantidadMinutos($faclCantidadMinutos) {
        $this->faclCantidadMinutos = $faclCantidadMinutos;
    }

    function setFaclTotal($faclTotal) {
        $this->faclTotal = $faclTotal;
    }

    function setFaclFecha($faclFecha) {
        $this->faclFecha = $faclFecha;
    }

    function setFaclHora($faclHora) {
        $this->faclHora = $faclHora;
    }

    function setFaclObservacion($faclObservacion) {
        $this->faclObservacion = $faclObservacion;
    }

    function setUsuCodigo($usuCodigo) {
        $this->usuCodigo = $usuCodigo;
    }

    function setCodCaja($codCaja) {
        $this->codCaja = $codCaja;
    }

}
