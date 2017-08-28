<?php

namespace Seitem\WebServicesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprastmp
 *
 * @ORM\Table(name="comprastmp")
 * @ORM\Entity
 */
class Comprastmp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctmp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctmpId;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ctmp_fecha", type="datetime", nullable=true)
     */
    private $ctmpFecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctmp_usuCodigo", type="integer", nullable=true)
     */
    private $ctmpUsucodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="ctmp_estado", type="string", length=255, nullable=true)
     */
    private $ctmpEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctmp_facturaCompra", type="integer", nullable=true)
     */
    private $ctmpFacturacompra; 

    /**
     * Set ctmpFecha
     *
     * @param \DateTime $ctmpFecha
     * @return Comprastmp
     */
    public function setCtmpFecha($ctmpFecha)
    {
        $this->ctmpFecha = $ctmpFecha;

        return $this;
    }

    /**
     * Get ctmpFecha
     *
     * @return \DateTime 
     */
    public function getCtmpFecha()
    {
        return $this->ctmpFecha;
    }

    /**
     * Set ctmpUsucodigo
     *
     * @param integer $ctmpUsucodigo
     * @return Comprastmp
     */
    public function setCtmpUsucodigo($ctmpUsucodigo)
    {
        $this->ctmpUsucodigo = $ctmpUsucodigo;

        return $this;
    }

    /**
     * Get ctmpUsucodigo
     *
     * @return integer 
     */
    public function getCtmpUsucodigo()
    {
        return $this->ctmpUsucodigo;
    }

    /**
     * Set ctmpEstado
     *
     * @param string $ctmpEstado
     * @return Comprastmp
     */
    public function setCtmpEstado($ctmpEstado)
    {
        $this->ctmpEstado = $ctmpEstado;

        return $this;
    }

    /**
     * Get ctmpEstado
     *
     * @return string 
     */
    public function getCtmpEstado()
    {
        return $this->ctmpEstado;
    }

    /**
     * Set ctmpFacturacompra
     *
     * @param integer $ctmpFacturacompra
     * @return Comprastmp
     */
    public function setCtmpFacturacompra($ctmpFacturacompra)
    {
        $this->ctmpFacturacompra = $ctmpFacturacompra;

        return $this;
    }

    /**
     * Get ctmpFacturacompra
     *
     * @return integer 
     */
    public function getCtmpFacturacompra()
    {
        return $this->ctmpFacturacompra;
    }

    /**
     * Get ctmpId
     *
     * @return integer 
     */
    public function getCtmpId()
    {
        return $this->ctmpId;
    }
}
