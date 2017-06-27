<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogVisitasCliente
 *
 * @ORM\Table(name="log_visitas_cliente")
 * @ORM\Entity
 */
class LogVisitasCliente {
    
    //Constantes de respuesta 
    const CUSTOMER_REGISTRY_SUCCESSFULL = 'CRS-01';
    
    
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var varchar
     * @ORM\Column(type="string", name="UUID", nullable=false)
     */
    private $uuid;
    
    /**
     * @var Usuario
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(referencedColumnName="usu_codigo", nullable=false)
     */
    private $user;
    
    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;
    
    /**
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $latitude;
    
    /**
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $longitude;
    
    public function getId(){
        return $this->id;
    }
    
    public function getUuid(){
        return $this->uuid;
    }
    
    public function setUuid($uuid){
        $this->uuid = $uuid;
        return $this;
    }
    
    public function setUser(Usuario $user){
        $this->user = $user;
        return $this;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function setLatitude($latitude){
        $this->latitude = $latitude;
        return $this;
    }
    
    public function getLatitude(){
        return $this->latitude;
    }
    
    public function setLongitude($longitude){
        $this->longitude = $longitude;
        return $this;
    }
    
    public function getLongitude(){
        return $this->longitude;
    }
}
