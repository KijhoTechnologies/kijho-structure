<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenTrabajoPago
 *
 * @ORM\Table(name="orden_trabajo_pago")
 * @ORM\Entity
 */
class OrdenTrabajoPago {

    /**
     * @var integer
     *
     * @ORM\Column(name="otp_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $otpCodigo;

    /**
     *
     * @ORM\ManyToOne(targetEntity="OrdenTrabajo")
     * @ORM\JoinColumn(name="ot_codigo", referencedColumnName="ot_codigo", nullable=false)
     */
    private $otCodigo;

    /**
     * @ORM\Column(name="otp_fecha", type="datetime", nullable=false)
     */
    private $otpFecha;

    /**
     * 
     * @ORM\Column(name="otp_valor", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otpValor;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_tipo", type="integer", nullable=false)
     */
    private $otpTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_tipoTrajeta", type="string", length=200, nullable=true)
     */
    private $otpTipoTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_tarjeta", type="string", length=200, nullable=true)
     */
    private $otpTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_codVoucher", type="string", length=200, nullable=true)
     */
    private $otpCodVoucher;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_tipoBono", type="string", length=200, nullable=true)
     */
    private $otpTipoBono;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_consecutivo", type="string", length=200, nullable=true)
     */
    private $otpConsecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="otp_nombreBanco", type="string", length=200, nullable=true)
     */
    private $otpNombreBanco;

    function getOtpCodigo() {
        return $this->otpCodigo;
    }

    function getOtCodigo() {
        return $this->otCodigo;
    }

    function getOtpFecha() {
        return $this->otpFecha;
    }

    function getOtpValor() {
        return $this->otpValor;
    }

    function getOtpTipo() {
        return $this->otpTipo;
    }

    function getOtpTipoTarjeta() {
        return $this->otpTipoTarjeta;
    }

    function getOtpTarjeta() {
        return $this->otpTarjeta;
    }

    function getOtpCodVoucher() {
        return $this->otpCodVoucher;
    }

    function getOtpTipoBono() {
        return $this->otpTipoBono;
    }

    function getOtpConsecutivo() {
        return $this->otpConsecutivo;
    }

    function getOtpNombreBanco() {
        return $this->otpNombreBanco;
    }

    function setOtpCodigo($otpCodigo) {
        $this->otpCodigo = $otpCodigo;
    }

    function setOtCodigo($otCodigo) {
        $this->otCodigo = $otCodigo;
    }

    function setOtpFecha($otpFecha) {
        $this->otpFecha = $otpFecha;
    }

    function setOtpValor($otpValor) {
        $this->otpValor = $otpValor;
    }

    function setOtpTipo($otpTipo) {
        $this->otpTipo = $otpTipo;
    }

    function setOtpTipoTarjeta($otpTipoTarjeta) {
        $this->otpTipoTarjeta = $otpTipoTarjeta;
    }

    function setOtpTarjeta($otpTarjeta) {
        $this->otpTarjeta = $otpTarjeta;
    }

    function setOtpCodVoucher($otpCodVoucher) {
        $this->otpCodVoucher = $otpCodVoucher;
    }

    function setOtpTipoBono($otpTipoBono) {
        $this->otpTipoBono = $otpTipoBono;
    }

    function setOtpConsecutivo($otpConsecutivo) {
        $this->otpConsecutivo = $otpConsecutivo;
    }

    function setOtpNombreBanco($otpNombreBanco) {
        $this->otpNombreBanco = $otpNombreBanco;
    }

}
