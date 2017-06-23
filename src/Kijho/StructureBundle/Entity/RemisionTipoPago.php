<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * RemisionTipoPago
 *
 * @ORM\Table(name="remision_tipo_pago")
 * @ORM\Entity
 */
class RemisionTipoPago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="remtp_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $remtpCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="remtp_rem_codigo", type="integer", nullable=false)
     */
    private $remtpRemCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="remtp_tpcodigo", type="integer", nullable=false)
     */
    private $remtpTpcodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="remtp_valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $remtpValor;

    /**
     * @var string
     *
     * @ORM\Column(name="remtp_descripcion", type="text", length=65535, nullable=true)
     */
    private $remtpDescripcion;
    
    
   /**
     * @var string
     *
     * @ORM\Column(name="remtp_tipoTarjeta", type="string", length=200, nullable=false)
     */
    private $remtpTipoTarjeta;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="remtp_tarjeta", type="string", length=200, nullable=false)
     */
    private $remtpTarjeta;
    
     /**
     * @var string
     *
     * @ORM\Column(name="remtp_codVoucher", type="string", length=200, nullable=false)
     */
    private $remtpCodVoucher;
    
    /**
     * @var string
     *
     * @ORM\Column(name="remtp_tipoBono", type="string", length=200, nullable=false)
     */
    private $remtpTipoBono;
    
    /**
     * @var string
     *
     * @ORM\Column(name="remtp_consecutivo", type="string", length=200, nullable=false)
     */
    private $remtpConsecutivo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="remtp_nombreBanco", type="string", length=200, nullable=false)
     */
    private $remtpNombreBanco;
    
    /**
     * Get remtpCodigo
     *
     * @return integer 
     */
    public function getRemtpCodigo()
    {
        return $this->remtpCodigo;
    }

    /**
     * Set remtpRemCodigo
     *
     * @param integer $remtpRemCodigo
     * @return RemisionTipoPago
     */
    public function setRemtpRemCodigo($remtpRemCodigo)
    {
        $this->remtpRemCodigo = $remtpRemCodigo;

        return $this;
    }

    /**
     * Get remtpRemCodigo
     *
     * @return integer 
     */
    public function getRemtpRemCodigo()
    {
        return $this->remtpRemCodigo;
    }

    /**
     * Set remtpTpcodigo
     *
     * @param integer $remtpTpcodigo
     * @return RemisionTipoPago
     */
    public function setRemtpTpcodigo($remtpTpcodigo)
    {
        $this->remtpTpcodigo = $remtpTpcodigo;

        return $this;
    }

    /**
     * Get remtpTpcodigo
     *
     * @return integer 
     */
    public function getRemtpTpcodigo()
    {
        return $this->remtpTpcodigo;
    }

    /**
     * Set remtpValor
     *
     * @param string $remtpValor
     * @return RemisionTipoPago
     */
    public function setRemtpValor($remtpValor)
    {
        $this->remtpValor = $remtpValor;

        return $this;
    }

    /**
     * Get remtpValor
     *
     * @return string 
     */
    public function getRemtpValor()
    {
        return $this->remtpValor;
    }

    /**
     * Set remtpDescripcion
     *
     * @param string $remtpDescripcion
     * @return RemisionTipoPago
     */
    public function setRemtpDescripcion($remtpDescripcion)
    {
        $this->remtpDescripcion = $remtpDescripcion;

        return $this;
    }

    /**
     * Get remtpDescripcion
     *
     * @return string 
     */
    public function getRemtpDescripcion()
    {
        return $this->remtpDescripcion;
    }
    
    
    public function getRemtpTipoTarjeta() {
        return $this->remtpTipoTarjeta;
    }

    public function getRemtpTarjeta() {
        return $this->remtpTarjeta;
    }

    public function getRemtpCodVoucher() {
        return $this->remtpCodVoucher;
    }

    public function getRemtpTipoBono() {
        return $this->remtpTipoBono;
    }

    public function getRemtpConsecutivo() {
        return $this->remtpConsecutivo;
    }

    public function getRemtpNombreBanco() {
        return $this->remtpNombreBanco;
    }

    public function setRemtpTipoTarjeta($remtpTipoTarjeta) {
        $this->remtpTipoTarjeta = $remtpTipoTarjeta;
    }

    public function setRemtpTarjeta($remtpTarjeta) {
        $this->remtpTarjeta = $remtpTarjeta;
    }

    public function setRemtpCodVoucher($remtpCodVoucher) {
        $this->remtpCodVoucher = $remtpCodVoucher;
    }

    public function setRemtpTipoBono($remtpTipoBono) {
        $this->remtpTipoBono = $remtpTipoBono;
    }

    public function setRemtpConsecutivo($remtpConsecutivo) {
        $this->remtpConsecutivo = $remtpConsecutivo;
    }

    public function setRemtpNombreBanco($remtpNombreBanco) {
        $this->remtpNombreBanco = $remtpNombreBanco;
    }


    }
