<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * PrecompraDetalle
 *
 * @ORM\Table(name="precompra_detalle")
 * @ORM\Entity
 */
class PrecompraDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="precdet_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $precdetCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prec_codigo", type="integer", nullable=false)
     */
    private $precCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="precdet_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $precdetCantidad;


    /**
     * Get precdetCodigo
     *
     * @return integer 
     */
    public function getPrecdetCodigo()
    {
        return $this->precdetCodigo;
    }

    /**
     * Set precCodigo
     *
     * @param integer $precCodigo
     * @return PrecompraDetalle
     */
    public function setPrecCodigo($precCodigo)
    {
        $this->precCodigo = $precCodigo;

        return $this;
    }

    /**
     * Get precCodigo
     *
     * @return integer 
     */
    public function getPrecCodigo()
    {
        return $this->precCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return PrecompraDetalle
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
     * Set precdetCantidad
     *
     * @param float $precdetCantidad
     * @return PrecompraDetalle
     */
    public function setPrecdetCantidad($precdetCantidad)
    {
        $this->precdetCantidad = $precdetCantidad;

        return $this;
    }

    /**
     * Get precdetCantidad
     *
     * @return float 
     */
    public function getPrecdetCantidad()
    {
        return $this->precdetCantidad;
    }
}
