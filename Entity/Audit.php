<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audit
 *
 * @ORM\Table(name="audit")
 * @ORM\Entity
 */
class Audit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aud_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $audCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aud_date", type="date", nullable=false)
     */
    private $audDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aud_hour", type="time", nullable=false)
     */
    private $audHour;

    /**
     * @var string
     *
     * @ORM\Column(name="aud_table", type="string", length=30, nullable=false)
     */
    private $audTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="aud_fac", type="integer", nullable=true)
     */
    private $audFac;

    /**
     * @var integer
     *
     * @ORM\Column(name="aud_fk", type="integer", nullable=false)
     */
    private $audFk;

    /**
     * @var string
     *
     * @ORM\Column(name="aud_action", type="string", nullable=false)
     */
    private $audAction;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=true)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="aud_prod_amount", type="integer", nullable=true)
     */
    private $audProdAmount;

    /**
     * @var float
     *
     * @ORM\Column(name="aud_price_buy", type="float", precision=10, scale=0, nullable=true)
     */
    private $audPriceBuy;

    /**
     * @var float
     *
     * @ORM\Column(name="aud_price_sell", type="float", precision=10, scale=0, nullable=true)
     */
    private $audPriceSell;

    /**
     * @var integer
     *
     * @ORM\Column(name="aud_user", type="integer", nullable=false)
     */
    private $audUser;


    /**
     * Get audCode
     *
     * @return integer 
     */
    public function getAudCode()
    {
        return $this->audCode;
    }

    /**
     * Set audDate
     *
     * @param \DateTime $audDate
     * @return Audit
     */
    public function setAudDate($audDate)
    {
        $this->audDate = $audDate;

        return $this;
    }

    /**
     * Get audDate
     *
     * @return \DateTime 
     */
    public function getAudDate()
    {
        return $this->audDate;
    }

    /**
     * Set audHour
     *
     * @param \DateTime $audHour
     * @return Audit
     */
    public function setAudHour($audHour)
    {
        $this->audHour = $audHour;

        return $this;
    }

    /**
     * Get audHour
     *
     * @return \DateTime 
     */
    public function getAudHour()
    {
        return $this->audHour;
    }

    /**
     * Set audTable
     *
     * @param string $audTable
     * @return Audit
     */
    public function setAudTable($audTable)
    {
        $this->audTable = $audTable;

        return $this;
    }

    /**
     * Get audTable
     *
     * @return string 
     */
    public function getAudTable()
    {
        return $this->audTable;
    }

    /**
     * Set audFac
     *
     * @param integer $audFac
     * @return Audit
     */
    public function setAudFac($audFac)
    {
        $this->audFac = $audFac;

        return $this;
    }

    /**
     * Get audFac
     *
     * @return integer 
     */
    public function getAudFac()
    {
        return $this->audFac;
    }

    /**
     * Set audFk
     *
     * @param integer $audFk
     * @return Audit
     */
    public function setAudFk($audFk)
    {
        $this->audFk = $audFk;

        return $this;
    }

    /**
     * Get audFk
     *
     * @return integer 
     */
    public function getAudFk()
    {
        return $this->audFk;
    }

    /**
     * Set audAction
     *
     * @param string $audAction
     * @return Audit
     */
    public function setAudAction($audAction)
    {
        $this->audAction = $audAction;

        return $this;
    }

    /**
     * Get audAction
     *
     * @return string 
     */
    public function getAudAction()
    {
        return $this->audAction;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return Audit
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
     * Set audProdAmount
     *
     * @param integer $audProdAmount
     * @return Audit
     */
    public function setAudProdAmount($audProdAmount)
    {
        $this->audProdAmount = $audProdAmount;

        return $this;
    }

    /**
     * Get audProdAmount
     *
     * @return integer 
     */
    public function getAudProdAmount()
    {
        return $this->audProdAmount;
    }

    /**
     * Set audPriceBuy
     *
     * @param float $audPriceBuy
     * @return Audit
     */
    public function setAudPriceBuy($audPriceBuy)
    {
        $this->audPriceBuy = $audPriceBuy;

        return $this;
    }

    /**
     * Get audPriceBuy
     *
     * @return float 
     */
    public function getAudPriceBuy()
    {
        return $this->audPriceBuy;
    }

    /**
     * Set audPriceSell
     *
     * @param float $audPriceSell
     * @return Audit
     */
    public function setAudPriceSell($audPriceSell)
    {
        $this->audPriceSell = $audPriceSell;

        return $this;
    }

    /**
     * Get audPriceSell
     *
     * @return float 
     */
    public function getAudPriceSell()
    {
        return $this->audPriceSell;
    }

    /**
     * Set audUser
     *
     * @param integer $audUser
     * @return Audit
     */
    public function setAudUser($audUser)
    {
        $this->audUser = $audUser;

        return $this;
    }

    /**
     * Get audUser
     *
     * @return integer 
     */
    public function getAudUser()
    {
        return $this->audUser;
    }
}
