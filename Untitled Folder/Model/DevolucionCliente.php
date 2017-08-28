<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * DevolucionCliente
 *
 * @ORM\Table(name="devolucion_cliente")
 * @ORM\Entity(repositoryClass="DevolucionClienteRepository")
 */
class DevolucionCliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="decl_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $declCodigo;

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
     * @ORM\Column(name="decl_fecha", type="date", nullable=false)
     */
    private $declFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_hora", type="string", length=100, nullable=false)
     */
    private $declHora;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_total", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $declTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_iva16", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $declIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_iva10", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $declIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_iva5", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $declIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_exento", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $declExento;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_excluido", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $declExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="decl_razon", type="text", length=65535, nullable=true)
     */
    private $declRazon;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;


    /**
     * Get declCodigo
     *
     * @return integer 
     */
    public function getDeclCodigo()
    {
        return $this->declCodigo;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return DevolucionCliente
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
     * @return DevolucionCliente
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
     * Set declFecha
     *
     * @param \DateTime $declFecha
     * @return DevolucionCliente
     */
    public function setDeclFecha($declFecha)
    {
        $this->declFecha = $declFecha;

        return $this;
    }

    /**
     * Get declFecha
     *
     * @return \DateTime 
     */
    public function getDeclFecha()
    {
        return $this->declFecha;
    }

    /**
     * Set declHora
     *
     * @param string $declHora
     * @return DevolucionCliente
     */
    public function setDeclHora($declHora)
    {
        $this->declHora = $declHora;

        return $this;
    }

    /**
     * Get declHora
     *
     * @return string 
     */
    public function getDeclHora()
    {
        return $this->declHora;
    }

    /**
     * Set declTotal
     *
     * @param string $declTotal
     * @return DevolucionCliente
     */
    public function setDeclTotal($declTotal)
    {
        $this->declTotal = $declTotal;

        return $this;
    }

    /**
     * Get declTotal
     *
     * @return string 
     */
    public function getDeclTotal()
    {
        return $this->declTotal;
    }

    /**
     * Set declIva16
     *
     * @param string $declIva16
     * @return DevolucionCliente
     */
    public function setDeclIva16($declIva16)
    {
        $this->declIva16 = $declIva16;

        return $this;
    }

    /**
     * Get declIva16
     *
     * @return string 
     */
    public function getDeclIva16()
    {
        return $this->declIva16;
    }

    /**
     * Set declIva10
     *
     * @param string $declIva10
     * @return DevolucionCliente
     */
    public function setDeclIva10($declIva10)
    {
        $this->declIva10 = $declIva10;

        return $this;
    }

    /**
     * Get declIva10
     *
     * @return string 
     */
    public function getDeclIva10()
    {
        return $this->declIva10;
    }

    /**
     * Set declIva5
     *
     * @param string $declIva5
     * @return DevolucionCliente
     */
    public function setDeclIva5($declIva5)
    {
        $this->declIva5 = $declIva5;

        return $this;
    }

    /**
     * Get declIva5
     *
     * @return string 
     */
    public function getDeclIva5()
    {
        return $this->declIva5;
    }

    /**
     * Set declExento
     *
     * @param string $declExento
     * @return DevolucionCliente
     */
    public function setDeclExento($declExento)
    {
        $this->declExento = $declExento;

        return $this;
    }

    /**
     * Get declExento
     *
     * @return string 
     */
    public function getDeclExento()
    {
        return $this->declExento;
    }

    /**
     * Set declExcluido
     *
     * @param string $declExcluido
     * @return DevolucionCliente
     */
    public function setDeclExcluido($declExcluido)
    {
        $this->declExcluido = $declExcluido;

        return $this;
    }

    /**
     * Get declExcluido
     *
     * @return string 
     */
    public function getDeclExcluido()
    {
        return $this->declExcluido;
    }

    /**
     * Set declRazon
     *
     * @param string $declRazon
     * @return DevolucionCliente
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

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return DevolucionCliente
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
