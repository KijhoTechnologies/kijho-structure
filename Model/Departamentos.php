<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Departamentos
 *
 * @author jocampo
 */

/**
 * @ORM\Entity @ORM\Table(name="departamentos")
 */
class Departamentos {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $dep_codigo;
    /**
     * @var string
     * @ORM\Column(type="string", length=60)
     */
    protected $dep_nombre;
    /**
     * @var string
     * @ORM\Column(type="string", length=45)
     */
    protected $dep_code;
    
    public function getId(){
        return $this->dep_codigo;
    }
    
    public function getDepNombre(){
        return $this->dep_nombre;
    }
    
    public function getDepCode(){
        return $this->dep_code;
    }
    
    public function setDepNombre($depNombre){
        $this->dep_nombre = $depNombre;
    }
    
    public function setDepCode($depCode){
        $this->dep_code = $depCode;
    }

    /**
     * Get dep_codigo
     *
     * @return integer 
     */
    public function getDepCodigo()
    {
        return $this->dep_codigo;
    }
}
