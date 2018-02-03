<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrecioDomicilio
 *
 * @ORM\Table(name="precio_domicilio")
 * @ORM\Entity
 */
class PrecioDomicilio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="predo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $predoId;

    /**
     * @var string
     *
     * @ORM\Column(name="predo_valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $predoValor;



    /**
     * Get predoId
     *
     * @return integer
     */
    public function getPredoId()
    {
        return $this->predoId;
    }

    /**
     * Set predoValor
     *
     * @param string $predoValor
     *
     * @return PrecioDomicilio
     */
    public function setPredoValor($predoValor)
    {
        $this->predoValor = $predoValor;

        return $this;
    }

    /**
     * Get predoValor
     *
     * @return string
     */
    public function getPredoValor()
    {
        return $this->predoValor;
    }
}
