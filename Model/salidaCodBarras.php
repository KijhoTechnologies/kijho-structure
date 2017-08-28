<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * salidaCodBarras
 * SEITEM SERVICIO TECNICO
 * 
 * @ORM\Table(name="salida_cod_barras")
 * @ORM\Entity()
 */
class salidaCodBarras {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_salida_barras", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_codigo", type="integer")
     */
    private $facvCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer")
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_barras1", type="string", nullable=true)
     */
    private $codBarras1;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_barras2", type="string", nullable=true)
     */
    private $codBarras2;

    function getId() {
        return $this->id;
    }

    function getFacvCodigo() {
        return $this->facvCodigo;
    }

    function getProdCodigo() {
        return $this->prodCodigo;
    }

    function getCodBarras1() {
        return $this->codBarras1;
    }

    function getCodBarras2() {
        return $this->codBarras2;
    }

    function setFacvCodigo($facvCodigo) {
        $this->facvCodigo = $facvCodigo;
    }

    function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;
    }

    function setCodBarras1($codBarras1) {
        $this->codBarras1 = $codBarras1;
    }

    function setCodBarras2($codBarras2) {
        $this->codBarras2 = $codBarras2;
    }

}
