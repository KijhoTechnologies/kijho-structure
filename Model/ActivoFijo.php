<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijo
 *
 * @ORM\Table(name="activo_fijo")
 * @ORM\Entity
 */
class ActivoFijo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="act_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="act_tipo", type="string", nullable=false)
     */
    private $actTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="act_marca", type="string", length=30, nullable=false)
     */
    private $actMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="act_modelo", type="string", length=30, nullable=false)
     */
    private $actModelo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="act_fecha", type="date", nullable=false)
     */
    private $actFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_valor", type="integer", nullable=false)
     */
    private $actValor;

    /**
     * @var string
     *
     * @ORM\Column(name="act_estado", type="string", nullable=false)
     */
    private $actEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="act_descripcion", type="string", length=200, nullable=false)
     */
    private $actDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="act_cantidad", type="integer", nullable=false)
     */
    private $actCantidad;


    /**
     * Get actCodigo
     *
     * @return integer 
     */
    public function getActCodigo()
    {
        return $this->actCodigo;
    }

    /**
     * Set actTipo
     *
     * @param string $actTipo
     * @return ActivoFijo
     */
    public function setActTipo($actTipo)
    {
        $this->actTipo = $actTipo;

        return $this;
    }

    /**
     * Get actTipo
     *
     * @return string 
     */
    public function getActTipo()
    {
        return $this->actTipo;
    }

    /**
     * Set actMarca
     *
     * @param string $actMarca
     * @return ActivoFijo
     */
    public function setActMarca($actMarca)
    {
        $this->actMarca = $actMarca;

        return $this;
    }

    /**
     * Get actMarca
     *
     * @return string 
     */
    public function getActMarca()
    {
        return $this->actMarca;
    }

    /**
     * Set actModelo
     *
     * @param string $actModelo
     * @return ActivoFijo
     */
    public function setActModelo($actModelo)
    {
        $this->actModelo = $actModelo;

        return $this;
    }

    /**
     * Get actModelo
     *
     * @return string 
     */
    public function getActModelo()
    {
        return $this->actModelo;
    }

    /**
     * Set actFecha
     *
     * @param \DateTime $actFecha
     * @return ActivoFijo
     */
    public function setActFecha($actFecha)
    {
        $this->actFecha = $actFecha;

        return $this;
    }

    /**
     * Get actFecha
     *
     * @return \DateTime 
     */
    public function getActFecha()
    {
        return $this->actFecha;
    }

    /**
     * Set actValor
     *
     * @param integer $actValor
     * @return ActivoFijo
     */
    public function setActValor($actValor)
    {
        $this->actValor = $actValor;

        return $this;
    }

    /**
     * Get actValor
     *
     * @return integer 
     */
    public function getActValor()
    {
        return $this->actValor;
    }

    /**
     * Set actEstado
     *
     * @param string $actEstado
     * @return ActivoFijo
     */
    public function setActEstado($actEstado)
    {
        $this->actEstado = $actEstado;

        return $this;
    }

    /**
     * Get actEstado
     *
     * @return string 
     */
    public function getActEstado()
    {
        return $this->actEstado;
    }

    /**
     * Set actDescripcion
     *
     * @param string $actDescripcion
     * @return ActivoFijo
     */
    public function setActDescripcion($actDescripcion)
    {
        $this->actDescripcion = $actDescripcion;

        return $this;
    }

    /**
     * Get actDescripcion
     *
     * @return string 
     */
    public function getActDescripcion()
    {
        return $this->actDescripcion;
    }

    /**
     * Set actCantidad
     *
     * @param integer $actCantidad
     * @return ActivoFijo
     */
    public function setActCantidad($actCantidad)
    {
        $this->actCantidad = $actCantidad;

        return $this;
    }

    /**
     * Get actCantidad
     *
     * @return integer 
     */
    public function getActCantidad()
    {
        return $this->actCantidad;
    }
    
    
    
}
