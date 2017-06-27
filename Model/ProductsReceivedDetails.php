<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * ProductsReceivedDetails
 *
 * @ORM\Table(name="products_received_details")
 * @ORM\Entity(repositoryClass="ProductsReceivedDetailsRepository")
 */
class ProductsReceivedDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $preDetCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_product", type="integer", nullable=true)
     */
    private $preDetProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_amount", type="integer", nullable=true)
     */
    private $preDetAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_value", type="integer", nullable=true)
     */
    private $preDetValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_cost", type="integer", nullable=true)
     */
    private $preDetCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_production_cost", type="integer", nullable=true)
     */
    private $preDetProductionCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_det_prec_id", type="integer", nullable=true)
     */
    private $preDetPrecId;


    /**
     * Get preDetCode
     *
     * @return integer 
     */
    public function getPreDetCode()
    {
        return $this->preDetCode;
    }

    /**
     * Set preDetProduct
     *
     * @param integer $preDetProduct
     * @return ProductsReceivedDetails
     */
    public function setPreDetProduct($preDetProduct)
    {
        $this->preDetProduct = $preDetProduct;

        return $this;
    }

    /**
     * Get preDetProduct
     *
     * @return integer 
     */
    public function getPreDetProduct()
    {
        return $this->preDetProduct;
    }

    /**
     * Set preDetAmount
     *
     * @param integer $preDetAmount
     * @return ProductsReceivedDetails
     */
    public function setPreDetAmount($preDetAmount)
    {
        $this->preDetAmount = $preDetAmount;

        return $this;
    }

    /**
     * Get preDetAmount
     *
     * @return integer 
     */
    public function getPreDetAmount()
    {
        return $this->preDetAmount;
    }

    /**
     * Set preDetValue
     *
     * @param integer $preDetValue
     * @return ProductsReceivedDetails
     */
    public function setPreDetValue($preDetValue)
    {
        $this->preDetValue = $preDetValue;

        return $this;
    }

    /**
     * Get preDetValue
     *
     * @return integer 
     */
    public function getPreDetValue()
    {
        return $this->preDetValue;
    }

    /**
     * Set preDetCost
     *
     * @param integer $preDetCost
     * @return ProductsReceivedDetails
     */
    public function setPreDetCost($preDetCost)
    {
        $this->preDetCost = $preDetCost;

        return $this;
    }

    /**
     * Get preDetCost
     *
     * @return integer 
     */
    public function getPreDetCost()
    {
        return $this->preDetCost;
    }

    /**
     * Set preDetProductionCost
     *
     * @param integer $preDetProductionCost
     * @return ProductsReceivedDetails
     */
    public function setPreDetProductionCost($preDetProductionCost)
    {
        $this->preDetProductionCost = $preDetProductionCost;

        return $this;
    }

    /**
     * Get preDetProductionCost
     *
     * @return integer 
     */
    public function getPreDetProductionCost()
    {
        return $this->preDetProductionCost;
    }

    /**
     * Set preDetPrecId
     *
     * @param integer $preDetPrecId
     * @return ProductsReceivedDetails
     */
    public function setPreDetPrecId($preDetPrecId)
    {
        $this->preDetPrecId = $preDetPrecId;

        return $this;
    }

    /**
     * Get preDetPrecId
     *
     * @return integer 
     */
    public function getPreDetPrecId()
    {
        return $this->preDetPrecId;
    }
}
