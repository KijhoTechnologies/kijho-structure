<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Devolucion
 *
 * @ORM\Table(name="devolucion")
 * @ORM\Entity
 */
class Devolucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dev_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $devCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prov_codigo", type="integer", nullable=false)
     */
    private $provCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="dev_valor", type="integer", nullable=true)
     */
    private $devValor;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_iva16", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $devIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_iva10", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $devIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_iva5", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $devIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_exento", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $devExento;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_excluido", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $devExcluido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dev_fecha", type="date", nullable=true)
     */
    private $devFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_hora", type="string", length=100, nullable=true)
     */
    private $devHora;

    /**
     * @var string
     *
     * @ORM\Column(name="dev_estado", type="string", nullable=false, options={"default"="Activo"})
     */
    private $devEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dev_fecha_utilizacion", type="date", nullable=true)
     */
    private $devFechaUtilizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_razon", type="text", length=65535, nullable=false)
     */
    private $declRazon;


    /**
     * Get devCodigo
     *
     * @return integer 
     */
    public function getDevCodigo()
    {
        return $this->devCodigo;
    }

    /**
     * Set provCodigo
     *
     * @param integer $provCodigo
     * @return Devolucion
     */
    public function setProvCodigo($provCodigo)
    {
        $this->provCodigo = $provCodigo;

        return $this;
    }

    /**
     * Get provCodigo
     *
     * @return integer 
     */
    public function getProvCodigo()
    {
        return $this->provCodigo;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return Devolucion
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
     * Set devValor
     *
     * @param integer $devValor
     * @return Devolucion
     */
    public function setDevValor($devValor)
    {
        $this->devValor = $devValor;

        return $this;
    }

    /**
     * Get devValor
     *
     * @return integer 
     */
    public function getDevValor()
    {
        return $this->devValor;
    }

    /**
     * Set devIva16
     *
     * @param string $devIva16
     * @return Devolucion
     */
    public function setDevIva16($devIva16)
    {
        $this->devIva16 = $devIva16;

        return $this;
    }

    /**
     * Get devIva16
     *
     * @return string 
     */
    public function getDevIva16()
    {
        return $this->devIva16;
    }

    /**
     * Set devIva10
     *
     * @param string $devIva10
     * @return Devolucion
     */
    public function setDevIva10($devIva10)
    {
        $this->devIva10 = $devIva10;

        return $this;
    }

    /**
     * Get devIva10
     *
     * @return string 
     */
    public function getDevIva10()
    {
        return $this->devIva10;
    }

    /**
     * Set devIva5
     *
     * @param string $devIva5
     * @return Devolucion
     */
    public function setDevIva5($devIva5)
    {
        $this->devIva5 = $devIva5;

        return $this;
    }

    /**
     * Get devIva5
     *
     * @return string 
     */
    public function getDevIva5()
    {
        return $this->devIva5;
    }

    /**
     * Set devExento
     *
     * @param string $devExento
     * @return Devolucion
     */
    public function setDevExento($devExento)
    {
        $this->devExento = $devExento;

        return $this;
    }

    /**
     * Get devExento
     *
     * @return string 
     */
    public function getDevExento()
    {
        return $this->devExento;
    }

    /**
     * Set devExcluido
     *
     * @param string $devExcluido
     * @return Devolucion
     */
    public function setDevExcluido($devExcluido)
    {
        $this->devExcluido = $devExcluido;

        return $this;
    }

    /**
     * Get devExcluido
     *
     * @return string 
     */
    public function getDevExcluido()
    {
        return $this->devExcluido;
    }

    /**
     * Set devFecha
     *
     * @param \DateTime $devFecha
     * @return Devolucion
     */
    public function setDevFecha($devFecha)
    {
        $this->devFecha = $devFecha;

        return $this;
    }

    /**
     * Get devFecha
     *
     * @return \DateTime 
     */
    public function getDevFecha()
    {
        return $this->devFecha;
    }

    /**
     * Set devHora
     *
     * @param string $devHora
     * @return Devolucion
     */
    public function setDevHora($devHora)
    {
        $this->devHora = $devHora;

        return $this;
    }

    /**
     * Get devHora
     *
     * @return string 
     */
    public function getDevHora()
    {
        return $this->devHora;
    }

    /**
     * Set devEstado
     *
     * @param string $devEstado
     * @return Devolucion
     */
    public function setDevEstado($devEstado)
    {
        $this->devEstado = $devEstado;

        return $this;
    }

    /**
     * Get devEstado
     *
     * @return string 
     */
    public function getDevEstado()
    {
        return $this->devEstado;
    }

    /**
     * Set devFechaUtilizacion
     *
     * @param \DateTime $devFechaUtilizacion
     * @return Devolucion
     */
    public function setDevFechaUtilizacion($devFechaUtilizacion)
    {
        $this->devFechaUtilizacion = $devFechaUtilizacion;

        return $this;
    }

    /**
     * Get devFechaUtilizacion
     *
     * @return \DateTime 
     */
    public function getDevFechaUtilizacion()
    {
        return $this->devFechaUtilizacion;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return Devolucion
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
     * Set declRazon
     *
     * @param string $declRazon
     * @return Devolucion
     */
    public function setDeclRazon($declRazon)
    {
        $this->declRazon = $declRazon;

        return $this;
    }

    /**
     * Get declRazon
     *
     * @return string 
     */
    public function getDeclRazon()
    {
        return $this->declRazon;
    }
}
