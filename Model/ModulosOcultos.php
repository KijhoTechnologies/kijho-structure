<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModulosOcultos
 *
 * @ORM\Table(name="modulos_ocultos")
 * @ORM\Entity
 */
class ModulosOcultos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mo_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $moCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_nombre", type="string", length=50, nullable=false)
     */
    private $moNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="mo_ocultar", type="string", length=2, nullable=false)
     */
    private $moOcultar = 'NO';



    /**
     * Get moCodigo
     *
     * @return integer
     */
    public function getMoCodigo()
    {
        return $this->moCodigo;
    }

    /**
     * Set moNombre
     *
     * @param string $moNombre
     *
     * @return ModulosOcultos
     */
    public function setMoNombre($moNombre)
    {
        $this->moNombre = $moNombre;

        return $this;
    }

    /**
     * Get moNombre
     *
     * @return string
     */
    public function getMoNombre()
    {
        return $this->moNombre;
    }

    /**
     * Set moOcultar
     *
     * @param string $moOcultar
     *
     * @return ModulosOcultos
     */
    public function setMoOcultar($moOcultar)
    {
        $this->moOcultar = $moOcultar;

        return $this;
    }

    /**
     * Get moOcultar
     *
     * @return string
     */
    public function getMoOcultar()
    {
        return $this->moOcultar;
    }
}
