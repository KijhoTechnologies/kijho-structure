<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntradaImei
 * SEITEM SERVICIO TECNICO
 * @ORM\Table(name="entrada_imei")
 * @ORM\Entity()
 */
class EntradaImei {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ent_codigo", type="integer", nullable=false)
     */
    private $entCodigo;

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

    function getEntCodigo() {
        return $this->entCodigo;
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

    function setEntCodigo($entCodigo) {
        $this->entCodigo = $entCodigo;
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
