<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Precompra
 *
 * @ORM\Table(name="precompra")
 * @ORM\Entity
 */
class Precompra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prec_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $precCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prec_fecha_creacion", type="datetime", nullable=false)
     */
    private $precFechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prec_ultima_actualizacion", type="datetime", nullable=false)
     */
    private $precUltimaActualizacion;


    /**
     * Get precCodigo
     *
     * @return integer 
     */
    public function getPrecCodigo()
    {
        return $this->precCodigo;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return Precompra
     */
    public function setCliCodigo($cliCodigo)
    {
        $this->cliCodigo = $cliCodigo;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo()
    {
        return $this->cliCodigo;
    }

    /**
     * Set precFechaCreacion
     *
     * @param \DateTime $precFechaCreacion
     * @return Precompra
     */
    public function setPrecFechaCreacion($precFechaCreacion)
    {
        $this->precFechaCreacion = $precFechaCreacion;

        return $this;
    }

    /**
     * Get precFechaCreacion
     *
     * @return \DateTime 
     */
    public function getPrecFechaCreacion()
    {
        return $this->precFechaCreacion;
    }

    /**
     * Set precUltimaActualizacion
     *
     * @param \DateTime $precUltimaActualizacion
     * @return Precompra
     */
    public function setPrecUltimaActualizacion($precUltimaActualizacion)
    {
        $this->precUltimaActualizacion = $precUltimaActualizacion;

        return $this;
    }

    /**
     * Get precUltimaActualizacion
     *
     * @return \DateTime 
     */
    public function getPrecUltimaActualizacion()
    {
        return $this->precUltimaActualizacion;
    }
}
