<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * ModuloComentarios
 *
 * @ORM\Table(name="modulo_comentarios")
 * @ORM\Entity
 */
class ModuloComentarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modulo", type="string", length=30, nullable=true)
     */
    private $nombreModulo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;


    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreModulo
     *
     * @param string $nombreModulo
     * @return ModuloComentarios
     */
    public function setNombreModulo($nombreModulo)
    {
        $this->nombreModulo = $nombreModulo;

        return $this;
    }

    /**
     * Get nombreModulo
     *
     * @return string 
     */
    public function getNombreModulo()
    {
        return $this->nombreModulo;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ModuloComentarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
