<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * SEITEM SERVICIO TECNICO

 * Model
 *
 * @ORM\Table(name="model")
 * @ORM\Entity
 */
class Model {

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codLinea;

    /**
     * @var integer
     *
     * @ORM\Column(name="bra_code", type="integer",length=10, nullable=false)
     */
    private $braCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_name", type="string", length=100, nullable=true)
     */
    private $modName;

    function getCodLinea() {
        return $this->codLinea;
    }

    function getBraCode() {
        return $this->braCode;
    }

    function getModName() {
        return $this->modName;
    }

    function setCodLinea($codLinea) {
        $this->codLinea = $codLinea;
    }

    function setBraCode($braCode) {
        $this->braCode = $braCode;
    }

    function setModName($modName) {
        $this->modName = $modName;
    }

}
