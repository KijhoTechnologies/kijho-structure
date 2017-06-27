<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Resolucion
 *
 * @ORM\Table(name="resolucion")
 * @ORM\Entity(repositoryClass="ResolucionRepository")
 */
class Resolucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reso_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $resoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="reso_numero", type="string", length=30, nullable=true)
     */
    private $resoNumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reso_fecha", type="date", nullable=false)
     */
    private $resoFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="reso_numero_inicial", type="string", length=30, nullable=true)
     */
    private $resoNumeroInicial;

    /**
     * @var string
     *
     * @ORM\Column(name="reso_numero_final", type="string", length=30, nullable=true)
     */
    private $resoNumeroFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="reso_tipo", type="string", length=30, nullable=true)
     */
    private $resoTipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reso_fecha_creacion", type="date", nullable=false)
     */
    private $resoFechaCreacion;


    /**
     * Get resoCodigo
     *
     * @return integer 
     */
    public function getResoCodigo()
    {
        return $this->resoCodigo;
    }

    /**
     * Set resoNumero
     *
     * @param string $resoNumero
     * @return Resolucion
     */
    public function setResoNumero($resoNumero)
    {
        $this->resoNumero = $resoNumero;

        return $this;
    }

    /**
     * Get resoNumero
     *
     * @return string 
     */
    public function getResoNumero()
    {
        return $this->resoNumero;
    }

    /**
     * Set resoFecha
     *
     * @param \DateTime $resoFecha
     * @return Resolucion
     */
    public function setResoFecha($resoFecha)
    {
        $this->resoFecha = $resoFecha;

        return $this;
    }

    /**
     * Get resoFecha
     *
     * @return \DateTime 
     */
    public function getResoFecha()
    {
        return $this->resoFecha;
    }

    /**
     * Set resoNumeroInicial
     *
     * @param string $resoNumeroInicial
     * @return Resolucion
     */
    public function setResoNumeroInicial($resoNumeroInicial)
    {
        $this->resoNumeroInicial = $resoNumeroInicial;

        return $this;
    }

    /**
     * Get resoNumeroInicial
     *
     * @return string 
     */
    public function getResoNumeroInicial()
    {
        return $this->resoNumeroInicial;
    }

    /**
     * Set resoNumeroFinal
     *
     * @param string $resoNumeroFinal
     * @return Resolucion
     */
    public function setResoNumeroFinal($resoNumeroFinal)
    {
        $this->resoNumeroFinal = $resoNumeroFinal;

        return $this;
    }

    /**
     * Get resoNumeroFinal
     *
     * @return string 
     */
    public function getResoNumeroFinal()
    {
        return $this->resoNumeroFinal;
    }

    /**
     * Set resoTipo
     *
     * @param string $resoTipo
     * @return Resolucion
     */
    public function setResoTipo($resoTipo)
    {
        $this->resoTipo = $resoTipo;

        return $this;
    }

    /**
     * Get resoTipo
     *
     * @return string 
     */
    public function getResoTipo()
    {
        return $this->resoTipo;
    }

    /**
     * Set resoFechaCreacion
     *
     * @param \DateTime $resoFechaCreacion
     * @return Resolucion
     */
    public function setResoFechaCreacion($resoFechaCreacion)
    {
        $this->resoFechaCreacion = $resoFechaCreacion;

        return $this;
    }

    /**
     * Get resoFechaCreacion
     *
     * @return \DateTime 
     */
    public function getResoFechaCreacion()
    {
        return $this->resoFechaCreacion;
    }
}
