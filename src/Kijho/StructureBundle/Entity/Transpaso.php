<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Transpaso
 *
 * @ORM\Table(name="transpaso")
 * @ORM\Entity
 */
class Transpaso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tran_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tranCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tran_fecha", type="date", nullable=false)
     */
    private $tranFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="tran_hora", type="string", length=100, nullable=false)
     */
    private $tranHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_procodsal", type="integer", nullable=false)
     */
    private $tranProcodsal;

    /**
     * @var float
     *
     * @ORM\Column(name="tran_procodsalcant", type="float", precision=10, scale=0, nullable=false)
     */
    private $tranProcodsalcant;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_procodent", type="integer", nullable=false)
     */
    private $tranProcodent;

    /**
     * @var float
     *
     * @ORM\Column(name="tran_procodentcant", type="float", precision=10, scale=0, nullable=false)
     */
    private $tranProcodentcant;

    /**
     * @var string
     *
     * @ORM\Column(name="tran_estado", type="string", nullable=false)
     */
    private $tranEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="tran_nota", type="text", nullable=true)
     */
    private $tranNota;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;


    /**
     * Get tranCodigo
     *
     * @return integer 
     */
    public function getTranCodigo()
    {
        return $this->tranCodigo;
    }

    /**
     * Set tranFecha
     *
     * @param \DateTime $tranFecha
     * @return Transpaso
     */
    public function setTranFecha($tranFecha)
    {
        $this->tranFecha = $tranFecha;

        return $this;
    }

    /**
     * Get tranFecha
     *
     * @return \DateTime 
     */
    public function getTranFecha()
    {
        return $this->tranFecha;
    }

    /**
     * Set tranHora
     *
     * @param string $tranHora
     * @return Transpaso
     */
    public function setTranHora($tranHora)
    {
        $this->tranHora = $tranHora;

        return $this;
    }

    /**
     * Get tranHora
     *
     * @return string 
     */
    public function getTranHora()
    {
        return $this->tranHora;
    }

    /**
     * Set tranProcodsal
     *
     * @param integer $tranProcodsal
     * @return Transpaso
     */
    public function setTranProcodsal($tranProcodsal)
    {
        $this->tranProcodsal = $tranProcodsal;

        return $this;
    }

    /**
     * Get tranProcodsal
     *
     * @return integer 
     */
    public function getTranProcodsal()
    {
        return $this->tranProcodsal;
    }

    /**
     * Set tranProcodsalcant
     *
     * @param float $tranProcodsalcant
     * @return Transpaso
     */
    public function setTranProcodsalcant($tranProcodsalcant)
    {
        $this->tranProcodsalcant = $tranProcodsalcant;

        return $this;
    }

    /**
     * Get tranProcodsalcant
     *
     * @return float 
     */
    public function getTranProcodsalcant()
    {
        return $this->tranProcodsalcant;
    }

    /**
     * Set tranProcodent
     *
     * @param integer $tranProcodent
     * @return Transpaso
     */
    public function setTranProcodent($tranProcodent)
    {
        $this->tranProcodent = $tranProcodent;

        return $this;
    }

    /**
     * Get tranProcodent
     *
     * @return integer 
     */
    public function getTranProcodent()
    {
        return $this->tranProcodent;
    }

    /**
     * Set tranProcodentcant
     *
     * @param float $tranProcodentcant
     * @return Transpaso
     */
    public function setTranProcodentcant($tranProcodentcant)
    {
        $this->tranProcodentcant = $tranProcodentcant;

        return $this;
    }

    /**
     * Get tranProcodentcant
     *
     * @return float 
     */
    public function getTranProcodentcant()
    {
        return $this->tranProcodentcant;
    }

    /**
     * Set tranEstado
     *
     * @param string $tranEstado
     * @return Transpaso
     */
    public function setTranEstado($tranEstado)
    {
        $this->tranEstado = $tranEstado;

        return $this;
    }

    /**
     * Get tranEstado
     *
     * @return string 
     */
    public function getTranEstado()
    {
        return $this->tranEstado;
    }

    /**
     * Set tranNota
     *
     * @param string $tranNota
     * @return Transpaso
     */
    public function setTranNota($tranNota)
    {
        $this->tranNota = $tranNota;

        return $this;
    }

    /**
     * Get tranNota
     *
     * @return string 
     */
    public function getTranNota()
    {
        return $this->tranNota;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return Transpaso
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
}
