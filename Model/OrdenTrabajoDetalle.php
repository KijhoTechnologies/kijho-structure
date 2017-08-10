<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenTrabajoDetalle
 *
 * @ORM\Table(name="orden_trabajo_detalle")
 * @ORM\Entity
 */
class OrdenTrabajoDetalle {

    /**
     * @var integer
     *
     * @ORM\Column(name="otd_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="OrdenTrabajo")
     * @ORM\JoinColumn(name="ot_codigo", referencedColumnName="ot_codigo", nullable=false)
     */
    private $otCodigo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="prod_codigo", referencedColumnName="prod_codigo", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cli_codigo", referencedColumnName="cli_codigo", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="otd_descripcion", type="string", length=1000, nullable=false)
     */
    private $ortdDescripcion;

    /**
     * @var decimal
     *
     * @ORM\Column(name="otd_valor", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $otdValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="otd_fecha", type="datetime", nullable=false)
     */
    private $otdFecha;

    function getId() {
        return $this->id;
    }

    function getOtCodigo() {
        return $this->otCodigo;
    }

    function getProdCodigo() {
        return $this->prodCodigo;
    }

    function getCliCodigo() {
        return $this->cliCodigo;
    }

    function getOrtdDescripcion() {
        return $this->ortdDescripcion;
    }

    function getOtdValor(): decimal {
        return $this->otdValor;
    }

    function getOtdFecha(): \DateTime {
        return $this->otdFecha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setOtCodigo($otCodigo) {
        $this->otCodigo = $otCodigo;
    }

    function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;
    }

    function setCliCodigo($cliCodigo) {
        $this->cliCodigo = $cliCodigo;
    }

    function setOrtdDescripcion($ortdDescripcion) {
        $this->ortdDescripcion = $ortdDescripcion;
    }

    function setOtdValor(decimal $otdValor) {
        $this->otdValor = $otdValor;
    }

    function setOtdFecha(\DateTime $otdFecha) {
        $this->otdFecha = $otdFecha;
    }

}
