<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingreso
 *
 * @ORM\Table(name="ingreso", indexes={@ORM\Index(name="ingreso_FKIndex1", columns={"usu_codigo"}), @ORM\Index(name="ingreso_FKIndex2", columns={"ting_codigo"})})
 * @ORM\Entity(repositoryClass="IngresoRepository")
 */
class Ingreso {

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ingCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ting_codigo", type="integer", nullable=false)
     */
    private $tingCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_valor", type="integer", nullable=true)
     */
    private $ingValor;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_nit", type="string", length=30, nullable=false)
     */
    private $ingNit;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_persona", type="string", length=50, nullable=false)
     */
    private $ingPersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="ing_movimiento_contable", type="integer", nullable=false)
     */
    private $ingMovimientoContable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ing_fecha", type="date", nullable=true)
     */
    private $ingFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_hora", type="string", length=100, nullable=true)
     */
    private $ingHora;

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
     * @var integer
     *
     * @ORM\Column(name="cod_orden", type="integer", nullable=true)
     */
    private $codOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="ing_descripcion", type="string", length=100, nullable=false)
     */
    private $ingDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_venta_servicio", type="integer", nullable=false)
     */
    private $codVentaServicio;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var integer
     *
     * @ORM\Column(name="cod_servicio", type="integer", nullable=false)
     */
    private $codServicio;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var integer
     *
     * @ORM\Column(name="cod_factura_linea", type="integer", nullable=false)
     */
    private $codFacturaLinea;

    /**
     * Get ingCodigo
     *
     * @return integer 
     */
    public function getIngCodigo() {
        return $this->ingCodigo;
    }

    /**
     * Set tingCodigo
     *
     * @param integer $tingCodigo
     * @return Ingreso
     */
    public function setTingCodigo($tingCodigo) {
        $this->tingCodigo = $tingCodigo;

        return $this;
    }

    /**
     * Get tingCodigo
     *
     * @return integer 
     */
    public function getTingCodigo() {
        return $this->tingCodigo;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return Ingreso
     */
    public function setUsuCodigo($usuCodigo) {
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
     * Set ingValor
     *
     * @param integer $ingValor
     * @return Ingreso
     */
    public function setIngValor($ingValor) {
        $this->ingValor = $ingValor;

        return $this;
    }

    /**
     * Get ingValor
     *
     * @return integer 
     */
    public function getIngValor() {
        return $this->ingValor;
    }

    /**
     * Set ingNit
     *
     * @param string $ingNit
     * @return Ingreso
     */
    public function setIngNit($ingNit) {
        $this->ingNit = $ingNit;

        return $this;
    }

    /**
     * Get ingNit
     *
     * @return string 
     */
    public function getIngNit() {
        return $this->ingNit;
    }

    /**
     * Set ingPersona
     *
     * @param string $ingPersona
     * @return Ingreso
     */
    public function setIngPersona($ingPersona) {
        $this->ingPersona = $ingPersona;

        return $this;
    }

    /**
     * Get ingPersona
     *
     * @return string 
     */
    public function getIngPersona() {
        return $this->ingPersona;
    }

    /**
     * Set ingMovimientoContable
     *
     * @param integer $ingMovimientoContable
     * @return Ingreso
     */
    public function setIngMovimientoContable($ingMovimientoContable) {
        $this->ingMovimientoContable = $ingMovimientoContable;

        return $this;
    }

    /**
     * Get ingMovimientoContable
     *
     * @return integer 
     */
    public function getIngMovimientoContable() {
        return $this->ingMovimientoContable;
    }

    /**
     * Set ingFecha
     *
     * @param \DateTime $ingFecha
     * @return Ingreso
     */
    public function setIngFecha($ingFecha) {
        $this->ingFecha = $ingFecha;

        return $this;
    }

    /**
     * Get ingFecha
     *
     * @return \DateTime 
     */
    public function getIngFecha() {
        return $this->ingFecha;
    }

    /**
     * Set ingHora
     *
     * @param string $ingHora
     * @return Ingreso
     */
    public function setIngHora($ingHora) {
        $this->ingHora = $ingHora;

        return $this;
    }

    /**
     * Get ingHora
     *
     * @return string 
     */
    public function getIngHora() {
        return $this->ingHora;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return Ingreso
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
     * Set codFactura
     *
     * @param integer $codFactura
     * @return Ingreso
     */
    public function setCodFactura($codFactura) {
        $this->codFactura = $codFactura;

        return $this;
    }

    /**
     * Get codFactura
     *
     * @return integer 
     */
    public function getCodFactura() {
        return $this->codFactura;
    }

    /**
     * Set codSeparado
     *
     * @param integer $codSeparado
     * @return Ingreso
     */
    public function setCodSeparado($codSeparado) {
        $this->codSeparado = $codSeparado;

        return $this;
    }

    /**
     * Get codSeparado
     *
     * @return integer 
     */
    public function getCodSeparado() {
        return $this->codSeparado;
    }

    /**
     * Set ingDescripcion
     *
     * @param string $ingDescripcion
     * @return Ingreso
     */
    public function setIngDescripcion($ingDescripcion) {
        $this->ingDescripcion = $ingDescripcion;

        return $this;
    }

    /**
     * Get ingDescripcion
     *
     * @return string 
     */
    public function getIngDescripcion() {
        return $this->ingDescripcion;
    }

    /**
     * Set codVentaServicio
     *
     * @param integer $codVentaServicio
     * @return Ingreso
     */
    public function setCodVentaServicio($codVentaServicio) {
        $this->codVentaServicio = $codVentaServicio;

        return $this;
    }

    /**
     * Get codVentaServicio
     *
     * @return integer 
     */
    public function getCodVentaServicio() {
        return $this->codVentaServicio;
    }

    function getCodOrden() {
        return $this->codOrden;
    }

    function getCodServicio() {
        return $this->codServicio;
    }

    function getCodFacturaLinea() {
        return $this->codFacturaLinea;
    }

    function setCodOrden($codOrden) {
        $this->codOrden = $codOrden;
    }

    function setCodServicio($codServicio) {
        $this->codServicio = $codServicio;
    }

    function setCodFacturaLinea($codFacturaLinea) {
        $this->codFacturaLinea = $codFacturaLinea;
    }

}
