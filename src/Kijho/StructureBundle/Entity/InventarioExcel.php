<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * InventarioExcel
 *
 * @ORM\Table(name="inventario_excel")
 * @ORM\Entity
 */
class InventarioExcel
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
     * @ORM\Column(name="inv_nombre", type="integer", nullable=true)
     */
    private $invNombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inv_fecha", type="date", nullable=true)
     */
    private $invFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_hora", type="string", length=100, nullable=true)
     */
    private $invHora;


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
     * Set invNombre
     *
     * @param integer $invNombre
     * @return InventarioExcel
     */
    public function setInvNombre($invNombre)
    {
        $this->invNombre = $invNombre;

        return $this;
    }

    /**
     * Get invNombre
     *
     * @return integer 
     */
    public function getInvNombre()
    {
        return $this->invNombre;
    }

    /**
     * Set invFecha
     *
     * @param \DateTime $invFecha
     * @return InventarioExcel
     */
    public function setInvFecha($invFecha)
    {
        $this->invFecha = $invFecha;

        return $this;
    }

    /**
     * Get invFecha
     *
     * @return \DateTime 
     */
    public function getInvFecha()
    {
        return $this->invFecha;
    }

    /**
     * Set invHora
     *
     * @param string $invHora
     * @return InventarioExcel
     */
    public function setInvHora($invHora)
    {
        $this->invHora = $invHora;

        return $this;
    }

    /**
     * Get invHora
     *
     * @return string 
     */
    public function getInvHora()
    {
        return $this->invHora;
    }
}
