<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of FacturasDevolucion
 * 
 * @author yeison osorio
 */

/**
 * @ORM\Entity(repositoryClass="FacturasDevolucionRepository")
 * @ORM\Table(name="facturas_devolucion")
 */
class FacturasDevolucion {

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", name="id_devolucion", length=11)
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="MotivosFacDevolucion")
     * @ORM\JoinColumn(name="id_motivo", referencedColumnName="id_motivos", nullable=false)
     */
    private $idMotivo;

    /**
     * @var integer
     *
     * 
     * @ORM\Column(type="integer", name="id_factura", length=11)
     */
    private $idFactura;

    /**
     * @var string
     * @ORM\Column(type="string", name="comentario", length=256)
     */
    protected $comentario;

    /**
     * @var integer
     * @ORM\Column(type="integer", name="motivo", length=1, options={"default" : 0})
     */
    protected $motivo = 0;

    /**
     * @var integer
     * @ORM\Column(type="integer", name="modulo", length=1, nullable=true)
     */
    protected $modulo;

    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set comentario
     *
     * @param  $comentario
     * @return comentario
     */
    public function setComentario($comentario) {

        $this->comentario = $comentario;
        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario() {
        return $this->comentario;
    }

    /**
     * Set IdMotivo
     *
     * @param  $idMotivo
     * @return Motivos
     */
    public function setIdMotivo(MotivosFacDevolucion $idMotivo) {

        $this->idMotivo = $idMotivo;
        return $this;
    }

    /**
     * Get IdMotivo
     *
     * @return integer 
     */
    public function getIdMotivo() {
        return $this->idMotivo;
    }

    /**
     * Set IdFactura
     *
     * @param  $idFactura
     * @return idFactura
     */
    public function setIdFactura($idFactura) {

        $this->idFactura = $idFactura;
        return $this;
    }

    /**
     * Get IdFactura
     *
     * @return integer 
     */
    public function getIdFactura() {
        return $this->idFactura;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    public function getModulo() {
        return $this->modulo;
    }

    public function setModulo($modulo) {
        $this->modulo = $modulo;
    }

}
