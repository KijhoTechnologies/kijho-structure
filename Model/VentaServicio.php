<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * VentaServicio
 *
 * @ORM\Table(name="venta_servicio")
 * @ORM\Entity
 */
class VentaServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vtserv_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vtservCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vtserv_fecha", type="date", nullable=false)
     */
    private $vtservFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="vtserv_hora", type="string", length=50, nullable=false)
     */
    private $vtservHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtserv_subtotal", type="integer", nullable=true)
     */
    private $vtservSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtserv_retencion", type="integer", nullable=true)
     */
    private $vtservRetencion;

    /**
     * @var integer
     *
     * @ORM\Column(name="vtserv_total", type="integer", nullable=false)
     */
    private $vtservTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;


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
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return VentaServicio
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
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return VentaServicio
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
     * Set vtservFecha
     *
     * @param \DateTime $vtservFecha
     * @return VentaServicio
     */
    public function setVtservFecha($vtservFecha)
    {
        $this->vtservFecha = $vtservFecha;

        return $this;
    }

    /**
     * Get vtservFecha
     *
     * @return \DateTime 
     */
    public function getVtservFecha()
    {
        return $this->vtservFecha;
    }

    /**
     * Set vtservHora
     *
     * @param string $vtservHora
     * @return VentaServicio
     */
    public function setVtservHora($vtservHora)
    {
        $this->vtservHora = $vtservHora;

        return $this;
    }

    /**
     * Get vtservHora
     *
     * @return string 
     */
    public function getVtservHora()
    {
        return $this->vtservHora;
    }

    /**
     * Set vtservSubtotal
     *
     * @param integer $vtservSubtotal
     * @return VentaServicio
     */
    public function setVtservSubtotal($vtservSubtotal)
    {
        $this->vtservSubtotal = $vtservSubtotal;

        return $this;
    }

    /**
     * Get vtservSubtotal
     *
     * @return integer 
     */
    public function getVtservSubtotal()
    {
        return $this->vtservSubtotal;
    }

    /**
     * Set vtservRetencion
     *
     * @param integer $vtservRetencion
     * @return VentaServicio
     */
    public function setVtservRetencion($vtservRetencion)
    {
        $this->vtservRetencion = $vtservRetencion;

        return $this;
    }

    /**
     * Get vtservRetencion
     *
     * @return integer 
     */
    public function getVtservRetencion()
    {
        return $this->vtservRetencion;
    }

    /**
     * Set vtservTotal
     *
     * @param integer $vtservTotal
     * @return VentaServicio
     */
    public function setVtservTotal($vtservTotal)
    {
        $this->vtservTotal = $vtservTotal;

        return $this;
    }

    /**
     * Get vtservTotal
     *
     * @return integer 
     */
    public function getVtservTotal()
    {
        return $this->vtservTotal;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return VentaServicio
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
}
