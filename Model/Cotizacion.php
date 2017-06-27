<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Cotizacion
 *
 * @ORM\Table(name="cotizacion", indexes={@ORM\Index(name="cotizacion_FKIndex1", columns={"usu_codigo"}), @ORM\Index(name="cotizacion_FKIndex2", columns={"cli_codigo"})})
 * @ORM\Entity
 */
class Cotizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cot_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cotCodigo;

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
     * @ORM\Column(name="cot_fecha", type="date", nullable=true)
     */
    private $cotFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_hora", type="string", length=100, nullable=true)
     */
    private $cotHora;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_total", type="decimal", precision=30, scale=3, nullable=true)
     */
    private $cotTotal;

     /**
     * @var string
     *
     * @ORM\Column(name="cot_iva16", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $cotIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_iva10", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $cotIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_iva_excluido", type="decimal", precision=20, scale=3, nullable=false)
     */
    private $cotIvaExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_iva_excento", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $cotIvaExcento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_estado", type="string", length=255, nullable=false)
     */
    private $cotEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_nombre_vendedor", type="string", length=50, nullable=false)
     */
    private $cotNombreVendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="cot_iva5", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $cotIva5;


    /**
     * Get cotCodigo
     *
     * @return integer 
     */
    public function getCotCodigo()
    {
        return $this->cotCodigo;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return Cotizacion
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
     * @return Cotizacion
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
     * Set cotFecha
     *
     * @param \DateTime $cotFecha
     * @return Cotizacion
     */
    public function setCotFecha($cotFecha)
    {
        $this->cotFecha = $cotFecha;

        return $this;
    }

    /**
     * Get cotFecha
     *
     * @return \DateTime 
     */
    public function getCotFecha()
    {
        return $this->cotFecha;
    }

    /**
     * Set cotHora
     *
     * @param string $cotHora
     * @return Cotizacion
     */
    public function setCotHora($cotHora)
    {
        $this->cotHora = $cotHora;

        return $this;
    }

    /**
     * Get cotHora
     *
     * @return string 
     */
    public function getCotHora()
    {
        return $this->cotHora;
    }

    /**
     * Set cotTotal
     *
     * @param string $cotTotal
     * @return Cotizacion
     */
    public function setCotTotal($cotTotal)
    {
        $this->cotTotal = $cotTotal;

        return $this;
    }

    /**
     * Get cotTotal
     *
     * @return string 
     */
    public function getCotTotal()
    {
        return $this->cotTotal;
    }

    /**
     * Set cotIva16
     *
     * @param string $cotIva16
     * @return Cotizacion
     */
    public function setCotIva16($cotIva16)
    {
        $this->cotIva16 = $cotIva16;

        return $this;
    }

    /**
     * Get cotIva16
     *
     * @return string 
     */
    public function getCotIva16()
    {
        return $this->cotIva16;
    }

    /**
     * Set cotIva10
     *
     * @param string $cotIva10
     * @return Cotizacion
     */
    public function setCotIva10($cotIva10)
    {
        $this->cotIva10 = $cotIva10;

        return $this;
    }

    /**
     * Get cotIva10
     *
     * @return string 
     */
    public function getCotIva10()
    {
        return $this->cotIva10;
    }

    /**
     * Set cotIvaExcluido
     *
     * @param string $cotIvaExcluido
     * @return Cotizacion
     */
    public function setCotIvaExcluido($cotIvaExcluido)
    {
        $this->cotIvaExcluido = $cotIvaExcluido;

        return $this;
    }

    /**
     * Get cotIvaExcluido
     *
     * @return string 
     */
    public function getCotIvaExcluido()
    {
        return $this->cotIvaExcluido;
    }

    /**
     * Set cotIvaExcento
     *
     * @param string $cotIvaExcento
     * @return Cotizacion
     */
    public function setCotIvaExcento($cotIvaExcento)
    {
        $this->cotIvaExcento = $cotIvaExcento;

        return $this;
    }

    /**
     * Get cotIvaExcento
     *
     * @return string 
     */
    public function getCotIvaExcento()
    {
        return $this->cotIvaExcento;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return Cotizacion
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
     * Set cotEstado
     *
     * @param string $cotEstado
     * @return Cotizacion
     */
    public function setCotEstado($cotEstado)
    {
        $this->cotEstado = $cotEstado;

        return $this;
    }

    /**
     * Get cotEstado
     *
     * @return string 
     */
    public function getCotEstado()
    {
        return $this->cotEstado;
    }

    /**
     * Set cotNombreVendedor
     *
     * @param string $cotNombreVendedor
     * @return Cotizacion
     */
    public function setCotNombreVendedor($cotNombreVendedor)
    {
        $this->cotNombreVendedor = $cotNombreVendedor;

        return $this;
    }

    /**
     * Get cotNombreVendedor
     *
     * @return string 
     */
    public function getCotNombreVendedor()
    {
        return $this->cotNombreVendedor;
    }

    /**
     * Set cotIva5
     *
     * @param string $cotIva5
     * @return Cotizacion
     */
    public function setCotIva5($cotIva5)
    {
        $this->cotIva5 = $cotIva5;

        return $this;
    }

    /**
     * Get cotIva5
     *
     * @return string 
     */
    public function getCotIva5()
    {
        return $this->cotIva5;
    }
}
