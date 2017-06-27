<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * TraspasoInventarioEntrada
 *
 * @ORM\Table(name="traspaso_inventario_entrada")
 * @ORM\Entity
 */
class TraspasoInventarioEntrada
{
    const TRASPASO_INVENTARIO_ENTRADA_ANULADO_NO = 'No';
    const TRASPASO_INVENTARIO_ENTRADA_ANULADO_SI = 'Si';
    
    /**
     * @var integer
     *
     * @ORM\Column(name="tras_entrada_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trasEntradaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tras_traslado_salida", type="integer", nullable=true)
     */
    private $trasTrasladoSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_responsable", type="string", length=100, nullable=true)
     */
    private $trasResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_anulado", type="string", length=11, nullable=false)
     */
    private $trasAnulado;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursal_origen", type="string", length=500, nullable=false)
     */
    private $sucursalOrigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="tras_entrada_valor", type="integer", nullable=false)
     */
    private $trasEntradaValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tras_entrada_fecha", type="date", nullable=false)
     */
    private $trasEntradaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_entrada_hora", type="string", length=100, nullable=false)
     */
    private $trasEntradaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_entrada_concepto", type="text", nullable=false)
     */
    private $trasEntradaConcepto;


    /**
     * Get trasEntradaCodigo
     *
     * @return integer 
     */
    public function getTrasEntradaCodigo()
    {
        return $this->trasEntradaCodigo;
    }

    /**
     * Set trasTrasladoSalida
     *
     * @param integer $trasTrasladoSalida
     * @return TraspasoInventarioEntrada
     */
    public function setTrasTrasladoSalida($trasTrasladoSalida)
    {
        $this->trasTrasladoSalida = $trasTrasladoSalida;

        return $this;
    }

    /**
     * Get trasTrasladoSalida
     *
     * @return integer 
     */
    public function getTrasTrasladoSalida()
    {
        return $this->trasTrasladoSalida;
    }

    /**
     * Set trasResponsable
     *
     * @param string $trasResponsable
     * @return TraspasoInventarioEntrada
     */
    public function setTrasResponsable($trasResponsable)
    {
        $this->trasResponsable = $trasResponsable;

        return $this;
    }

    /**
     * Get trasResponsable
     *
     * @return string 
     */
    public function getTrasResponsable()
    {
        return $this->trasResponsable;
    }

    /**
     * Set trasAnulado
     *
     * @param string $trasAnulado
     * @return TraspasoInventarioEntrada
     */
    public function setTrasAnulado($trasAnulado)
    {
        $this->trasAnulado = $trasAnulado;

        return $this;
    }

    /**
     * Get trasAnulado
     *
     * @return string 
     */
    public function getTrasAnulado()
    {
        return $this->trasAnulado;
    }

    /**
     * Set sucursalOrigen
     *
     * @param string $sucursalOrigen
     * @return TraspasoInventarioEntrada
     */
    public function setSucursalOrigen($sucursalOrigen)
    {
        $this->sucursalOrigen = $sucursalOrigen;

        return $this;
    }

    /**
     * Get sucursalOrigen
     *
     * @return string 
     */
    public function getSucursalOrigen()
    {
        return $this->sucursalOrigen;
    }

    /**
     * Set trasEntradaValor
     *
     * @param integer $trasEntradaValor
     * @return TraspasoInventarioEntrada
     */
    public function setTrasEntradaValor($trasEntradaValor)
    {
        $this->trasEntradaValor = $trasEntradaValor;

        return $this;
    }

    /**
     * Get trasEntradaValor
     *
     * @return integer 
     */
    public function getTrasEntradaValor()
    {
        return $this->trasEntradaValor;
    }

    /**
     * Set trasEntradaFecha
     *
     * @param \DateTime $trasEntradaFecha
     * @return TraspasoInventarioEntrada
     */
    public function setTrasEntradaFecha($trasEntradaFecha)
    {
        $this->trasEntradaFecha = $trasEntradaFecha;

        return $this;
    }

    /**
     * Get trasEntradaFecha
     *
     * @return \DateTime 
     */
    public function getTrasEntradaFecha()
    {
        return $this->trasEntradaFecha;
    }

    /**
     * Set trasEntradaHora
     *
     * @param string $trasEntradaHora
     * @return TraspasoInventarioEntrada
     */
    public function setTrasEntradaHora($trasEntradaHora)
    {
        $this->trasEntradaHora = $trasEntradaHora;

        return $this;
    }

    /**
     * Get trasEntradaHora
     *
     * @return string 
     */
    public function getTrasEntradaHora()
    {
        return $this->trasEntradaHora;
    }

    /**
     * Set trasEntradaConcepto
     *
     * @param string $trasEntradaConcepto
     * @return TraspasoInventarioEntrada
     */
    public function setTrasEntradaConcepto($trasEntradaConcepto)
    {
        $this->trasEntradaConcepto = $trasEntradaConcepto;

        return $this;
    }

    /**
     * Get trasEntradaConcepto
     *
     * @return string 
     */
    public function getTrasEntradaConcepto()
    {
        return $this->trasEntradaConcepto;
    }
}
