<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * FacturasPorCobrar
 *
 * @ORM\Table(name="facturas_por_cobrar")
 * @ORM\Entity
 */
class FacturasPorCobrar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fpc_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fpcCodigo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="FacturaVentas", inversedBy="facPorCobrar")
     * @ORM\JoinColumn(name="facv_codigo", referencedColumnName="facv_codigo", unique=true)
     */
    private $facvCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpc_abono", type="integer", nullable=true)
     */
    private $fpcAbono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fpc_fecha", type="date", nullable=true)
     */
    private $fpcFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="fpc_hora", type="string", length=100, nullable=true)
     */
    private $fpcHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpc_estado", type="integer", nullable=true)
     */
    private $fpcEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpc_resta", type="integer", nullable=true)
     */
    private $fpcResta;

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
     * @var integer
     *
     * @ORM\Column(name="facv_saldada", type="boolean", nullable=false, options={"default"=false})
     */
    private $paidInvoice;
    
    
    /**
     * Get fpcCodigo
     *
     * @return integer 
     */
    public function getFpcCodigo()
    {
        return $this->fpcCodigo;
    }


    public function __construct(Usuario $user, \DateTime $dateTime) {
        $this->fpcFecha = $dateTime;
        $this->fpcHora = $dateTime->format('H:i:s');
        $this->usuCodigo = $user;
        $this->paidInvoice = false;
    }
    

    /**
     * Set facvCodigo
     *
     * @param integer $facvCodigo
     * @return FacturasPorCobrar
     */
    public function setFacvCodigo(FacturaVentas $factura)
    {
        $this->facvCodigo = $factura;

        return $this;
    }

    /**
     * Get facvCodigo
     *
     * @return integer 
     */
    public function getFacvCodigo()
    {
        return $this->facvCodigo;
    }

    /**
     * Set fpcAbono
     *
     * @param integer $fpcAbono
     * @return FacturasPorCobrar
     */
    public function setFpcAbono($fpcAbono)
    {
        $this->fpcAbono = $fpcAbono;

        return $this;
    }

    /**
     * Get fpcAbono
     *
     * @return integer 
     */
    public function getFpcAbono()
    {
        return $this->fpcAbono;
    }

    /**
     * Set fpcFecha
     *
     * @param \DateTime $fpcFecha
     * @return FacturasPorCobrar
     */
    public function setFpcFecha($fpcFecha)
    {
        $this->fpcFecha = $fpcFecha;

        return $this;
    }

    /**
     * Get fpcFecha
     *
     * @return \DateTime 
     */
    public function getFpcFecha()
    {
        return $this->fpcFecha;
    }

    /**
     * Set fpcHora
     *
     * @param string $fpcHora
     * @return FacturasPorCobrar
     */
    public function setFpcHora($fpcHora)
    {
        $this->fpcHora = $fpcHora;

        return $this;
    }

    /**
     * Get fpcHora
     *
     * @return string 
     */
    public function getFpcHora()
    {
        return $this->fpcHora;
    }

    /**
     * Set fpcEstado
     *
     * @param integer $fpcEstado
     * @return FacturasPorCobrar
     */
    public function setFpcEstado($fpcEstado)
    {
        $this->fpcEstado = $fpcEstado;

        return $this;
    }

    /**
     * Get fpcEstado
     *
     * @return integer 
     */
    public function getFpcEstado()
    {
        return $this->fpcEstado;
    }

    /**
     * Set fpcResta
     *
     * @param integer $fpcResta
     * @return FacturasPorCobrar
     */
    public function setFpcResta($fpcResta)
    {
        $this->fpcResta = $fpcResta;

        return $this;
    }

    /**
     * Get fpcResta
     *
     * @return integer 
     */
    public function getFpcResta()
    {
        return $this->fpcResta;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return FacturasPorCobrar
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
     * @return FacturasPorCobrar
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

    public function setPaidInvoice($paidInvoice)
    {
        $this->paidInvoice = $paidInvoice;

        return $this;
    }

    public function getPaidInvoice()
    {
        return $this->paidInvoice;
}
}
