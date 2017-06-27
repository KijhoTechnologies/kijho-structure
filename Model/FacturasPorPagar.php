<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * FacturasPorPagar
 *
 * @ORM\Table(name="facturas_por_pagar", indexes={@ORM\Index(name="facturas_por_pagar_FKIndex1", columns={"facp_codigo"})})
 * @ORM\Entity
 */
class FacturasPorPagar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fpp_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fppCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_codigo", type="integer", nullable=false)
     */
    private $facpCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpp_abono", type="integer", nullable=true)
     */
    private $fppAbono;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpp_resta", type="integer", nullable=true)
     */
    private $fppResta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fpp_fecha", type="date", nullable=true)
     */
    private $fppFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="fpp_hora", type="string", length=100, nullable=true)
     */
    private $fppHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpp_estado", type="integer", nullable=true)
     */
    private $fppEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;


    /**
     * Get fppCodigo
     *
     * @return integer 
     */
    public function getFppCodigo()
    {
        return $this->fppCodigo;
    }

    /**
     * Set facpCodigo
     *
     * @param integer $facpCodigo
     * @return FacturasPorPagar
     */
    public function setFacpCodigo($facpCodigo)
    {
        $this->facpCodigo = $facpCodigo;

        return $this;
    }

    /**
     * Get facpCodigo
     *
     * @return integer 
     */
    public function getFacpCodigo()
    {
        return $this->facpCodigo;
    }

    /**
     * Set fppAbono
     *
     * @param integer $fppAbono
     * @return FacturasPorPagar
     */
    public function setFppAbono($fppAbono)
    {
        $this->fppAbono = $fppAbono;

        return $this;
    }

    /**
     * Get fppAbono
     *
     * @return integer 
     */
    public function getFppAbono()
    {
        return $this->fppAbono;
    }

    /**
     * Set fppResta
     *
     * @param integer $fppResta
     * @return FacturasPorPagar
     */
    public function setFppResta($fppResta)
    {
        $this->fppResta = $fppResta;

        return $this;
    }

    /**
     * Get fppResta
     *
     * @return integer 
     */
    public function getFppResta()
    {
        return $this->fppResta;
    }

    /**
     * Set fppFecha
     *
     * @param \DateTime $fppFecha
     * @return FacturasPorPagar
     */
    public function setFppFecha($fppFecha)
    {
        $this->fppFecha = $fppFecha;

        return $this;
    }

    /**
     * Get fppFecha
     *
     * @return \DateTime 
     */
    public function getFppFecha()
    {
        return $this->fppFecha;
    }

    /**
     * Set fppHora
     *
     * @param string $fppHora
     * @return FacturasPorPagar
     */
    public function setFppHora($fppHora)
    {
        $this->fppHora = $fppHora;

        return $this;
    }

    /**
     * Get fppHora
     *
     * @return string 
     */
    public function getFppHora()
    {
        return $this->fppHora;
    }

    /**
     * Set fppEstado
     *
     * @param integer $fppEstado
     * @return FacturasPorPagar
     */
    public function setFppEstado($fppEstado)
    {
        $this->fppEstado = $fppEstado;

        return $this;
    }

    /**
     * Get fppEstado
     *
     * @return integer 
     */
    public function getFppEstado()
    {
        return $this->fppEstado;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return FacturasPorPagar
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
     * Set codCaja
     *
     * @param integer $codCaja
     * @return FacturasPorPagar
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
