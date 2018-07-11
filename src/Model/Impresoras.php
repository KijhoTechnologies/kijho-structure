<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impresoras
 *
 * @ORM\Table(name="impresoras")
 * @ORM\Entity
 */
class Impresoras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="im_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="im_nombre", type="string", length=150, nullable=false)
     */
    private $imNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="im_ip", type="string", length=50, nullable=false)
     */
    private $imIp;



    /**
     * Get imCodigo
     *
     * @return integer
     */
    public function getImCodigo()
    {
        return $this->imCodigo;
    }

    /**
     * Set imNombre
     *
     * @param string $imNombre
     *
     * @return Impresoras
     */
    public function setImNombre($imNombre)
    {
        $this->imNombre = $imNombre;

        return $this;
    }

    /**
     * Get imNombre
     *
     * @return string
     */
    public function getImNombre()
    {
        return $this->imNombre;
    }

    /**
     * Set imIp
     *
     * @param string $imIp
     *
     * @return Impresoras
     */
    public function setImIp($imIp)
    {
        $this->imIp = $imIp;

        return $this;
    }

    /**
     * Get imIp
     *
     * @return string
     */
    public function getImIp()
    {
        return $this->imIp;
    }
}
