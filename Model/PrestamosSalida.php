<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrestamosSalida
 *
 * @ORM\Table(name="prestamos_salida", indexes={@ORM\Index(name="prestamos_salida_FKIndex1", columns={"prod_codigo"})})
 * @ORM\Entity
 */
class PrestamosSalida {

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $presCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_tipo", type="integer", nullable=true)
     */
    private $presTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_estado", type="integer", nullable=true)
     */
    private $presEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_persona", type="string", length=100, nullable=true)
     */
    private $presPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_telefono", type="string", length=100, nullable=true)
     */
    private $presTelefono;

    /**
     * @var float
     *
     * @ORM\Column(name="pres_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $presCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="presta_codigo", type="integer", nullable=true)
     */
    private $prestaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_valorUnidad", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $presValorunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_iva", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $presIva;

    /**
     * @var string
     * CAMPO PARA SEITEM SERVICIO TECNICO
     *
     * @ORM\Column(name="pres_costoUnidad", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $presCostoUnidad;

    /**
     * @var integer
     * CAMPO PARA SEITEM SERVICIO TECNICO
     *
     * @ORM\Column(name="pres_categoria", type="integer", nullable=true)
     */
    private $presCategoria;

    /**
     * Get presCodigo
     *
     * @return integer 
     */
    public function getPresCodigo() {
        return $this->presCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return PrestamosSalida
     */
    public function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;

        return $this;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProdCodigo() {
        return $this->prodCodigo;
    }

    /**
     * Set presTipo
     *
     * @param integer $presTipo
     * @return PrestamosSalida
     */
    public function setPresTipo($presTipo) {
        $this->presTipo = $presTipo;

        return $this;
    }

    /**
     * Get presTipo
     *
     * @return integer 
     */
    public function getPresTipo() {
        return $this->presTipo;
    }

    /**
     * Set presEstado
     *
     * @param integer $presEstado
     * @return PrestamosSalida
     */
    public function setPresEstado($presEstado) {
        $this->presEstado = $presEstado;

        return $this;
    }

    /**
     * Get presEstado
     *
     * @return integer 
     */
    public function getPresEstado() {
        return $this->presEstado;
    }

    /**
     * Set presPersona
     *
     * @param string $presPersona
     * @return PrestamosSalida
     */
    public function setPresPersona($presPersona) {
        $this->presPersona = $presPersona;

        return $this;
    }

    /**
     * Get presPersona
     *
     * @return string 
     */
    public function getPresPersona() {
        return $this->presPersona;
    }

    /**
     * Set presTelefono
     *
     * @param string $presTelefono
     * @return PrestamosSalida
     */
    public function setPresTelefono($presTelefono) {
        $this->presTelefono = $presTelefono;

        return $this;
    }

    /**
     * Get presTelefono
     *
     * @return string 
     */
    public function getPresTelefono() {
        return $this->presTelefono;
    }

    /**
     * Set presCantidad
     *
     * @param float $presCantidad
     * @return PrestamosSalida
     */
    public function setPresCantidad($presCantidad) {
        $this->presCantidad = $presCantidad;

        return $this;
    }

    /**
     * Get presCantidad
     *
     * @return float 
     */
    public function getPresCantidad() {
        return $this->presCantidad;
    }

    /**
     * Set prestaCodigo
     *
     * @param integer $prestaCodigo
     * @return PrestamosSalida
     */
    public function setPrestaCodigo($prestaCodigo) {
        $this->prestaCodigo = $prestaCodigo;

        return $this;
    }

    /**
     * Get prestaCodigo
     *
     * @return integer 
     */
    public function getPrestaCodigo() {
        return $this->prestaCodigo;
    }

    /**
     * Set presValorunidad
     *
     * @param string $presValorunidad
     * @return PrestamosSalida
     */
    public function setPresValorunidad($presValorunidad) {
        $this->presValorunidad = $presValorunidad;

        return $this;
    }

    /**
     * Get presValorunidad
     *
     * @return string 
     */
    public function getPresValorunidad() {
        return $this->presValorunidad;
    }

    /**
     * Set presIva
     *
     * @param string $presIva
     * @return PrestamosSalida
     */
    public function setPresIva($presIva) {
        $this->presIva = $presIva;

        return $this;
    }

    /**
     * Get presIva
     *
     * @return string 
     */
    public function getPresIva() {
        return $this->presIva;
    }

    function getPresCostoUnidad() {
        return $this->presCostoUnidad;
    }

    function getPresCategoria() {
        return $this->presCategoria;
    }

    function setPresCostoUnidad($presCostoUnidad) {
        $this->presCostoUnidad = $presCostoUnidad;
    }

    function setPresCategoria($presCategoria) {
        $this->presCategoria = $presCategoria;
    }

}
