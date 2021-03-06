<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraspasoInventarioEntradaDetalle
 *
 * @ORM\Table(name="traspaso_inventario_entrada_detalle")
 * @ORM\Entity(repositoryClass="TraspasoInventarioEntradaDetalleRepository")
 */
class TraspasoInventarioEntradaDetalle {

    const TRASPASO_INVENTARIO_ENTRADA_ANULADO_NO = 'No';
    const TRASPASO_INVENTARIO_ENTRADA_ANULADO_SI = 'Si';

    /**
     * @var integer
     *
     * @ORM\Column(name="traspaso_detalle_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traspasoDetalleCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="traspaso_codigo", type="integer", nullable=false)
     */
    private $traspasoCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="prod_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $prodCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_costo_unit", type="integer", nullable=false)
     */
    private $prodCostoUnit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="traspaso_detalle_fecha", type="date", nullable=false)
     */
    private $traspasoDetalleFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="traspaso_detalle_hora", type="string", length=100, nullable=false)
     */
    private $traspasoDetalleHora;

    /**
     * Get traspasoDetalleCodigo
     *
     * @return integer 
     */
    public function getTraspasoDetalleCodigo() {
        return $this->traspasoDetalleCodigo;
    }

    /**
     * Set traspasoCodigo
     *
     * @param integer $traspasoCodigo
     * @return TraspasoInventarioEntradaDetalle
     */
    public function setTraspasoCodigo($traspasoCodigo) {
        $this->traspasoCodigo = $traspasoCodigo;

        return $this;
    }

    /**
     * Get traspasoCodigo
     *
     * @return integer 
     */
    public function getTraspasoCodigo() {
        return $this->traspasoCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return TraspasoInventarioEntradaDetalle
     */
    public function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;

        return $this;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProdCodigo() {
        return $this->prodCodigo;
    }

    /**
     * Set prodCantidad
     *
     * @param float $prodCantidad
     * @return TraspasoInventarioEntradaDetalle
     */
    public function setProdCantidad($prodCantidad) {
        $this->prodCantidad = $prodCantidad;

        return $this;
    }

    /**
     * Get prodCantidad
     *
     * @return float 
     */
    public function getProdCantidad() {
        return $this->prodCantidad;
    }

    /**
     * Set prodCostoUnit
     *
     * @param integer $prodCostoUnit
     * @return TraspasoInventarioEntradaDetalle
     */
    public function setProdCostoUnit($prodCostoUnit) {
        $this->prodCostoUnit = $prodCostoUnit;

        return $this;
    }

    /**
     * Get prodCostoUnit
     *
     * @return integer 
     */
    public function getProdCostoUnit() {
        return $this->prodCostoUnit;
    }

    /**
     * Set traspasoDetalleFecha
     *
     * @param \DateTime $traspasoDetalleFecha
     * @return TraspasoInventarioEntradaDetalle
     */
    public function setTraspasoDetalleFecha($traspasoDetalleFecha) {
        $this->traspasoDetalleFecha = $traspasoDetalleFecha;

        return $this;
    }

    /**
     * Get traspasoDetalleFecha
     *
     * @return \DateTime 
     */
    public function getTraspasoDetalleFecha() {
        return $this->traspasoDetalleFecha;
    }

    /**
     * Set traspasoDetalleHora
     *
     * @param string $traspasoDetalleHora
     * @return TraspasoInventarioEntradaDetalle
     */
    public function setTraspasoDetalleHora($traspasoDetalleHora) {
        $this->traspasoDetalleHora = $traspasoDetalleHora;

        return $this;
    }

    /**
     * Get traspasoDetalleHora
     *
     * @return string 
     */
    public function getTraspasoDetalleHora() {
        return $this->traspasoDetalleHora;
    }

}
