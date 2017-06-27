<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * PedidoDetalle
 *
 * @ORM\Table(name="pedido_detalle")
 * @ORM\Entity
 */
class PedidoDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pedet_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pedetCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ped_codigo", type="integer", nullable=false)
     */
    private $pedCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_precio", type="integer", nullable=false)
     */
    private $prodPrecio;

    /**
     * @var float
     *
     * @ORM\Column(name="pedet_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $pedetCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="pedet_total", type="integer", nullable=false)
     */
    private $pedetTotal;


    /**
     * Get pedetCodigo
     *
     * @return integer 
     */
    public function getPedetCodigo()
    {
        return $this->pedetCodigo;
    }

    /**
     * Set pedCodigo
     *
     * @param integer $pedCodigo
     * @return PedidoDetalle
     */
    public function setPedCodigo($pedCodigo)
    {
        $this->pedCodigo = $pedCodigo;

        return $this;
    }

    /**
     * Get pedCodigo
     *
     * @return integer 
     */
    public function getPedCodigo()
    {
        return $this->pedCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return PedidoDetalle
     */
    public function setProdCodigo($prodCodigo)
    {
        $this->prodCodigo = $prodCodigo;

        return $this;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProdCodigo()
    {
        return $this->prodCodigo;
    }

    /**
     * Set prodPrecio
     *
     * @param integer $prodPrecio
     * @return PedidoDetalle
     */
    public function setProdPrecio($prodPrecio)
    {
        $this->prodPrecio = $prodPrecio;

        return $this;
    }

    /**
     * Get prodPrecio
     *
     * @return integer 
     */
    public function getProdPrecio()
    {
        return $this->prodPrecio;
    }

    /**
     * Set pedetCantidad
     *
     * @param float $pedetCantidad
     * @return PedidoDetalle
     */
    public function setPedetCantidad($pedetCantidad)
    {
        $this->pedetCantidad = $pedetCantidad;

        return $this;
    }

    /**
     * Get pedetCantidad
     *
     * @return float 
     */
    public function getPedetCantidad()
    {
        return $this->pedetCantidad;
    }

    /**
     * Set pedetTotal
     *
     * @param integer $pedetTotal
     * @return PedidoDetalle
     */
    public function setPedetTotal($pedetTotal)
    {
        $this->pedetTotal = $pedetTotal;

        return $this;
    }

    /**
     * Get pedetTotal
     *
     * @return integer 
     */
    public function getPedetTotal()
    {
        return $this->pedetTotal;
    }
}
