<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * TipoGasto
 *
 * @ORM\Table(name="tipo_gasto")
 * @ORM\Entity
 */
class TipoGasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tiga_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tigaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tiga_nombre", type="string", length=100, nullable=true)
     */
    private $tigaNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tiga_descripcion", type="text", length=65535, nullable=false)
     */
    private $tigaDescripcion;


    /**
     * Get tigaCodigo
     *
     * @return integer 
     */
    public function getTigaCodigo()
    {
        return $this->tigaCodigo;
    }

    /**
     * Set tigaNombre
     *
     * @param string $tigaNombre
     * @return TipoGasto
     */
    public function setTigaNombre($tigaNombre)
    {
        $this->tigaNombre = $tigaNombre;

        return $this;
    }

    /**
     * Get tigaNombre
     *
     * @return string 
     */
    public function getTigaNombre()
    {
        return $this->tigaNombre;
    }

    /**
     * Set tigaDescripcion
     *
     * @param string $tigaDescripcion
     * @return TipoGasto
     */
    public function setTigaDescripcion($tigaDescripcion)
    {
        $this->tigaDescripcion = $tigaDescripcion;

        return $this;
    }

    /**
     * Get tigaDescripcion
     *
     * @return string 
     */
    public function getTigaDescripcion()
    {
        return $this->tigaDescripcion;
    }
}
