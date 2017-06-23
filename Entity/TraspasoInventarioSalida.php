<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * TraspasoInventarioSalida
 *
 * @ORM\Table(name="traspaso_inventario_salida")
 * @ORM\Entity
 */
class TraspasoInventarioSalida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tras_salida_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trasSalidaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_anulado", type="string", length=100, nullable=false)
     */
    private $trasAnulado;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_sucursal_origen", type="string", length=500, nullable=true)
     */
    private $trasSucursalOrigen;

    /**
     * @var string
     *
     * @ORM\Column(name="sucursal", type="string", length=500, nullable=false)
     */
    private $sucursal;

    /**
     * @var integer
     *
     * @ORM\Column(name="tras_salida_usuario", type="integer", nullable=true)
     */
    private $trasSalidaUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_salida_estado", type="string", length=100, nullable=true)
     */
    private $trasSalidaEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="tras_salida_valor", type="integer", nullable=false)
     */
    private $trasSalidaValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tras_salida_fecha", type="date", nullable=false)
     */
    private $trasSalidaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_salida_hora", type="string", length=100, nullable=false)
     */
    private $trasSalidaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="tras_salida_concepto", type="text", nullable=false)
     */
    private $trasSalidaConcepto;


    /**
     * Get trasSalidaCodigo
     *
     * @return integer 
     */
    public function getTrasSalidaCodigo()
    {
        return $this->trasSalidaCodigo;
    }

    /**
     * Set trasAnulado
     *
     * @param string $trasAnulado
     * @return TraspasoInventarioSalida
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
     * Set trasSucursalOrigen
     *
     * @param string $trasSucursalOrigen
     * @return TraspasoInventarioSalida
     */
    public function setTrasSucursalOrigen($trasSucursalOrigen)
    {
        $this->trasSucursalOrigen = $trasSucursalOrigen;

        return $this;
    }

    /**
     * Get trasSucursalOrigen
     *
     * @return string 
     */
    public function getTrasSucursalOrigen()
    {
        return $this->trasSucursalOrigen;
    }

    /**
     * Set sucursal
     *
     * @param string $sucursal
     * @return TraspasoInventarioSalida
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set trasSalidaUsuario
     *
     * @param integer $trasSalidaUsuario
     * @return TraspasoInventarioSalida
     */
    public function setTrasSalidaUsuario($trasSalidaUsuario)
    {
        $this->trasSalidaUsuario = $trasSalidaUsuario;

        return $this;
    }

    /**
     * Get trasSalidaUsuario
     *
     * @return integer 
     */
    public function getTrasSalidaUsuario()
    {
        return $this->trasSalidaUsuario;
    }

    /**
     * Set trasSalidaEstado
     *
     * @param string $trasSalidaEstado
     * @return TraspasoInventarioSalida
     */
    public function setTrasSalidaEstado($trasSalidaEstado)
    {
        $this->trasSalidaEstado = $trasSalidaEstado;

        return $this;
    }

    /**
     * Get trasSalidaEstado
     *
     * @return string 
     */
    public function getTrasSalidaEstado()
    {
        return $this->trasSalidaEstado;
    }

    /**
     * Set trasSalidaValor
     *
     * @param integer $trasSalidaValor
     * @return TraspasoInventarioSalida
     */
    public function setTrasSalidaValor($trasSalidaValor)
    {
        $this->trasSalidaValor = $trasSalidaValor;

        return $this;
    }

    /**
     * Get trasSalidaValor
     *
     * @return integer 
     */
    public function getTrasSalidaValor()
    {
        return $this->trasSalidaValor;
    }

    /**
     * Set trasSalidaFecha
     *
     * @param \DateTime $trasSalidaFecha
     * @return TraspasoInventarioSalida
     */
    public function setTrasSalidaFecha($trasSalidaFecha)
    {
        $this->trasSalidaFecha = $trasSalidaFecha;

        return $this;
    }

    /**
     * Get trasSalidaFecha
     *
     * @return \DateTime 
     */
    public function getTrasSalidaFecha()
    {
        return $this->trasSalidaFecha;
    }

    /**
     * Set trasSalidaHora
     *
     * @param string $trasSalidaHora
     * @return TraspasoInventarioSalida
     */
    public function setTrasSalidaHora($trasSalidaHora)
    {
        $this->trasSalidaHora = $trasSalidaHora;

        return $this;
    }

    /**
     * Get trasSalidaHora
     *
     * @return string 
     */
    public function getTrasSalidaHora()
    {
        return $this->trasSalidaHora;
    }

    /**
     * Set trasSalidaConcepto
     *
     * @param string $trasSalidaConcepto
     * @return TraspasoInventarioSalida
     */
    public function setTrasSalidaConcepto($trasSalidaConcepto)
    {
        $this->trasSalidaConcepto = $trasSalidaConcepto;

        return $this;
    }

    /**
     * Get trasSalidaConcepto
     *
     * @return string 
     */
    public function getTrasSalidaConcepto()
    {
        return $this->trasSalidaConcepto;
    }
}
