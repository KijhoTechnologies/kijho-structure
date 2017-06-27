<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * VentaServicioDetalle
 *
 * @ORM\Table(name="venta_servicio_detalle")
 * @ORM\Entity
 */
class VentaServicioDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vtservdet_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vtservdetCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtserv_codigo", type="integer", nullable=false)
     */
    private $vtservCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prodserv_codigo", type="integer", nullable=false)
     */
    private $prodservCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vtservdet_fecha", type="date", nullable=false)
     */
    private $vtservdetFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="vtservdet_hora", type="string", length=50, nullable=false)
     */
    private $vtservdetHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtservdet_total", type="integer", nullable=false)
     */
    private $vtservdetTotal;


    /**
     * Get vtservdetCodigo
     *
     * @return integer 
     */
    public function getVtservdetCodigo()
    {
        return $this->vtservdetCodigo;
    }

    /**
     * Set vtservCodigo
     *
     * @param integer $vtservCodigo
     * @return VentaServicioDetalle
     */
    public function setVtservCodigo($vtservCodigo)
    {
        $this->vtservCodigo = $vtservCodigo;

        return $this;
    }

    /**
     * Get vtservCodigo
     *
     * @return integer 
     */
    public function getVtservCodigo()
    {
        return $this->vtservCodigo;
    }

    /**
     * Set prodservCodigo
     *
     * @param integer $prodservCodigo
     * @return VentaServicioDetalle
     */
    public function setProdservCodigo($prodservCodigo)
    {
        $this->prodservCodigo = $prodservCodigo;

        return $this;
    }

    /**
     * Get prodservCodigo
     *
     * @return integer 
     */
    public function getProdservCodigo()
    {
        return $this->prodservCodigo;
    }

    /**
     * Set vtservdetFecha
     *
     * @param \DateTime $vtservdetFecha
     * @return VentaServicioDetalle
     */
    public function setVtservdetFecha($vtservdetFecha)
    {
        $this->vtservdetFecha = $vtservdetFecha;

        return $this;
    }

    /**
     * Get vtservdetFecha
     *
     * @return \DateTime 
     */
    public function getVtservdetFecha()
    {
        return $this->vtservdetFecha;
    }

    /**
     * Set vtservdetHora
     *
     * @param string $vtservdetHora
     * @return VentaServicioDetalle
     */
    public function setVtservdetHora($vtservdetHora)
    {
        $this->vtservdetHora = $vtservdetHora;

        return $this;
    }

    /**
     * Get vtservdetHora
     *
     * @return string 
     */
    public function getVtservdetHora()
    {
        return $this->vtservdetHora;
    }

    /**
     * Set vtservdetTotal
     *
     * @param integer $vtservdetTotal
     * @return VentaServicioDetalle
     */
    public function setVtservdetTotal($vtservdetTotal)
    {
        $this->vtservdetTotal = $vtservdetTotal;

        return $this;
    }

    /**
     * Get vtservdetTotal
     *
     * @return integer 
     */
    public function getVtservdetTotal()
    {
        return $this->vtservdetTotal;
    }
}
