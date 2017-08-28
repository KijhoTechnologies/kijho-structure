<?php

namespace Seitem\WebServicesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprastmpDetalle
 *
 * @ORM\Table(name="comprastmp_detalle")
 * @ORM\Entity
 */
class ComprastmpDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cdtmp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cdtmpId;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="cdtmp_ctmpCodigo", type="integer", nullable=true)
     */
    private $cdtmpCtmpcodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cdtmp_prodCodigo", type="integer", nullable=true)
     */
    private $cdtmpProdcodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="cdtmp_prodCantidad", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cdtmpProdcantidad;

    /**
     * Set cdtmpCtmpcodigo
     *
     * @param integer $cdtmpCtmpcodigo
     * @return ComprastmpDetalle
     */
    public function setCdtmpCtmpcodigo($cdtmpCtmpcodigo)
    {
        $this->cdtmpCtmpcodigo = $cdtmpCtmpcodigo;

        return $this;
    }

    /**
     * Get cdtmpCtmpcodigo
     *
     * @return integer 
     */
    public function getCdtmpCtmpcodigo()
    {
        return $this->cdtmpCtmpcodigo;
    }

    /**
     * Set cdtmpProdcodigo
     *
     * @param integer $cdtmpProdcodigo
     * @return ComprastmpDetalle
     */
    public function setCdtmpProdcodigo($cdtmpProdcodigo)
    {
        $this->cdtmpProdcodigo = $cdtmpProdcodigo;

        return $this;
    }

    /**
     * Get cdtmpProdcodigo
     *
     * @return integer 
     */
    public function getCdtmpProdcodigo()
    {
        return $this->cdtmpProdcodigo;
    }

    /**
     * Set cdtmpProdcantidad
     *
     * @param string $cdtmpProdcantidad
     * @return ComprastmpDetalle
     */
    public function setCdtmpProdcantidad($cdtmpProdcantidad)
    {
        $this->cdtmpProdcantidad = $cdtmpProdcantidad;

        return $this;
    }

    /**
     * Get cdtmpProdcantidad
     *
     * @return string 
     */
    public function getCdtmpProdcantidad()
    {
        return $this->cdtmpProdcantidad;
    }

    /**
     * Get cdtmpId
     *
     * @return integer 
     */
    public function getCdtmpId()
    {
        return $this->cdtmpId;
    }
}
