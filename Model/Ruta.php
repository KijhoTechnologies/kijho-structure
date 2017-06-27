<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Description of Ruta
 *
 * @author jocampo
 * 
 * @ORM\Entity
 * @ORM\Table(name="ruta")
 */
class Ruta {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    public function getId(){
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    
}
