<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacvTipopago
 *
 * @ORM\Table(name="facv_tipopago")
 * @ORM\Entity
 */
class FacvTipopago {

    /**
     * @var integer
     *
     * @ORM\Column(name="fvtp_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fvtpCodigo;

    /**
     * @var \FacturaVentas
     *
     * @ORM\ManyToOne(targetEntity="FacturaVentas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fvtp_fvcodigo", referencedColumnName="facv_codigo", nullable=false)
     * })
     */
    private $fvtpFvcodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fvtp_tpcodigo", type="integer", nullable=false)
     */
    private $fvtpTpcodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $fvtpValor;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_descripcion", type="text", nullable=true)
     */
    private $fvtpDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_cambioEfectivo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fvtpCambioEfectivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fvtp_proceso", type="integer", nullable=true)
     */
    private $fvtpProceso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fvtp_fecha", type="datetime", nullable=true)
     */
    private $fvtpFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_tipoTarjeta", type="string", length=200, nullable=false)
     */
    private $fvtpTipoTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_tarjeta", type="string", length=200, nullable=false)
     */
    private $fvtpTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_codVoucher", type="string", length=200, nullable=false)
     */
    private $fvtpCodVoucher;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_tipoBono", type="string", length=200, nullable=false)
     */
    private $fvtpTipoBono;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_consecutivo", type="string", length=200, nullable=false)
     */
    private $fvtpConsecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="fvtp_nombreBanco", type="string", length=200, nullable=false)
     */
    private $fvtpNombreBanco;

    /**
     *  Atributo para restaurant app
     * 
     * @var string
     *
     * @ORM\Column(name="fvtp_abono", length=5, type="string",  options={"default" : "no"}, nullable=true)
     */
    private $fvtpAbono;

    //constructor de la instancia
    public function __construct(FacturaVentas $saleInvoice) {
        $this->fvtpDescripcion = NULL;
        $this->fvtpFvcodigo = $saleInvoice;
    }

    /**
     * Get fvtpCodigo
     *
     * @return integer 
     */
    public function getFvtpCodigo() {
        return $this->fvtpCodigo;
    }

    /**
     * Set fvtpFvcodigo
     *
     * @param integer $fvtpFvcodigo
     * @return FacvTipopago
     */
    public function setFvtpFvcodigo($fvtpFvcodigo) {
        $this->fvtpFvcodigo = $fvtpFvcodigo;

        return $this;
    }

    /**
     * Get fvtpFvcodigo
     *
     * @return integer 
     */
    public function getFvtpFvcodigo() {
        return $this->fvtpFvcodigo;
    }

    /**
     * Set fvtpTpcodigo
     *
     * @param integer $fvtpTpcodigo
     * @return FacvTipopago
     */
    public function setFvtpTpcodigo($fvtpTpcodigo) {
        $this->fvtpTpcodigo = $fvtpTpcodigo;

        return $this;
    }

    /**
     * Get fvtpTpcodigo
     *
     * @return integer 
     */
    public function getFvtpTpcodigo() {
        return $this->fvtpTpcodigo;
    }

    /**
     * Set fvtpValor
     *
     * @param string $fvtpValor
     * @return FacvTipopago
     */
    public function setFvtpValor($fvtpValor) {
        $this->fvtpValor = $fvtpValor;

        return $this;
    }

    /**
     * Get fvtpValor
     *
     * @return string 
     */
    public function getFvtpValor() {
        return $this->fvtpValor;
    }

    /**
     * Set fvtpDescripcion
     *
     * @param string $fvtpDescripcion
     * @return FacvTipopago
     */
    public function setFvtpDescripcion($fvtpDescripcion) {
        $this->fvtpDescripcion = $fvtpDescripcion;

        return $this;
    }

    /**
     * Get fvtpDescripcion
     *
     * @return string 
     */
    public function getFvtpDescripcion() {
        return $this->fvtpDescripcion;
    }

    public function setFvtpCambioEfectivo($fvtpCambioEfectivo) {
        $this->fvtpCambioEfectivo = $fvtpCambioEfectivo;

        return $this;
    }

    public function getFvtpCambioEfectivo() {
        return $this->fvtpCambioEfectivo;
    }

    public function setFvtpProceso($fvtpProceso) {
        $this->fvtpProceso = $fvtpProceso;

        return $this;
    }

    public function getFvtpProceso() {
        return $this->fvtpProceso;
    }

    public function setFvtpFecha($fvtpFecha) {
        $this->fvtpFecha = $fvtpFecha;

        return $this;
    }

    public function getFvtpFecha() {
        return $this->fvtpFecha;
    }

    public function setFvtpTipoTarjeta($fvtpTipoTarjeta) {
        $this->fvtpTipoTarjeta = $fvtpTipoTarjeta;

        return $this;
    }

    public function getFvtpTipoTarjeta() {
        return $this->fvtpTipoTarjeta;
    }

    public function setFvtpTarjeta($fvtpTarjeta) {
        $this->fvtpTarjeta = $fvtpTarjeta;

        return $this;
    }

    public function getFvtpTarjeta() {
        return $this->fvtpTarjeta;
    }

    public function setFvtpCodVoucher($fvtpCodVoucher) {
        $this->fvtpCodVoucher = $fvtpCodVoucher;

        return $this;
    }

    public function getFvtpCodVoucher() {
        return $this->fvtpCodVoucher;
    }

    public function setFvtpTipoBono($fvtpTipoBono) {
        $this->fvtpTipoBono = $fvtpTipoBono;

        return $this;
    }

    public function getFvtpTipoBono() {
        return $this->fvtpTipoBono;
    }

    public function setFvtpConsecutivo($fvtpConsecutivo) {
        $this->fvtpConsecutivo = $fvtpConsecutivo;

        return $this;
    }

    public function getFvtpConsecutivo() {
        return $this->fvtpConsecutivo;
    }

    public function setFvtpNombreBanco($fvtpNombreBanco) {
        $this->fvtpNombreBanco = $fvtpNombreBanco;

        return $this;
    }

    public function getFvtpNombreBanco() {
        return $this->fvtpNombreBanco;
    }

    function getFvtpAbono() {
        return $this->fvtpAbono;
    }

    function setFvtpAbono($fvtpAbono) {
        $this->fvtpAbono = $fvtpAbono;
    }

}
