<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * ProductsReceived
 *
 * @ORM\Table(name="products_received")
 * @ORM\Entity
 */
class ProductsReceived
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prorec_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prorecCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prorec_date", type="datetime", nullable=true)
     */
    private $prorecDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="prorec_supplier", type="integer", nullable=true)
     */
    private $prorecSupplier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prorec_liquidado", type="boolean", nullable=true)
     */
    private $prorecLiquidado;


    /**
     * Get prorecCode
     *
     * @return integer 
     */
    public function getProrecCode()
    {
        return $this->prorecCode;
    }

    /**
     * Set prorecDate
     *
     * @param \DateTime $prorecDate
     * @return ProductsReceived
     */
    public function setProrecDate($prorecDate)
    {
        $this->prorecDate = $prorecDate;

        return $this;
    }

    /**
     * Get prorecDate
     *
     * @return \DateTime 
     */
    public function getProrecDate()
    {
        return $this->prorecDate;
    }

    /**
     * Set prorecSupplier
     *
     * @param integer $prorecSupplier
     * @return ProductsReceived
     */
    public function setProrecSupplier($prorecSupplier)
    {
        $this->prorecSupplier = $prorecSupplier;

        return $this;
    }

    /**
     * Get prorecSupplier
     *
     * @return integer 
     */
    public function getProrecSupplier()
    {
        return $this->prorecSupplier;
    }

    /**
     * Set prorecLiquidado
     *
     * @param boolean $prorecLiquidado
     * @return ProductsReceived
     */
    public function setProrecLiquidado($prorecLiquidado)
    {
        $this->prorecLiquidado = $prorecLiquidado;

        return $this;
    }

    /**
     * Get prorecLiquidado
     *
     * @return boolean 
     */
    public function getProrecLiquidado()
    {
        return $this->prorecLiquidado;
    }
}
