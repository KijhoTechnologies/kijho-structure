<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of Barrios
 * Entidad de tutorial
 * @author jocampo
 */

/**
 * @ORM\Entity(repositoryClass="BarriosRepository")
 * @ORM\Table(name="barrios", indexes={@ORM\Index(name="IDX_6CA622B4104EA8FC", columns={"zona_id"}), @ORM\Index(name="IDX_6CA622B4C54E8C63", columns={"dep_codigo"}), @ORM\Index(name="IDX_6CA622B4FCAAC6C1", columns={"mun_codigo"})})
 */
class Barrios {
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_barrio", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_barrio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Kijho\Seitem\BackendBundle\Entity\Municipios
     *
     * @ORM\ManyToOne(targetEntity="Kijho\Seitem\BackendBundle\Entity\Municipios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mun_codigo", referencedColumnName="mun_codigo")
     * })
     */
    private $munCodigo;

    /**
     * @var \Kijho\Seitem\BackendBundle\Entity\Departamentos
     *
     * @ORM\ManyToOne(targetEntity="Kijho\Seitem\BackendBundle\Entity\Departamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dep_codigo", referencedColumnName="dep_codigo")
     * })
     */
    private $depCodigo;

    /**
     * @var \Kijho\Seitem\BackendBundle\Entity\Zona
     *
     * @ORM\ManyToOne(targetEntity="Kijho\Seitem\BackendBundle\Entity\Zona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zona_id", referencedColumnName="id")
     * })
     */
    private $zona;
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
     * Set nombre
     *
     * @param string $nombre
     * @return Barrios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * Set zona
     *
     * @param \zona $zona
     * @return Barrios
     */
    public function setZona(Zona $zona = null)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return \zona 
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set depCodigo
     *
     * @param \departamentos $depCodigo
     * @return Barrios
     */
    public function setDepCodigo(Departamentos $depCodigo = null)
    {
        $this->depCodigo = $depCodigo;

        return $this;
    }

    /**
     * Get depCodigo
     *
     * @return \departamentos 
     */
    public function getDepCodigo()
    {
        return $this->depCodigo;
    }

    /**
     * Set munCodigo
     *
     * @param \municipios $munCodigo
     * @return Barrios
     */
    public function setMunCodigo(Municipios $munCodigo = null)
    {
        $this->munCodigo = $munCodigo;

        return $this;
    }

    /**
     * Get munCodigo
     *
     * @return \municipios 
     */
    public function getMunCodigo()
    {
        return $this->munCodigo;
    }
}
