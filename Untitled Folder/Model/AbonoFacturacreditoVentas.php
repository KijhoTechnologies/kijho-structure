<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonoFacturacreditoVentas
 *
 * @ORM\Table(name="abono_facturacredito_ventas")
 * @ORM\Entity
 */
class AbonoFacturacreditoVentas {

    /**
     * @var integer
     *
     * @ORM\Column(name="faca_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_codigo", type="integer", nullable=true)
     */

    /**
     * @var \FacturaVentas
     *
     * @ORM\ManyToOne(targetEntity="FacturaVentas")
     * @ORM\JoinColumn(name="facv_codigo", referencedColumnName="facv_codigo", nullable=false)
     */
    private $facvCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="faca_fecha", type="date", nullable=true)
     */
    private $facaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="faca_hora", type="string", length=50, nullable=true)
     */
    private $facaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="faca_abono", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facaAbono;

    /**
     * @var integer
     *
     * @ORM\Column(name="faca_tipoPago", type="integer", nullable=true)
     */
    private $facaTipopago;

    /**
     * @var string
     *
     * @ORM\Column(name="faca_tipoTarjeta", type="string", nullable=true)
     */
    private $facaTipotarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="faca_nombreTarjeta", type="string", length=50, nullable=true)
     */
    private $facaNombretarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="faca_codigoVoucher", type="string", length=50, nullable=true)
     */
    private $facaCodigovoucher;

    /**
     * @var string
     *
     * @ORM\Column(name="faca_resta", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $facaResta;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * Get id
     * 
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get facaCodigo
     *
     * @return integer 
     */
    public function getFacaCodigo() {
        return $this->facaCodigo;
    }

    /**
     * Set facvCodigo
     *
     * @param integer $facvCodigo
     * @return AbonoFacturacreditoVentas
     */
    public function setFacvCodigo($facvCodigo) {
        $this->facvCodigo = $facvCodigo;

        return $this;
    }

    /**
     * Get facvCodigo
     *
     * @return integer 
     */
    public function getFacvCodigo() {
        return $this->facvCodigo;
    }

    /**
     * Set facaFecha
     *
     * @param \DateTime $facaFecha
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaFecha($facaFecha) {
        $this->facaFecha = $facaFecha;

        return $this;
    }

    /**
     * Get facaFecha
     *
     * @return \DateTime 
     */
    public function getFacaFecha() {
        return $this->facaFecha;
    }

    /**
     * Set facaHora
     *
     * @param string $facaHora
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaHora($facaHora) {
        $this->facaHora = $facaHora;

        return $this;
    }

    /**
     * Get facaHora
     *
     * @return string 
     */
    public function getFacaHora() {
        return $this->facaHora;
    }

    /**
     * Set facaAbono
     *
     * @param string $facaAbono
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaAbono($facaAbono) {
        $this->facaAbono = $facaAbono;

        return $this;
    }

    /**
     * Get facaAbono
     *
     * @return string 
     */
    public function getFacaAbono() {
        return $this->facaAbono;
    }

    /**
     * Set facaTipopago
     *
     * @param integer $facaTipopago
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaTipopago($facaTipopago) {
        $this->facaTipopago = $facaTipopago;

        return $this;
    }

    /**
     * Get facaTipopago
     *
     * @return integer 
     */
    public function getFacaTipopago() {
        return $this->facaTipopago;
    }

    /**
     * Set facaTipotarjeta
     *
     * @param string $facaTipotarjeta
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaTipotarjeta($facaTipotarjeta) {
        $this->facaTipotarjeta = $facaTipotarjeta;

        return $this;
    }

    /**
     * Get facaTipotarjeta
     *
     * @return string 
     */
    public function getFacaTipotarjeta() {
        return $this->facaTipotarjeta;
    }

    /**
     * Set facaNombretarjeta
     *
     * @param string $facaNombretarjeta
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaNombretarjeta($facaNombretarjeta) {
        $this->facaNombretarjeta = $facaNombretarjeta;

        return $this;
    }

    /**
     * Get facaNombretarjeta
     *
     * @return string 
     */
    public function getFacaNombretarjeta() {
        return $this->facaNombretarjeta;
    }

    /**
     * Set facaCodigovoucher
     *
     * @param string $facaCodigovoucher
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaCodigovoucher($facaCodigovoucher) {
        $this->facaCodigovoucher = $facaCodigovoucher;

        return $this;
    }

    /**
     * Get facaCodigovoucher
     *
     * @return string 
     */
    public function getFacaCodigovoucher() {
        return $this->facaCodigovoucher;
    }

    /**
     * Set facaResta
     *
     * @param string $facaResta
     * @return AbonoFacturacreditoVentas
     */
    public function setFacaResta($facaResta) {
        $this->facaResta = $facaResta;

        return $this;
    }

    /**
     * Get facaResta
     *
     * @return string 
     */
    public function getFacaResta() {
        return $this->facaResta;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return AbonoFacturacreditoVentas
     */
    public function setCliCodigo($cliCodigo) {
        $this->cliCodigo = $cliCodigo;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo() {
        return $this->cliCodigo;
    }

}
