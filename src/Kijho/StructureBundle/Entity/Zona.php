<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of Zona
 *
 * @author jocampo
 */

/**
 * @ORM\Entity(repositoryClass="ZonaRepository")
 * @ORM\Table(name="zona")
 */
class Zona {

    const CREAR_ZONA = 1;
    const EDITAR_ZONA = 2;
    const BORRAR_ZONA = 3;
    const EDITAR_BARRIOS_ZONA = 4;
    const BARRIOS_ZONA = 5;
    const BARRIOS_DISPONIBLES = 6;
    const BARRIOS_MUN_ZONA = 7;
    const GUARDAR_CAMBIOS_ZONA = 8;
    const GUARDAR_CAMBIOS_BARRIOS_ZONA = 9;
    const CAMBIAR_USUARIO_ZONA = 10;

    /**
     * @var Int
     * @ORM\Id
     * @ORM\Column(type="integer", name="id", length=11)
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", name="nombre", length=100)
     */
    protected $nombre;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Municipios")
     * @ORM\JoinColumn(referencedColumnName="mun_codigo")
     */
    protected $municipio;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Ruta")
     * @ORM\JoinColumn(name="ruta", referencedColumnName="id")
     */
    protected $ruta;

    /**
     * @ORM\ManyToMany(targetEntity="DiasSemana")
     * @ORM\JoinTable(name="frecuencia_zona",
     *      joinColumns={@ORM\JoinColumn(name="zona_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="dia_id", referencedColumnName="dia_codigo")}
     *      )
     */
    protected $diasSemana;
    
    /**
     * @var boolean
     * 
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="userZone")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="usu_codigo", nullable=true)
     */
    private $user;

    public function __construct() {
        $this->diasSemana = new ArrayCollection();
        $this->user = NULL;
    }

    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Zona
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set municipio
     *
     * @param \municipios $municipio
     * @return Zona
     */
    public function setMunicipio(\municipios $municipio = null) {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \municipios 
     */
    public function getMunicipio() {
        return $this->municipio;
    }

    /**
     * Get municipio
     *
     * @return \ruta 
     */
    public function setRuta(\Ruta $ruta = null) {
        $this->ruta = $ruta;
        return $this;
    }

    public function getRuta() {
        return $this->ruta;
    }
    
    function getDiasSemana() {
        return $this->diasSemana;
    }

    function setDiasSemana($diasSemana) {
        $this->diasSemana = $diasSemana;
    }
    
    /**
     * 
     * @param DiasSemana $dia corresponse al dia que se quiere agregar a la zona 
     * @return \Zona
     */
    public function agregarDia(DiasSemana $dia)
    {
        $this->diasSemana[] = $dia;    
        return $this;
    }


    public function getUser(){
        return $this->user;
    }
    
    public function setUser(Usuario $user){
        $this->user = $user;
        return $this;
    }
    
    public function removeUser(){
        $this->user = null;
    }
    

}
