<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Inventario
 *
 * @ORM\Table(name="inventario")
 * @ORM\Entity
 */
class Inventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inv_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="inv_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $invCantidad;


    /**
     * Get invCodigo
     *
     * @return integer 
     */
    public function getInvCodigo()
    {
        return $this->invCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return Inventario
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
     * Set invCantidad
     *
     * @param float $invCantidad
     * @return Inventario
     */
    public function setInvCantidad($invCantidad)
    {
        $this->invCantidad = $invCantidad;

        return $this;
    }

    /**
     * Get invCantidad
     *
     * @return float 
     */
    public function getInvCantidad()
    {
        return $this->invCantidad;
    }
}
