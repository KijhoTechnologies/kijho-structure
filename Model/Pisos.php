<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pisos
 *
 * @ORM\Table(name="pisos")
 * @ORM\Entity
 */
class Pisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pi_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $piCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pi_numero", type="integer", nullable=false)
     */
    private $piNumero = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="pi_nombre", type="string", length=50, nullable=false)
     */
    private $piNombre = 'Piso';



    /**
     * Get piCodigo
     *
     * @return integer
     */
    public function getPiCodigo()
    {
        return $this->piCodigo;
    }

    /**
     * Set piNumero
     *
     * @param integer $piNumero
     *
     * @return Pisos
     */
    public function setPiNumero($piNumero)
    {
        $this->piNumero = $piNumero;

        return $this;
    }

    /**
     * Get piNumero
     *
     * @return integer
     */
    public function getPiNumero()
    {
        return $this->piNumero;
    }

    /**
     * Set piNombre
     *
     * @param string $piNombre
     *
     * @return Pisos
     */
    public function setPiNombre($piNombre)
    {
        $this->piNombre = $piNombre;

        return $this;
    }

    /**
     * Get piNombre
     *
     * @return string
     */
    public function getPiNombre()
    {
        return $this->piNombre;
    }
}
