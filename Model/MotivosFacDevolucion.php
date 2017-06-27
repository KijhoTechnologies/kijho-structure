<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Description of MotivosFacDevolucion
 * 
 * @author yeison osorio
 */

/**
 * @ORM\Table(name="motivos_fac_devolucion")
 * @ORM\Entity(repositoryClass="MotivosFacDevolucionRepository")
 */
class MotivosFacDevolucion {

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_motivos", length=11)
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", name="motivo", length=256)
     */
    protected $motivo;

    /**
     * @var int
     * @ORM\Column(type="integer", name="modulo", length=11)
     */
    protected $modulo;
    
    /**
     * Get getMotivo
     *
     * @return Motivo 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set setMotivo
     *
     * @param  $Motivo
     * @return Motivos
     */
    public function setMotivo($motivo) {

        $this->motivo = $motivo;
        return $this;
    }

    /**
     * Get getMotivo
     *
     * @return Motivo 
     */
    public function getMotivo() {
        return $this->motivo;
    }
    
    public function getModulo() {
        return $this->modulo;
    }

    public function setModulo($modulo) {
        $this->modulo = $modulo;
    }



}
