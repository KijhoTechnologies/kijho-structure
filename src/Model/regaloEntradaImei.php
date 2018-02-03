<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * regaloEntradaImei
 * SEITEM SERVICIO TECNICO
 * 
 * @ORM\Table(name="regalo_entrada_imei")
 * @ORM\Entity()
 */
class regaloEntradaImei {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_reen_imei", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="reen_codigo", type="integer", nullable=false)
     */
    private $reenCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prre_codigo", type="integer", nullable=false)
     */
    private $prreCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="imei1", type="string", nullable=false)
     */
    private $imei1;

    /**
     * @var integer
     *
     * @ORM\Column(name="imei2", type="string", nullable=false)
     */
    private $imei2;

    function getId() {
        return $this->id;
    }

    function getReenCodigo() {
        return $this->reenCodigo;
    }

    function getPrreCodigo() {
        return $this->prreCodigo;
    }

    function getProdCodigo() {
        return $this->prodCodigo;
    }

    function getImei1() {
        return $this->imei1;
    }

    function getImei2() {
        return $this->imei2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setReenCodigo($reenCodigo) {
        $this->reenCodigo = $reenCodigo;
    }

    function setPrreCodigo($prreCodigo) {
        $this->prreCodigo = $prreCodigo;
    }

    function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;
    }

    function setImei1($imei1) {
        $this->imei1 = $imei1;
    }

    function setImei2($imei2) {
        $this->imei2 = $imei2;
    }

}
