<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * BasesDatos
 *
 * @ORM\Table(name="bases_datos")
 * @ORM\Entity
 */
class BasesDatos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_base_datos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBaseDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="base_datos", type="string", length=500, nullable=true)
     */
    private $baseDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_nogocio", type="string", length=500, nullable=true)
     */
    private $nombreNogocio;


    /**
     * Get idBaseDatos
     *
     * @return integer 
     */
    public function getIdBaseDatos()
    {
        return $this->idBaseDatos;
    }

    /**
     * Set baseDatos
     *
     * @param string $baseDatos
     * @return BasesDatos
     */
    public function setBaseDatos($baseDatos)
    {
        $this->baseDatos = $baseDatos;

        return $this;
    }

    /**
     * Get baseDatos
     *
     * @return string 
     */
    public function getBaseDatos()
    {
        return $this->baseDatos;
    }

    /**
     * Set nombreNogocio
     *
     * @param string $nombreNogocio
     * @return BasesDatos
     */
    public function setNombreNogocio($nombreNogocio)
    {
        $this->nombreNogocio = $nombreNogocio;

        return $this;
    }

    /**
     * Get nombreNogocio
     *
     * @return string 
     */
    public function getNombreNogocio()
    {
        return $this->nombreNogocio;
    }
}
