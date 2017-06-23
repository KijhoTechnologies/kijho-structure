<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * VentaRuta
 *
 * @ORM\Table(name="venta_ruta")
 * @ORM\Entity
 */
class VentaRuta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ver_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $verCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="ver_ruta", type="string", nullable=false)
     */
    private $verRuta;

    /**
     * @var string
     *
     * @ORM\Column(name="ver_vendedor", type="string", length=255, nullable=false)
     */
    private $verVendedor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ver_fecha", type="date", nullable=false)
     */
    private $verFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ver_fecha_creacion", type="date", nullable=false)
     */
    private $verFechaCreacion;

    /**
     * @var float
     *
     * @ORM\Column(name="ver_16", type="float", precision=10, scale=0, nullable=false)
     */
    private $ver16;

    /**
     * @var float
     *
     * @ORM\Column(name="ver_10", type="float", precision=10, scale=0, nullable=false)
     */
    private $ver10;

    /**
     * @var float
     *
     * @ORM\Column(name="ver_exento", type="float", precision=10, scale=0, nullable=false)
     */
    private $verExento;

    /**
     * @var float
     *
     * @ORM\Column(name="ver_efectivo", type="float", precision=10, scale=0, nullable=false)
     */
    private $verEfectivo;


    /**
     * Get verCodigo
     *
     * @return integer 
     */
    public function getVerCodigo()
    {
        return $this->verCodigo;
    }

    /**
     * Set verRuta
     *
     * @param string $verRuta
     * @return VentaRuta
     */
    public function setVerRuta($verRuta)
    {
        $this->verRuta = $verRuta;

        return $this;
    }

    /**
     * Get verRuta
     *
     * @return string 
     */
    public function getVerRuta()
    {
        return $this->verRuta;
    }

    /**
     * Set verVendedor
     *
     * @param string $verVendedor
     * @return VentaRuta
     */
    public function setVerVendedor($verVendedor)
    {
        $this->verVendedor = $verVendedor;

        return $this;
    }

    /**
     * Get verVendedor
     *
     * @return string 
     */
    public function getVerVendedor()
    {
        return $this->verVendedor;
    }

    /**
     * Set verFecha
     *
     * @param \DateTime $verFecha
     * @return VentaRuta
     */
    public function setVerFecha($verFecha)
    {
        $this->verFecha = $verFecha;

        return $this;
    }

    /**
     * Get verFecha
     *
     * @return \DateTime 
     */
    public function getVerFecha()
    {
        return $this->verFecha;
    }

    /**
     * Set verFechaCreacion
     *
     * @param \DateTime $verFechaCreacion
     * @return VentaRuta
     */
    public function setVerFechaCreacion($verFechaCreacion)
    {
        $this->verFechaCreacion = $verFechaCreacion;

        return $this;
    }

    /**
     * Get verFechaCreacion
     *
     * @return \DateTime 
     */
    public function getVerFechaCreacion()
    {
        return $this->verFechaCreacion;
    }

    /**
     * Set ver16
     *
     * @param float $ver16
     * @return VentaRuta
     */
    public function setVer16($ver16)
    {
        $this->ver16 = $ver16;

        return $this;
    }

    /**
     * Get ver16
     *
     * @return float 
     */
    public function getVer16()
    {
        return $this->ver16;
    }

    /**
     * Set ver10
     *
     * @param float $ver10
     * @return VentaRuta
     */
    public function setVer10($ver10)
    {
        $this->ver10 = $ver10;

        return $this;
    }

    /**
     * Get ver10
     *
     * @return float 
     */
    public function getVer10()
    {
        return $this->ver10;
    }

    /**
     * Set verExento
     *
     * @param float $verExento
     * @return VentaRuta
     */
    public function setVerExento($verExento)
    {
        $this->verExento = $verExento;

        return $this;
    }

    /**
     * Get verExento
     *
     * @return float 
     */
    public function getVerExento()
    {
        return $this->verExento;
    }

    /**
     * Set verEfectivo
     *
     * @param float $verEfectivo
     * @return VentaRuta
     */
    public function setVerEfectivo($verEfectivo)
    {
        $this->verEfectivo = $verEfectivo;

        return $this;
    }

    /**
     * Get verEfectivo
     *
     * @return float 
     */
    public function getVerEfectivo()
    {
        return $this->verEfectivo;
    }
}
