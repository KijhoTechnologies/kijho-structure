<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * UserProperty
 *
 * @ORM\Table(name="user_property")
 * @ORM\Entity(repositoryClass="UserPropertyRepository")
 */
class UserProperty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uspr_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usprCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_code", type="integer", nullable=false)
     */
    private $modCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="use_code", type="integer", nullable=false)
     */
    private $useCode;

    /**
     * @var string
     *
     * @ORM\Column(name="uspr_property", type="string", nullable=true)
     */
    private $usprProperty;


    /**
     * Get usprCode
     *
     * @return integer 
     */
    public function getUsprCode()
    {
        return $this->usprCode;
    }

    /**
     * Set modCode
     *
     * @param integer $modCode
     * @return UserProperty
     */
    public function setModCode($modCode)
    {
        $this->modCode = $modCode;

        return $this;
    }

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
     * Set useCode
     *
     * @param integer $useCode
     * @return UserProperty
     */
    public function setUseCode($useCode)
    {
        $this->useCode = $useCode;

        return $this;
    }

    /**
     * Get useCode
     *
     * @return integer 
     */
    public function getUseCode()
    {
        return $this->useCode;
    }

    /**
     * Set usprProperty
     *
     * @param string $usprProperty
     * @return UserProperty
     */
    public function setUsprProperty($usprProperty)
    {
        $this->usprProperty = $usprProperty;

        return $this;
    }

    /**
     * Get usprProperty
     *
     * @return string 
     */
    public function getUsprProperty()
    {
        return $this->usprProperty;
    }
}
