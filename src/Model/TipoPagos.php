<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * TipoPagos
 *
 * @ORM\Table(name="tipo_pagos")
 * @ORM\Entity
 */
class TipoPagos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipa_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipa_nombre", type="string", length=50, nullable=true)
     */
    private $tipaNombre;


    /**
     * Get tipaCodigo
     *
     * @return integer 
     */
    public function getTipaCodigo()
    {
        return $this->tipaCodigo;
    }

    /**
     * Set tipaNombre
     *
     * @param string $tipaNombre
     * @return TipoPagos
     */
    public function setTipaNombre($tipaNombre)
    {
        $this->tipaNombre = $tipaNombre;

        return $this;
    }

    /**
     * Get tipaNombre
     *
     * @return string 
     */
    public function getTipaNombre()
    {
        return $this->tipaNombre;
    }
}
