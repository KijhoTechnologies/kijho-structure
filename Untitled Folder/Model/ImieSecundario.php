<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImieSecundario
 *
 * SEITEM SERVICIO TECNICO
 * 
 * @ORM\Table(name="imei_secundario")
 * @ORM\Entity()
 */
class ImieSecundario {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var integer
     *
     * @ORM\Column(name="codigo_producto", type="integer", nullable=false)
     */
    private $codigoProducto;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="imei_1", type="string", length=50)
     */
    private $imei1;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="imei_2", type="string", length=50)
     */
    private $imei2;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    function getId() {
        return $this->id;
    }

    function getCodigoProducto() {
        return $this->codigoProducto;
    }

    function getImei1() {
        return $this->imei1;
    }

    function getImei2() {
        return $this->imei2;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigoProducto($codigoProducto) {
        $this->codigoProducto = $codigoProducto;
    }

    function setImei1($imei1) {
        $this->imei1 = $imei1;
    }

    function setImei2($imei2) {
        $this->imei2 = $imei2;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
