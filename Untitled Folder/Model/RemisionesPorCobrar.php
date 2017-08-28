<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * RemisionesPorCobrar
 *
 * @ORM\Table(name="remisiones_por_cobrar", indexes={@ORM\Index(name="remisiones_por_cobrar_FKIndex1", columns={"rem_codigo"})})
 * @ORM\Entity
 */
class RemisionesPorCobrar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rpc_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rpcCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rem_codigo", type="integer", nullable=false)
     */
    private $remCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rpc_abono", type="integer", nullable=true)
     */
    private $rpcAbono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rpc_fecha", type="date", nullable=true)
     */
    private $rpcFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rpc_hora", type="string", length=100, nullable=true)
     */
    private $rpcHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="rpc_estado", type="integer", nullable=true)
     */
    private $rpcEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="rpc_resta", type="integer", nullable=true)
     */
    private $rpcResta;

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
     * Get rpcCodigo
     *
     * @return integer 
     */
    public function getRpcCodigo()
    {
        return $this->rpcCodigo;
    }

    /**
     * Set remCodigo
     *
     * @param integer $remCodigo
     * @return RemisionesPorCobrar
     */
    public function setRemCodigo($remCodigo)
    {
        $this->remCodigo = $remCodigo;

        return $this;
    }

    /**
     * Get remCodigo
     *
     * @return integer 
     */
    public function getRemCodigo()
    {
        return $this->remCodigo;
    }

    /**
     * Set rpcAbono
     *
     * @param integer $rpcAbono
     * @return RemisionesPorCobrar
     */
    public function setRpcAbono($rpcAbono)
    {
        $this->rpcAbono = $rpcAbono;

        return $this;
    }

    /**
     * Get rpcAbono
     *
     * @return integer 
     */
    public function getRpcAbono()
    {
        return $this->rpcAbono;
    }

    /**
     * Set rpcFecha
     *
     * @param \DateTime $rpcFecha
     * @return RemisionesPorCobrar
     */
    public function setRpcFecha($rpcFecha)
    {
        $this->rpcFecha = $rpcFecha;

        return $this;
    }

    /**
     * Get rpcFecha
     *
     * @return \DateTime 
     */
    public function getRpcFecha()
    {
        return $this->rpcFecha;
    }

    /**
     * Set rpcHora
     *
     * @param string $rpcHora
     * @return RemisionesPorCobrar
     */
    public function setRpcHora($rpcHora)
    {
        $this->rpcHora = $rpcHora;

        return $this;
    }

    /**
     * Get rpcHora
     *
     * @return string 
     */
    public function getRpcHora()
    {
        return $this->rpcHora;
    }

    /**
     * Set rpcEstado
     *
     * @param integer $rpcEstado
     * @return RemisionesPorCobrar
     */
    public function setRpcEstado($rpcEstado)
    {
        $this->rpcEstado = $rpcEstado;

        return $this;
    }

    /**
     * Get rpcEstado
     *
     * @return integer 
     */
    public function getRpcEstado()
    {
        return $this->rpcEstado;
    }

    /**
     * Set rpcResta
     *
     * @param integer $rpcResta
     * @return RemisionesPorCobrar
     */
    public function setRpcResta($rpcResta)
    {
        $this->rpcResta = $rpcResta;

        return $this;
    }

    /**
     * Get rpcResta
     *
     * @return integer 
     */
    public function getRpcResta()
    {
        return $this->rpcResta;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return RemisionesPorCobrar
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
     * @return RemisionesPorCobrar
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
