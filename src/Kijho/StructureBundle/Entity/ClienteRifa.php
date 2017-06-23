<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * ClienteRifa
 *
 * @ORM\Table(name="cliente_rifa")
 * @ORM\Entity
 */
class ClienteRifa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clrif_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clrifCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="clrif_nombre", type="string", length=50, nullable=false)
     */
    private $clrifNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="clrif_cedula", type="string", length=30, nullable=false)
     */
    private $clrifCedula;

    /**
     * @var string
     *
     * @ORM\Column(name="clrif_telefono", type="string", length=50, nullable=false)
     */
    private $clrifTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="clrif_direccion", type="string", length=60, nullable=false)
     */
    private $clrifDireccion;


    /**
     * Get clrifCodigo
     *
     * @return integer 
     */
    public function getClrifCodigo()
    {
        return $this->clrifCodigo;
    }

    /**
     * Set clrifNombre
     *
     * @param string $clrifNombre
     * @return ClienteRifa
     */
    public function setClrifNombre($clrifNombre)
    {
        $this->clrifNombre = $clrifNombre;

        return $this;
    }

    /**
     * Get clrifNombre
     *
     * @return string 
     */
    public function getClrifNombre()
    {
        return $this->clrifNombre;
    }

    /**
     * Set clrifCedula
     *
     * @param string $clrifCedula
     * @return ClienteRifa
     */
    public function setClrifCedula($clrifCedula)
    {
        $this->clrifCedula = $clrifCedula;

        return $this;
    }

    /**
     * Get clrifCedula
     *
     * @return string 
     */
    public function getClrifCedula()
    {
        return $this->clrifCedula;
    }

    /**
     * Set clrifTelefono
     *
     * @param string $clrifTelefono
     * @return ClienteRifa
     */
    public function setClrifTelefono($clrifTelefono)
    {
        $this->clrifTelefono = $clrifTelefono;

        return $this;
    }

    /**
     * Get clrifTelefono
     *
     * @return string 
     */
    public function getClrifTelefono()
    {
        return $this->clrifTelefono;
    }

    /**
     * Set clrifDireccion
     *
     * @param string $clrifDireccion
     * @return ClienteRifa
     */
    public function setClrifDireccion($clrifDireccion)
    {
        $this->clrifDireccion = $clrifDireccion;

        return $this;
    }

    /**
     * Get clrifDireccion
     *
     * @return string 
     */
    public function getClrifDireccion()
    {
        return $this->clrifDireccion;
    }
}
