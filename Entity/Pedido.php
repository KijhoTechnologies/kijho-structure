<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ped_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pedCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ped_fecha", type="date", nullable=false)
     */
    private $pedFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="ped_total", type="integer", nullable=false)
     */
    private $pedTotal;


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
     * Set pedFecha
     *
     * @param \DateTime $pedFecha
     * @return Pedido
     */
    public function setPedFecha($pedFecha)
    {
        $this->pedFecha = $pedFecha;

        return $this;
    }

    /**
     * Get pedFecha
     *
     * @return \DateTime 
     */
    public function getPedFecha()
    {
        return $this->pedFecha;
    }

    /**
     * Set pedTotal
     *
     * @param integer $pedTotal
     * @return Pedido
     */
    public function setPedTotal($pedTotal)
    {
        $this->pedTotal = $pedTotal;

        return $this;
    }

    /**
     * Get pedTotal
     *
     * @return integer 
     */
    public function getPedTotal()
    {
        return $this->pedTotal;
    }
}
