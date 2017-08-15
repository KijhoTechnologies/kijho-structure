<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonoOrdenTrabajo
 *
 * @ORM\Table(name="abono_orden_trabajo")
 * @ORM\Entity
 */
class AbonoOrdenTrabajo {

    /**
     * @var integer
     *
     * @ORM\Column(name="aot_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="OrdenTrabajo")
     * @ORM\JoinColumn(name="ot_codigo", referencedColumnName="ot_codigo", nullable=false)
     */
    private $otCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aot_fecha", type="datetime", nullable=false)
     */
    private $aotFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ot_abono", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $aotAbono;

    /**
     * @var string
     *
     * @ORM\Column(name="aot_resta", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $aotResta;

    function getId() {
        return $this->id;
    }

    function getCliCodigo() {
        return $this->cliCodigo;
    }

    function getOtCodigo() {
        return $this->otCodigo;
    }

    function getAotFecha() {
        return $this->aotFecha;
    }

    function getAotAbono() {
        return $this->aotAbono;
    }

    function getAotResta() {
        return $this->aotResta;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCliCodigo($cliCodigo) {
        $this->cliCodigo = $cliCodigo;
    }

    function setOtCodigo($otCodigo) {
        $this->otCodigo = $otCodigo;
    }

    function setAotFecha(\DateTime $aotFecha) {
        $this->aotFecha = $aotFecha;
    }

    function setAotAbono($aotAbono) {
        $this->aotAbono = $aotAbono;
    }

    function setAotResta($aotResta) {
        $this->aotResta = $aotResta;
    }

}
