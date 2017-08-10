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
     * @var decimal
     *
     * @ORM\Column(name="ot_valor", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otValor;
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="ot_descuento", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otDescuento;
    
    
    /**
     * @var decimal
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
     * @var \DateTime
     *
     * @ORM\Column(name="ot_fecha_entrega", type="datetime", nullable=false)
     */
    private $otFechaEntrega;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ot_fecha", type="datetime", nullable=false)
     */
    private $otFecha;
    
    /**
     * @var \DateTime
     *
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

    function getOtValor(): decimal {
        return $this->otValor;
    }

    function getOtDescuento(): decimal {
        return $this->otDescuento;
    }

    function getOtTotal(): decimal {
        return $this->otTotal;
    }

    function getOtEstado() {
        return $this->otEstado;
    }

    function getOtFirma() {
        return $this->otFirma;
    }

    function getOtFechaEntrega(): \DateTime {
        return $this->otFechaEntrega;
    }

    function getOtFecha(): \DateTime {
        return $this->otFecha;
    }

    function getOtFechaPago(): \DateTime {
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

    function setOtValor(decimal $otValor) {
        $this->otValor = $otValor;
    }

    function setOtDescuento(decimal $otDescuento) {
        $this->otDescuento = $otDescuento;
    }

    function setOtTotal(decimal $otTotal) {
        $this->otTotal = $otTotal;
    }

    function setOtEstado($otEstado) {
        $this->otEstado = $otEstado;
    }

    function setOtFirma($otFirma) {
        $this->otFirma = $otFirma;
    }

    function setOtFechaEntrega(\DateTime $otFechaEntrega) {
        $this->otFechaEntrega = $otFechaEntrega;
    }

    function setOtFecha(\DateTime $otFecha) {
        $this->otFecha = $otFecha;
    }

    function setOtFechaPago(\DateTime $otFechaPago) {
        $this->otFechaPago = $otFechaPago;
    }
    
}