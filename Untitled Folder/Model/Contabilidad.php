<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contabilidad
 *
 * @ORM\Table(name="contabilidad")
 * @ORM\Entity
 */
class Contabilidad {

    /**
     * @var integer
     *
     * @ORM\Column(name="cont_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cont_fecha", type="date", nullable=false)
     */
    private $contFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="cont_saldo", type="integer", nullable=false)
     */
    private $contSaldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="cont_hora", type="string", length=100, nullable=true)
     */
    private $contHora;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="cont_genera_pdf", type="string", length=100, options={"default" : "no"}, nullable=true)
     */
    private $confGenerarPdf;

    /**
     * Get contCodigo
     *
     * @return integer 
     */
    public function getContCodigo() {
        return $this->contCodigo;
    }

    /**
     * Set contFecha
     *
     * @param \DateTime $contFecha
     * @return Contabilidad
     */
    public function setContFecha($contFecha) {
        $this->contFecha = $contFecha;

        return $this;
    }

    /**
     * Get contFecha
     *
     * @return \DateTime 
     */
    public function getContFecha() {
        return $this->contFecha;
    }

    /**
     * Set contSaldo
     *
     * @param integer $contSaldo
     * @return Contabilidad
     */
    public function setContSaldo($contSaldo) {
        $this->contSaldo = $contSaldo;

        return $this;
    }

    /**
     * Get contSaldo
     *
     * @return integer 
     */
    public function getContSaldo() {
        return $this->contSaldo;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return Contabilidad
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

    function getConfGenerarPdf() {
        return $this->confGenerarPdf;
    }

    function setConfGenerarPdf($confGenerarPdf) {
        $this->confGenerarPdf = $confGenerarPdf;
    }

    function getContHora() {
        return $this->contHora;
    }

    function setContHora($contHora) {
        $this->contHora = $contHora;
    }

}
