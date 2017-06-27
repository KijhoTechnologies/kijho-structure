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

}
