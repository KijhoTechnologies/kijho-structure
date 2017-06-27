<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity
 */
class Module
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mod_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_name", type="string", length=100, nullable=true)
     */
    private $modName;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_name_en", type="string", length=100, nullable=false)
     */
    private $modNameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_url", type="string", length=100, nullable=false)
     */
    private $modUrl;

    /**
     * @var float
     *
     * @ORM\Column(name="mod_order", type="float", precision=10, scale=0, nullable=false)
     */
    private $modOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_son", type="integer", nullable=false)
     */
    private $modSon;


    /**
     * Get modCode
     *
     * @return integer 
     */
    public function getModCode()
    {
        return $this->modCode;
    }

    /**
     * Set modName
     *
     * @param string $modName
     * @return Module
     */
    public function setModName($modName)
    {
        $this->modName = $modName;

        return $this;
    }

    /**
     * Get modName
     *
     * @return string 
     */
    public function getModName()
    {
        return $this->modName;
    }

    /**
     * Set modNameEn
     *
     * @param string $modNameEn
     * @return Module
     */
    public function setModNameEn($modNameEn)
    {
        $this->modNameEn = $modNameEn;

        return $this;
    }

    /**
     * Get modNameEn
     *
     * @return string 
     */
    public function getModNameEn()
    {
        return $this->modNameEn;
    }

    /**
     * Set modUrl
     *
     * @param string $modUrl
     * @return Module
     */
    public function setModUrl($modUrl)
    {
        $this->modUrl = $modUrl;

        return $this;
    }

    /**
     * Get modUrl
     *
     * @return string 
     */
    public function getModUrl()
    {
        return $this->modUrl;
    }

    /**
     * Set modOrder
     *
     * @param float $modOrder
     * @return Module
     */
    public function setModOrder($modOrder)
    {
        $this->modOrder = $modOrder;

        return $this;
    }

    /**
     * Get modOrder
     *
     * @return float 
     */
    public function getModOrder()
    {
        return $this->modOrder;
    }

    /**
     * Set modSon
     *
     * @param integer $modSon
     * @return Module
     */
    public function setModSon($modSon)
    {
        $this->modSon = $modSon;

        return $this;
    }

    /**
     * Get modSon
     *
     * @return integer 
     */
    public function getModSon()
    {
        return $this->modSon;
    }
}
