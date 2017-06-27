<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Table(name="dias_semana")
 * @ORM\Entity
 */
class DiasSemana {

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", name="dia_codigo", length=10)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", name="nombre_dia", length=15)
     */
    protected $nombre;
    
    
    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }




}
