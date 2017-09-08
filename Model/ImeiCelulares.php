<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImeiCelulares
 * SEITEM SERVICIO TECNICO
 * @ORM\Table(name="imei_celulares")
 * @ORM\Entity()
 */
class ImeiCelulares {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_imei", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo_imei", type="integer", nullable=false)
     */
    private $prodCodigoImei;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

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

    function getProdCodigoImei() {
        return $this->prodCodigoImei;
    }

    function getEstado() {
        return $this->estado;
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

    function setProdCodigoImei($prodCodigoImei) {
        $this->prodCodigoImei = $prodCodigoImei;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setImei1($imei1) {
        $this->imei1 = $imei1;
    }

    function setImei2($imei2) {
        $this->imei2 = $imei2;
    }

}
