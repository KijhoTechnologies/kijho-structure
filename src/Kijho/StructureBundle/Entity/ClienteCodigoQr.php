<?php
namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ClienteCodigoQr
 *
 * @ORM\Table(name="cliente_codigo_qr")
 * @ORM\Entity
 */
class ClienteCodigoQr {
    
    //Constantes de asignación de cliente a código QR
    const QR_ASSIGN_SUCCESSFULL = 'QR-A01';
    
    
    //Constantes de error de código QR
    const QR_ASSIGN_FAILED = 'QR-E01';
    const QR_ALREADY_ASSIGNED = 'QR-E02';
    const QR_NOT_ASSIGNED = 'QR-E03';


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var Cliente
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="qrCode")
     * @ORM\JoinColumn(referencedColumnName="cli_codigo", unique=true, nullable=true)
     */
    private $customer;
    
    /**
     * @var Usuario
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(referencedColumnName="usu_codigo", nullable=true)
     */
    private $user;
    
    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_assignment;
    
    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $latitude;
    
    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $longitude;
    
    /**
     * @var UUID
     * @ORM\Column(type="guid", nullable=false)
     */
    private $guid;
    
    public function getId(){
        return $this->id;
    }
    
    public function setCustomer(Cliente $customer){
        $this->customer = $customer;
        return $this;
    }
    
    public function getCustomer(){
        return $this->customer;
    }
    
    public function setUser(Usuario $user){
        $this->user = $user;
        return $this;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function setDateAssignment($date)
    {
        $this->date_assignment = $date;

        return $this;
    }
    
    public function getDateAssignment()
    {
        return $this->date_assignment;
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
    
    public function getGuid(){
        return $this->guid;
    }
    
    
}
