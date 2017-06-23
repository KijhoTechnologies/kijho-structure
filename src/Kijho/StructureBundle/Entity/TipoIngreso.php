<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * TipoIngreso
 *
 * @ORM\Table(name="tipo_ingreso")
 * @ORM\Entity
 */
class TipoIngreso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ting_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tingCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="ting_nombre", type="string", length=100, nullable=true)
     */
    private $tingNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ting_descripcion", type="text", length=65535, nullable=false)
     */
    private $tingDescripcion;


    /**
     * Get tingCodigo
     *
     * @return integer 
     */
    public function getTingCodigo()
    {
        return $this->tingCodigo;
    }

    /**
     * Set tingNombre
     *
     * @param string $tingNombre
     * @return TipoIngreso
     */
    public function setTingNombre($tingNombre)
    {
        $this->tingNombre = $tingNombre;

        return $this;
    }

    /**
     * Get tingNombre
     *
     * @return string 
     */
    public function getTingNombre()
    {
        return $this->tingNombre;
    }

    /**
     * Set tingDescripcion
     *
     * @param string $tingDescripcion
     * @return TipoIngreso
     */
    public function setTingDescripcion($tingDescripcion)
    {
        $this->tingDescripcion = $tingDescripcion;

        return $this;
    }

    /**
     * Get tingDescripcion
     *
     * @return string 
     */
    public function getTingDescripcion()
    {
        return $this->tingDescripcion;
    }
}
