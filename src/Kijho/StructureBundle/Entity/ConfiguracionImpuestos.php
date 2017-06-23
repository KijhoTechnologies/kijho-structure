<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfiguracionImpuestos
 *
 * @ORM\Table(name="configuracion_impuestos")
 * @ORM\Entity
 */
class ConfiguracionImpuestos {

    /**
     * @var integer
     *
     * @ORM\Column(name="imp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="imp_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $impValue;

    /**
     * @var string
     *
     * @ORM\Column(name="imp_name", type="string", length=60, nullable=false)
     */
    private $impName;

    /**
     * @var integer
     *
     * @ORM\Column(name="imp_status", type="integer", nullable=false)
     */
    private $impStatus;

    

    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set impName
     *
     * @param string $impName
     * @return ConfiguracionImpuestos
     */
    public function setImpName($impName) {
        $this->impName = $impName;

        return $this;
    }

    /**
     * Get impName
     *
     * @return string 
     */
    public function getImpName() {
        return $this->impName;
    }

    /**
     * Set impValue
     *
     * @param float $impValue
     * @return ConfiguracionImpuestos
     */
    public function setImpValue($impValue) {
        $this->impValue = $impValue;

        return $this;
    }

    /**
     * Get impValue
     *
     * @return float 
     */
    public function getImpValue() {
        return $this->impValue;
    }
    
    /**
     * Set impStatus
     *
     * @param integer $impStatus
     * @return ConfiguracionImpuestos
     */
    public function setImpStatus($impStatus) {
        $this->impValue = $impStatus;

        return $this;
    }

    /**
     * Get impStatus
     *
     * @return integer 
     */
    public function getImpStatus() {
        return $this->impStatus;
    }

    

}
