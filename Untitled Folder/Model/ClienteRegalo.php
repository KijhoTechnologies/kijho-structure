<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClienteRegalo
 *
 * @ORM\Table(name="cliente_regalo")
 * @ORM\Entity
 */
class ClienteRegalo {

    /**
     * @var integer
     *
     * @ORM\Column(name="clre_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="giftClient")
     * @ORM\JoinColumn(name="cli_codigo", referencedColumnName="cli_codigo", nullable=false)
     */
    private $customer;

    /**
     * @var integer
     *
     * @ORM\Column(name="clre_valor", type="integer", nullable=false)
     */
    private $clreValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clre_fecha", type="date", nullable=false)
     */
    private $clreFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="clre_hora", type="string", length=100, nullable=false)
     */
    private $clreHora;

    /**
     * @var string
     *
     * @ORM\Column(name="clre_concepto", type="text", nullable=false)
     */
    private $clreConcepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @ORM\ManyToOne(targetEntity="FacturaVentas", inversedBy="giftClient")
     * @ORM\JoinColumn(name="facv_id", referencedColumnName="facv_codigo", nullable=true)
     */
    private $invoice;

    /**
     * Get clreCodigo
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return ClienteRegalo
     */
    public function setCustomer(Cliente $customer) {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * Set clreValor
     *
     * @param integer $clreValor
     * @return ClienteRegalo
     */
    public function setClreValor($clreValor) {
        $this->clreValor = $clreValor;

        return $this;
    }

    /**
     * Get clreValor
     *
     * @return integer 
     */
    public function getClreValor() {
        return $this->clreValor;
    }

    /**
     * Set clreFecha
     *
     * @param \DateTime $clreFecha
     * @return ClienteRegalo
     */
    public function setClreFecha(\DateTime $clreFecha = null) {
        $this->clreFecha = $clreFecha;

        return $this;
    }

    /**
     * Get clreFecha
     *
     * @return \DateTime 
     */
    public function getClreFecha() {
        return $this->clreFecha;
    }

    /**
     * Set clreHora
     *
     * @param string $clreHora
     * @return ClienteRegalo
     */
    public function setClreHora($clreHora) {
        $this->clreHora = $clreHora;

        return $this;
    }

    /**
     * Get clreHora
     *
     * @return string 
     */
    public function getClreHora() {
        return $this->clreHora;
    }

    /**
     * Set clreConcepto
     *
     * @param string $clreConcepto
     * @return ClienteRegalo
     */
    public function setClreConcepto($clreConcepto) {
        $this->clreConcepto = $clreConcepto;

        return $this;
    }

    /**
     * Get clreConcepto
     *
     * @return string 
     */
    public function getClreConcepto() {
        return $this->clreConcepto;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return ClienteRegalo
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

    public function setInvoice(FacturaVentas $invoice) {
        $this->invoice = $invoice;
        return $this;
    }

    public function getInvoice() {
        return $this->invoice;
    }

}
