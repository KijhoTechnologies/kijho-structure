<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesapedidoDetalle
 *
 * @ORM\Table(name="mesapedido_detalle")
 * @ORM\Entity
 */
class MesapedidoDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mpd_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mpdCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="mpd_pedidoCodigo", type="integer", nullable=true)
     */
    private $mpdPedidocodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_cantidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $mpdCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="mpd_prodCodigo", type="integer", nullable=true)
     */
    private $mpdProdcodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_costoUnidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $mpdCostounidad = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_valorUnidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $mpdValorunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_subtotalUnidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $mpdSubtotalunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_descuentoUnidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $mpdDescuentounidad = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="mpd_puesto", type="integer", nullable=true)
     */
    private $mpdPuesto = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_observacion", type="text", length=65535, nullable=true)
     */
    private $mpdObservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_estado", type="string", length=15, nullable=true)
     */
    private $mpdEstado = 'PENDIENTE';

    /**
     * @var string
     *
     * @ORM\Column(name="mpd_tipoAtencion", type="string", length=15, nullable=false)
     */
    private $mpdTipoatencion = 'DIRECTA';

    /**
     * @var integer
     *
     * @ORM\Column(name="mpd_pagaCantidad", type="integer", nullable=false)
     */
    private $mpdPagacantidad = '0';



    /**
     * Get mpdCodigo
     *
     * @return integer
     */
    public function getMpdCodigo()
    {
        return $this->mpdCodigo;
    }

    /**
     * Set mpdPedidocodigo
     *
     * @param integer $mpdPedidocodigo
     *
     * @return MesapedidoDetalle
     */
    public function setMpdPedidocodigo($mpdPedidocodigo)
    {
        $this->mpdPedidocodigo = $mpdPedidocodigo;

        return $this;
    }

    /**
     * Get mpdPedidocodigo
     *
     * @return integer
     */
    public function getMpdPedidocodigo()
    {
        return $this->mpdPedidocodigo;
    }

    /**
     * Set mpdCantidad
     *
     * @param string $mpdCantidad
     *
     * @return MesapedidoDetalle
     */
    public function setMpdCantidad($mpdCantidad)
    {
        $this->mpdCantidad = $mpdCantidad;

        return $this;
    }

    /**
     * Get mpdCantidad
     *
     * @return string
     */
    public function getMpdCantidad()
    {
        return $this->mpdCantidad;
    }

    /**
     * Set mpdProdcodigo
     *
     * @param integer $mpdProdcodigo
     *
     * @return MesapedidoDetalle
     */
    public function setMpdProdcodigo($mpdProdcodigo)
    {
        $this->mpdProdcodigo = $mpdProdcodigo;

        return $this;
    }

    /**
     * Get mpdProdcodigo
     *
     * @return integer
     */
    public function getMpdProdcodigo()
    {
        return $this->mpdProdcodigo;
    }

    /**
     * Set mpdCostounidad
     *
     * @param string $mpdCostounidad
     *
     * @return MesapedidoDetalle
     */
    public function setMpdCostounidad($mpdCostounidad)
    {
        $this->mpdCostounidad = $mpdCostounidad;

        return $this;
    }

    /**
     * Get mpdCostounidad
     *
     * @return string
     */
    public function getMpdCostounidad()
    {
        return $this->mpdCostounidad;
    }

    /**
     * Set mpdValorunidad
     *
     * @param string $mpdValorunidad
     *
     * @return MesapedidoDetalle
     */
    public function setMpdValorunidad($mpdValorunidad)
    {
        $this->mpdValorunidad = $mpdValorunidad;

        return $this;
    }

    /**
     * Get mpdValorunidad
     *
     * @return string
     */
    public function getMpdValorunidad()
    {
        return $this->mpdValorunidad;
    }

    /**
     * Set mpdSubtotalunidad
     *
     * @param string $mpdSubtotalunidad
     *
     * @return MesapedidoDetalle
     */
    public function setMpdSubtotalunidad($mpdSubtotalunidad)
    {
        $this->mpdSubtotalunidad = $mpdSubtotalunidad;

        return $this;
    }

    /**
     * Get mpdSubtotalunidad
     *
     * @return string
     */
    public function getMpdSubtotalunidad()
    {
        return $this->mpdSubtotalunidad;
    }

    /**
     * Set mpdDescuentounidad
     *
     * @param string $mpdDescuentounidad
     *
     * @return MesapedidoDetalle
     */
    public function setMpdDescuentounidad($mpdDescuentounidad)
    {
        $this->mpdDescuentounidad = $mpdDescuentounidad;

        return $this;
    }

    /**
     * Get mpdDescuentounidad
     *
     * @return string
     */
    public function getMpdDescuentounidad()
    {
        return $this->mpdDescuentounidad;
    }

    /**
     * Set mpdPuesto
     *
     * @param integer $mpdPuesto
     *
     * @return MesapedidoDetalle
     */
    public function setMpdPuesto($mpdPuesto)
    {
        $this->mpdPuesto = $mpdPuesto;

        return $this;
    }

    /**
     * Get mpdPuesto
     *
     * @return integer
     */
    public function getMpdPuesto()
    {
        return $this->mpdPuesto;
    }

    /**
     * Set mpdObservacion
     *
     * @param string $mpdObservacion
     *
     * @return MesapedidoDetalle
     */
    public function setMpdObservacion($mpdObservacion)
    {
        $this->mpdObservacion = $mpdObservacion;

        return $this;
    }

    /**
     * Get mpdObservacion
     *
     * @return string
     */
    public function getMpdObservacion()
    {
        return $this->mpdObservacion;
    }

    /**
     * Set mpdEstado
     *
     * @param string $mpdEstado
     *
     * @return MesapedidoDetalle
     */
    public function setMpdEstado($mpdEstado)
    {
        $this->mpdEstado = $mpdEstado;

        return $this;
    }

    /**
     * Get mpdEstado
     *
     * @return string
     */
    public function getMpdEstado()
    {
        return $this->mpdEstado;
    }

    /**
     * Set mpdTipoatencion
     *
     * @param string $mpdTipoatencion
     *
     * @return MesapedidoDetalle
     */
    public function setMpdTipoatencion($mpdTipoatencion)
    {
        $this->mpdTipoatencion = $mpdTipoatencion;

        return $this;
    }

    /**
     * Get mpdTipoatencion
     *
     * @return string
     */
    public function getMpdTipoatencion()
    {
        return $this->mpdTipoatencion;
    }

    /**
     * Set mpdPagacantidad
     *
     * @param integer $mpdPagacantidad
     *
     * @return MesapedidoDetalle
     */
    public function setMpdPagacantidad($mpdPagacantidad)
    {
        $this->mpdPagacantidad = $mpdPagacantidad;

        return $this;
    }

    /**
     * Get mpdPagacantidad
     *
     * @return integer
     */
    public function getMpdPagacantidad()
    {
        return $this->mpdPagacantidad;
    }
}
