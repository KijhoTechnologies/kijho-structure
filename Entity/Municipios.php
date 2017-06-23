<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

//namespace seitem\ORM\Entity;
/**
 * Description of Municipios
 *
 * @author jocampo
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="municipios")
 */
class Municipios {

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", name="mun_codigo")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=45, name="mun_code")
     */
    protected $code;

    /**
     * @var string
     * @ORM\Column(type="string", length=45, name="mun_codigo_unificado")
     */
    protected $codigoUnificado;

    /**
     * @var string
     * @ORM\Column(type="string", length=60, name="mun_nombre")
     */
    protected $nombre;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Departamentos")
     * @ORM\JoinColumn(name="mun_dep_codigo", referencedColumnName="dep_codigo") 
     */
    protected $depCodigo;

    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Municipios
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set codigoUnificado
     *
     * @param string $codigoUnificado
     * @return Municipios
     */
    public function setCodigoUnificado($codigoUnificado) {
        $this->codigoUnificado = $codigoUnificado;

        return $this;
    }

    /**
     * Get codigoUnificado
     *
     * @return string 
     */
    public function getCodigoUnificado() {
        return $this->codigoUnificado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Municipios
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set depCodigo
     *
     * @param string $depCodigo
     * @return Municipios
     */
    public function setDepCodigo(Departamentos $depCodigo) {
        $this->depCodigo = $depCodigo;

        return $this;
    }

    /**
     * Get depCodigo
     *
     * @return string 
     */
    public function getDepCodigo() {
        return $this->depCodigo;
    }

}
