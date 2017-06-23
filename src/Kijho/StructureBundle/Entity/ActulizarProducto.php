<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActulizarProducto
 *
 * @ORM\Table(name="actulizar_producto")
 * @ORM\Entity
 */
class ActulizarProducto {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_update", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_producto", type="integer", nullable=true)
     */
    private $codProducto;

    /**
     * Get idUpdate
     *
     * @return integer 
     */
    public function getIdUpdate() {
        return $this->idUpdate;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ActulizarProducto
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set codProducto
     *
     * @param integer $codProducto
     * @return ActulizarProducto
     */
    public function setCodProducto($codProducto) {
        $this->codProducto = $codProducto;

        return $this;
    }

    /**
     * Get codProducto
     *
     * @return integer 
     */
    public function getCodProducto() {
        return $this->codProducto;
    }

}
