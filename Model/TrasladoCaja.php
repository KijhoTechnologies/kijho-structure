<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * TrasladoCaja
 *
 * @ORM\Table(name="traslado_caja", indexes={@ORM\Index(name="ingreso_FKIndex1", columns={"usu_codigo"})})
 * @ORM\Entity
 */
class TrasladoCaja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tc_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tc_valor", type="integer", nullable=true)
     */
    private $tcValor;

    /**
     * @var string
     *
     * @ORM\Column(name="tc_nit", type="string", length=30, nullable=false)
     */
    private $tcNit;

    /**
     * @var string
     *
     * @ORM\Column(name="tc_persona", type="string", length=50, nullable=false)
     */
    private $tcPersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tc_fecha", type="date", nullable=true)
     */
    private $tcFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="tc_hora", type="string", length=100, nullable=true)
     */
    private $tcHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="tc_descripcion", type="string", length=100, nullable=false)
     */
    private $tcDescripcion;


    /**
     * Get tcCodigo
     *
     * @return integer 
     */
    public function getTcCodigo()
    {
        return $this->tcCodigo;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return TrasladoCaja
     */
    public function setUsuCodigo($usuCodigo)
    {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo()
    {
        return $this->usuCodigo;
    }

    /**
     * Set tcValor
     *
     * @param integer $tcValor
     * @return TrasladoCaja
     */
    public function setTcValor($tcValor)
    {
        $this->tcValor = $tcValor;

        return $this;
    }

    /**
     * Get tcValor
     *
     * @return integer 
     */
    public function getTcValor()
    {
        return $this->tcValor;
    }

    /**
     * Set tcNit
     *
     * @param string $tcNit
     * @return TrasladoCaja
     */
    public function setTcNit($tcNit)
    {
        $this->tcNit = $tcNit;

        return $this;
    }

    /**
     * Get tcNit
     *
     * @return string 
     */
    public function getTcNit()
    {
        return $this->tcNit;
    }

    /**
     * Set tcPersona
     *
     * @param string $tcPersona
     * @return TrasladoCaja
     */
    public function setTcPersona($tcPersona)
    {
        $this->tcPersona = $tcPersona;

        return $this;
    }

    /**
     * Get tcPersona
     *
     * @return string 
     */
    public function getTcPersona()
    {
        return $this->tcPersona;
    }

    /**
     * Set tcFecha
     *
     * @param \DateTime $tcFecha
     * @return TrasladoCaja
     */
    public function setTcFecha($tcFecha)
    {
        $this->tcFecha = $tcFecha;

        return $this;
    }

    /**
     * Get tcFecha
     *
     * @return \DateTime 
     */
    public function getTcFecha()
    {
        return $this->tcFecha;
    }

    /**
     * Set tcHora
     *
     * @param string $tcHora
     * @return TrasladoCaja
     */
    public function setTcHora($tcHora)
    {
        $this->tcHora = $tcHora;

        return $this;
    }

    /**
     * Get tcHora
     *
     * @return string 
     */
    public function getTcHora()
    {
        return $this->tcHora;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return TrasladoCaja
     */
    public function setCodCaja($codCaja)
    {
        $this->codCaja = $codCaja;

        return $this;
    }

    /**
     * Get codCaja
     *
     * @return integer 
     */
    public function getCodCaja()
    {
        return $this->codCaja;
    }

    /**
     * Set tcDescripcion
     *
     * @param string $tcDescripcion
     * @return TrasladoCaja
     */
    public function setTcDescripcion($tcDescripcion)
    {
        $this->tcDescripcion = $tcDescripcion;

        return $this;
    }

    /**
     * Get tcDescripcion
     *
     * @return string 
     */
    public function getTcDescripcion()
    {
        return $this->tcDescripcion;
    }
}
