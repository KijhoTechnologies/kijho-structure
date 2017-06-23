<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * Inventarios
 *
 * @ORM\Table(name="inventarios")
 * @ORM\Entity
 */
class Inventarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inv_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_nombre", type="string", length=50, nullable=true)
     */
    private $invNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_entradas", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $invEntradas;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_salidas", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $invSalidas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inv_fecha", type="date", nullable=true)
     */
    private $invFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_hora", type="string", length=100, nullable=true)
     */
    private $invHora;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_estado", type="string", nullable=false)
     */
    private $invEstado;


    /**
     * Get invCodigo
     *
     * @return integer 
     */
    public function getInvCodigo()
    {
        return $this->invCodigo;
    }

    /**
     * Set invNombre
     *
     * @param string $invNombre
     * @return Inventarios
     */
    public function setInvNombre($invNombre)
    {
        $this->invNombre = $invNombre;

        return $this;
    }

    /**
     * Get invNombre
     *
     * @return string 
     */
    public function getInvNombre()
    {
        return $this->invNombre;
    }

    /**
     * Set invEntradas
     *
     * @param string $invEntradas
     * @return Inventarios
     */
    public function setInvEntradas($invEntradas)
    {
        $this->invEntradas = $invEntradas;

        return $this;
    }

    /**
     * Get invEntradas
     *
     * @return string 
     */
    public function getInvEntradas()
    {
        return $this->invEntradas;
    }

    /**
     * Set invSalidas
     *
     * @param string $invSalidas
     * @return Inventarios
     */
    public function setInvSalidas($invSalidas)
    {
        $this->invSalidas = $invSalidas;

        return $this;
    }

    /**
     * Get invSalidas
     *
     * @return string 
     */
    public function getInvSalidas()
    {
        return $this->invSalidas;
    }

    /**
     * Set invFecha
     *
     * @param \DateTime $invFecha
     * @return Inventarios
     */
    public function setInvFecha($invFecha)
    {
        $this->invFecha = $invFecha;

        return $this;
    }

    /**
     * Get invFecha
     *
     * @return \DateTime 
     */
    public function getInvFecha()
    {
        return $this->invFecha;
    }

    /**
     * Set invHora
     *
     * @param string $invHora
     * @return Inventarios
     */
    public function setInvHora($invHora)
    {
        $this->invHora = $invHora;

        return $this;
    }

    /**
     * Get invHora
     *
     * @return string 
     */
    public function getInvHora()
    {
        return $this->invHora;
    }

    /**
     * Set invEstado
     *
     * @param string $invEstado
     * @return Inventarios
     */
    public function setInvEstado($invEstado)
    {
        $this->invEstado = $invEstado;

        return $this;
    }

    /**
     * Get invEstado
     *
     * @return string 
     */
    public function getInvEstado()
    {
        return $this->invEstado;
    }
}
