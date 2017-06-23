<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonoRemisionesVentas
 *
 * @ORM\Table(name="abono_remisiones_ventas")
 * @ORM\Entity
 */
class AbonoRemisionesVentas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rema_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $remaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rem_codigo", type="integer", nullable=true)
     */
    private $remCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rema_fecha", type="date", nullable=true)
     */
    private $remaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rema_hora", type="string", length=50, nullable=true)
     */
    private $remaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="rema_abono", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $remaAbono;

    /**
     * @var string
     *
     * @ORM\Column(name="rema_resta", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $remaResta;


    /**
     * Get remaCodigo
     *
     * @return integer 
     */
    public function getRemaCodigo()
    {
        return $this->remaCodigo;
    }

    /**
     * Set remCodigo
     *
     * @param integer $remCodigo
     * @return AbonoRemisionesVentas
     */
    public function setRemCodigo($remCodigo)
    {
        $this->remCodigo = $remCodigo;

        return $this;
    }

    /**
     * Get remCodigo
     *
     * @return integer 
     */
    public function getRemCodigo()
    {
        return $this->remCodigo;
    }

    /**
     * Set remaFecha
     *
     * @param \DateTime $remaFecha
     * @return AbonoRemisionesVentas
     */
    public function setRemaFecha($remaFecha)
    {
        $this->remaFecha = $remaFecha;

        return $this;
    }

    /**
     * Get remaFecha
     *
     * @return \DateTime 
     */
    public function getRemaFecha()
    {
        return $this->remaFecha;
    }

    /**
     * Set remaHora
     *
     * @param string $remaHora
     * @return AbonoRemisionesVentas
     */
    public function setRemaHora($remaHora)
    {
        $this->remaHora = $remaHora;

        return $this;
    }

    /**
     * Get remaHora
     *
     * @return string 
     */
    public function getRemaHora()
    {
        return $this->remaHora;
    }

    /**
     * Set remaAbono
     *
     * @param string $remaAbono
     * @return AbonoRemisionesVentas
     */
    public function setRemaAbono($remaAbono)
    {
        $this->remaAbono = $remaAbono;

        return $this;
    }

    /**
     * Get remaAbono
     *
     * @return string 
     */
    public function getRemaAbono()
    {
        return $this->remaAbono;
    }

    /**
     * Set remaResta
     *
     * @param string $remaResta
     * @return AbonoRemisionesVentas
     */
    public function setRemaResta($remaResta)
    {
        $this->remaResta = $remaResta;

        return $this;
    }

    /**
     * Get remaResta
     *
     * @return string 
     */
    public function getRemaResta()
    {
        return $this->remaResta;
    }
    }
