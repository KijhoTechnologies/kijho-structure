<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenTrabajo
 *
 * @ORM\Table(name="orden_trabajo")
 * @ORM\Entity
 */

class OrdenTrabajo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ot_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
       /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cli_codigo", referencedColumnName="cli_codigo", nullable=false)
     */
    private $cliCodigo;

     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="FacturaVentas")
     * @ORM\JoinColumn(name="facv_codigo", referencedColumnName="facv_codigo", nullable=true)
     */
    private $facvCodigo;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Vendedor")
     * @ORM\JoinColumn(name="ot_vendedor", referencedColumnName="id_vendedor", nullable=true)
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
     * 
     *
     * @ORM\Column(name="ot_valor", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otValor;
    
    /**
     * 
     *
     * @ORM\Column(name="ot_descuento", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otDescuento;
    
    
    /**
     * 
     * @ORM\Column(name="ot_total", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otTotal;
    
     /**
     * @var string
     *
     * @ORM\Column(name="ot_estado", type="integer", nullable=false)
     */
    private $otEstado;
    
    /**
     * @var string
     *
     * @ORM\Column(name="ot_firma", type="string", length=100, nullable=true)
     */
    private $otFirma;
    
    /**
     * @ORM\Column(name="ot_fecha_entrega", type="datetime", nullable=false)
     */
    private $otFechaEntrega;
    
    /**
     * 
     *
     * @ORM\Column(name="ot_fecha", type="datetime", nullable=false)
     */
    private $otFecha;
    
    /**
     * @ORM\Column(name="ot_fecha_pago", type="date", nullable=false)
     */
    private $otFechaPago;

    function getId() {
        return $this->id;
    }

    function getCliCodigo() {
        return $this->cliCodigo;
    }

    function getFacvCodigo() {
        return $this->facvCodigo;
    }

    function getFacvVendedor() {
        return $this->facvVendedor;
    }

    function getUsuCodigo() {
        return $this->usuCodigo;
    }

    function getOtValor() {
        return $this->otValor;
    }

    function getOtDescuento() {
        return $this->otDescuento;
    }

    function getOtTotal() {
        return $this->otTotal;
    }

    function getOtEstado() {
        return $this->otEstado;
    }

    function getOtFirma() {
        return $this->otFirma;
    }

    function getOtFechaEntrega() {
        return $this->otFechaEntrega;
    }

    function getOtFecha() {
        return $this->otFecha;
    }

    function getOtFechaPago() {
        return $this->otFechaPago;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCliCodigo($cliCodigo) {
        $this->cliCodigo = $cliCodigo;
    }

    function setFacvCodigo($facvCodigo) {
        $this->facvCodigo = $facvCodigo;
    }

    function setFacvVendedor($facvVendedor) {
        $this->facvVendedor = $facvVendedor;
    }

    function setUsuCodigo($usuCodigo) {
        $this->usuCodigo = $usuCodigo;
    }

    function setOtValor($otValor) {
        $this->otValor = $otValor;
    }

    function setOtDescuento($otDescuento) {
        $this->otDescuento = $otDescuento;
    }

    function setOtTotal($otTotal) {
        $this->otTotal = $otTotal;
    }

    function setOtEstado($otEstado) {
        $this->otEstado = $otEstado;
    }

    function setOtFirma($otFirma) {
        $this->otFirma = $otFirma;
    }

    function setOtFechaEntrega($otFechaEntrega) {
        $this->otFechaEntrega = $otFechaEntrega;
    }

    function setOtFecha($otFecha) {
        $this->otFecha = $otFecha;
    }

    function setOtFechaPago($otFechaPago) {
        $this->otFechaPago = $otFechaPago;
    }
   
}