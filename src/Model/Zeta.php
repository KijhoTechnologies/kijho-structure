<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zeta
 *
 * @ORM\Table(name="zeta")
 * @ORM\Entity
 */
class Zeta {

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zetaCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zeta_fecha", type="date", nullable=false)
     */
    private $zetaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_iva16", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $zetaPuntoIva16;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_iva10", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoIva10;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_exento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoExento;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_excluido", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_descuento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_total", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_min", type="integer", nullable=false)
     */
    private $facvMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="facv_max", type="integer", nullable=false)
     */
    private $facvMax;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_iva5", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_iva16_fisico", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoIva16Fisico;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_iva10_fisico", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoIva10Fisico;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_iva5_fisico", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoIva5Fisico;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_exento_fisico", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoExentoFisico;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_punto_excluido_fisico", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaPuntoExcluidoFisico;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_fisico_descuento", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaFisicoDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_fisico_total", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $zetaFisicoTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_min", type="integer", nullable=true)
     */
    private $facfvMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="facfv_max", type="integer", nullable=true)
     */
    private $facfvMax;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generada", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGenerada;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generada5", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGenerada5;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generada10", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGenerada10;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generada16", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGenerada16;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generadaExento", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGeneradaExento;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generadaExcluido", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGeneradaExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="zeta_generadaSimplificado", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $zetaGeneradaSimplificado;

    /*
     * INICIO BLOQUE Atributos para tecnical service app
     */

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta1", length=11, type="integer",  options={"default" : "0"}, nullable=true)
     */
    private $zeta1;

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta12, length=11, type="integer",  options={"default" : "0"}, nullable=true)
     */
    private $zeta2;

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta3", length=11, type="integer",  options={"default" : "0"}, nullable=true)
     */
    private $zeta3;

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta_exento", length=11, type="integer",  options={"default" : "0"}, nullable=true)
     */
    private $zetaExento;

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta_excluido", length=11, type="integer",  options={"default" : "0"}, nullable=true)
     */
    private $zetaExcluido;

    /**
     * @var integer
     *
     * @ORM\Column(name="zeta_sim", length=11, type="integer",  options={"default" : "0"}, nullable=true)
     */
    private $zetaSim;

    /*
     * FIN BLOQUE Atributos para tecnical service app
     */

    /**
     * Get zetaCodigo
     *
     * @return integer 
     */
    public function getZetaCodigo() {
        return $this->zetaCodigo;
    }

    /**
     * Set zetaFecha
     *
     * @param \DateTime $zetaFecha
     * @return Zeta
     */
    public function setZetaFecha($zetaFecha) {
        $this->zetaFecha = $zetaFecha;

        return $this;
    }

    /**
     * Get zetaFecha
     *
     * @return \DateTime 
     */
    public function getZetaFecha() {
        return $this->zetaFecha;
    }

    /**
     * Set zetaPuntoIva16
     *
     * @param string $zetaPuntoIva16
     * @return Zeta
     */
    public function setZetaPuntoIva16($zetaPuntoIva16) {
        $this->zetaPuntoIva16 = $zetaPuntoIva16;

        return $this;
    }

    /**
     * Get zetaPuntoIva16
     *
     * @return string 
     */
    public function getZetaPuntoIva16() {
        return $this->zetaPuntoIva16;
    }

    /**
     * Set zetaPuntoIva10
     *
     * @param string $zetaPuntoIva10
     * @return Zeta
     */
    public function setZetaPuntoIva10($zetaPuntoIva10) {
        $this->zetaPuntoIva10 = $zetaPuntoIva10;

        return $this;
    }

    /**
     * Get zetaPuntoIva10
     *
     * @return string 
     */
    public function getZetaPuntoIva10() {
        return $this->zetaPuntoIva10;
    }

    /**
     * Set zetaPuntoExento
     *
     * @param string $zetaPuntoExento
     * @return Zeta
     */
    public function setZetaPuntoExento($zetaPuntoExento) {
        $this->zetaPuntoExento = $zetaPuntoExento;

        return $this;
    }

    /**
     * Get zetaPuntoExento
     *
     * @return string 
     */
    public function getZetaPuntoExento() {
        return $this->zetaPuntoExento;
    }

    /**
     * Set zetaPuntoExcluido
     *
     * @param string $zetaPuntoExcluido
     * @return Zeta
     */
    public function setZetaPuntoExcluido($zetaPuntoExcluido) {
        $this->zetaPuntoExcluido = $zetaPuntoExcluido;

        return $this;
    }

    /**
     * Get zetaPuntoExcluido
     *
     * @return string 
     */
    public function getZetaPuntoExcluido() {
        return $this->zetaPuntoExcluido;
    }

    /**
     * Set zetaDescuento
     *
     * @param string $zetaDescuento
     * @return Zeta
     */
    public function setZetaDescuento($zetaDescuento) {
        $this->zetaDescuento = $zetaDescuento;

        return $this;
    }

    /**
     * Get zetaDescuento
     *
     * @return string 
     */
    public function getZetaDescuento() {
        return $this->zetaDescuento;
    }

    /**
     * Set zetaTotal
     *
     * @param string $zetaTotal
     * @return Zeta
     */
    public function setZetaTotal($zetaTotal) {
        $this->zetaTotal = $zetaTotal;

        return $this;
    }

    /**
     * Get zetaTotal
     *
     * @return string 
     */
    public function getZetaTotal() {
        return $this->zetaTotal;
    }

    /**
     * Set facvMin
     *
     * @param integer $facvMin
     * @return Zeta
     */
    public function setFacvMin($facvMin) {
        $this->facvMin = $facvMin;

        return $this;
    }

    /**
     * Get facvMin
     *
     * @return integer 
     */
    public function getFacvMin() {
        return $this->facvMin;
    }

    /**
     * Set facvMax
     *
     * @param integer $facvMax
     * @return Zeta
     */
    public function setFacvMax($facvMax) {
        $this->facvMax = $facvMax;

        return $this;
    }

    /**
     * Get facvMax
     *
     * @return integer 
     */
    public function getFacvMax() {
        return $this->facvMax;
    }

    /**
     * Set zetaPuntoIva5
     *
     * @param string $zetaPuntoIva5
     * @return Zeta
     */
    public function setZetaPuntoIva5($zetaPuntoIva5) {
        $this->zetaPuntoIva5 = $zetaPuntoIva5;

        return $this;
    }

    /**
     * Get zetaPuntoIva5
     *
     * @return string 
     */
    public function getZetaPuntoIva5() {
        return $this->zetaPuntoIva5;
    }

    /**
     * Set zetaPuntoIva16Fisico
     *
     * @param string $zetaPuntoIva16Fisico
     * @return Zeta
     */
    public function setZetaPuntoIva16Fisico($zetaPuntoIva16Fisico) {
        $this->zetaPuntoIva16Fisico = $zetaPuntoIva16Fisico;

        return $this;
    }

    /**
     * Get zetaPuntoIva16Fisico
     *
     * @return string 
     */
    public function getZetaPuntoIva16Fisico() {
        return $this->zetaPuntoIva16Fisico;
    }

    /**
     * Set zetaPuntoIva10Fisico
     *
     * @param string $zetaPuntoIva10Fisico
     * @return Zeta
     */
    public function setZetaPuntoIva10Fisico($zetaPuntoIva10Fisico) {
        $this->zetaPuntoIva10Fisico = $zetaPuntoIva10Fisico;

        return $this;
    }

    /**
     * Get zetaPuntoIva10Fisico
     *
     * @return string 
     */
    public function getZetaPuntoIva10Fisico() {
        return $this->zetaPuntoIva10Fisico;
    }

    /**
     * Set zetaPuntoIva5Fisico
     *
     * @param string $zetaPuntoIva5Fisico
     * @return Zeta
     */
    public function setZetaPuntoIva5Fisico($zetaPuntoIva5Fisico) {
        $this->zetaPuntoIva5Fisico = $zetaPuntoIva5Fisico;

        return $this;
    }

    /**
     * Get zetaPuntoIva5Fisico
     *
     * @return string 
     */
    public function getZetaPuntoIva5Fisico() {
        return $this->zetaPuntoIva5Fisico;
    }

    /**
     * Set zetaPuntoExentoFisico
     *
     * @param string $zetaPuntoExentoFisico
     * @return Zeta
     */
    public function setZetaPuntoExentoFisico($zetaPuntoExentoFisico) {
        $this->zetaPuntoExentoFisico = $zetaPuntoExentoFisico;

        return $this;
    }

    /**
     * Get zetaPuntoExentoFisico
     *
     * @return string 
     */
    public function getZetaPuntoExentoFisico() {
        return $this->zetaPuntoExentoFisico;
    }

    /**
     * Set zetaPuntoExcluidoFisico
     *
     * @param string $zetaPuntoExcluidoFisico
     * @return Zeta
     */
    public function setZetaPuntoExcluidoFisico($zetaPuntoExcluidoFisico) {
        $this->zetaPuntoExcluidoFisico = $zetaPuntoExcluidoFisico;

        return $this;
    }

    /**
     * Get zetaPuntoExcluidoFisico
     *
     * @return string 
     */
    public function getZetaPuntoExcluidoFisico() {
        return $this->zetaPuntoExcluidoFisico;
    }

    /**
     * Set zetaFisicoDescuento
     *
     * @param string $zetaFisicoDescuento
     * @return Zeta
     */
    public function setZetaFisicoDescuento($zetaFisicoDescuento) {
        $this->zetaFisicoDescuento = $zetaFisicoDescuento;

        return $this;
    }

    /**
     * Get zetaFisicoDescuento
     *
     * @return string 
     */
    public function getZetaFisicoDescuento() {
        return $this->zetaFisicoDescuento;
    }

    /**
     * Set zetaFisicoTotal
     *
     * @param string $zetaFisicoTotal
     * @return Zeta
     */
    public function setZetaFisicoTotal($zetaFisicoTotal) {
        $this->zetaFisicoTotal = $zetaFisicoTotal;

        return $this;
    }

    /**
     * Get zetaFisicoTotal
     *
     * @return string 
     */
    public function getZetaFisicoTotal() {
        return $this->zetaFisicoTotal;
    }

    /**
     * Set facfvMin
     *
     * @param integer $facfvMin
     * @return Zeta
     */
    public function setFacfvMin($facfvMin) {
        $this->facfvMin = $facfvMin;

        return $this;
    }

    /**
     * Get facfvMin
     *
     * @return integer 
     */
    public function getFacfvMin() {
        return $this->facfvMin;
    }

    /**
     * Set facfvMax
     *
     * @param integer $facfvMax
     * @return Zeta
     */
    public function setFacfvMax($facfvMax) {
        $this->facfvMax = $facfvMax;

        return $this;
    }

    /**
     * Get facfvMax
     *
     * @return integer 
     */
    public function getFacfvMax() {
        return $this->facfvMax;
    }

    /**
     * Set zetaGenerada
     *
     * @param string $zetaGenerada
     * @return Zeta
     */
    public function setZetaGenerada($zetaGenerada) {
        $this->zetaGenerada = $zetaGenerada;

        return $this;
    }

    /**
     * Get zetaGenerada
     *
     * @return string 
     */
    public function getZetaGenerada() {
        return $this->zetaGenerada;
    }

    /**
     * Set zetaGenerada5
     *
     * @param string $zetaGenerada5
     * @return Zeta
     */
    public function setZetaGenerada5($zetaGenerada5) {
        $this->zetaGenerada5 = $zetaGenerada5;

        return $this;
    }

    /**
     * Get zetaGenerada5
     *
     * @return string 
     */
    public function getZetaGenerada5() {
        return $this->zetaGenerada5;
    }

    /**
     * Set zetaGenerada10
     *
     * @param string $zetaGenerada10
     * @return Zeta
     */
    public function setZetaGenerada10($zetaGenerada10) {
        $this->zetaGenerada10 = $zetaGenerada10;

        return $this;
    }

    /**
     * Get zetaGenerada10
     *
     * @return string 
     */
    public function getZetaGenerada10() {
        return $this->zetaGenerada10;
    }

    /**
     * Set zetaGenerada16
     *
     * @param string $zetaGenerada16
     * @return Zeta
     */
    public function setZetaGenerada16($zetaGenerada16) {
        $this->zetaGenerada16 = $zetaGenerada16;

        return $this;
    }

    /**
     * Get zetaGenerada16
     *
     * @return string 
     */
    public function getZetaGenerada16() {
        return $this->zetaGenerada16;
    }

    /**
     * Set zetaGeneradaExento
     *
     * @param string $zetaGeneradaExento
     * @return Zeta
     */
    public function setZetaGeneradaExento($zetaGeneradaExento) {
        $this->zetaGeneradaExento = $zetaGeneradaExento;

        return $this;
    }

    /**
     * Get zetaGeneradaExento
     *
     * @return string 
     */
    public function getZetaGeneradaExento() {
        return $this->zetaGeneradaExento;
    }

    /**
     * Set zetaGeneradaExcluido
     *
     * @param string $zetaGeneradaExcluido
     * @return Zeta
     */
    public function setZetaGeneradaExcluido($zetaGeneradaExcluido) {
        $this->zetaGeneradaExcluido = $zetaGeneradaExcluido;

        return $this;
    }

    /**
     * Get zetaGeneradaExcluido
     *
     * @return string 
     */
    public function getZetaGeneradaExcluido() {
        return $this->zetaGeneradaExcluido;
    }

    /**
     * Set zetaGeneradaSimplificado
     *
     * @param string $zetaGeneradaSimplificado
     * @return Zeta
     */
    public function setZetaGeneradaSimplificado($zetaGeneradaSimplificado) {
        $this->zetaGeneradaSimplificado = $zetaGeneradaSimplificado;

        return $this;
    }

    /**
     * Get zetaGeneradaSimplificado
     *
     * @return string 
     */
    public function getZetaGeneradaSimplificado() {
        return $this->zetaGeneradaSimplificado;
    }

    function getZeta1() {
        return $this->zeta1;
    }

    function getZeta2() {
        return $this->zeta2;
    }

    function getZeta3() {
        return $this->zeta3;
    }

    function getZetaExento() {
        return $this->zetaExento;
    }

    function getZetaExcluido() {
        return $this->zetaExcluido;
    }

    function getZetaSim() {
        return $this->zetaSim;
    }

    function setZeta1($zeta1) {
        $this->zeta1 = $zeta1;
    }

    function setZeta2($zeta2) {
        $this->zeta2 = $zeta2;
    }

    function setZeta3($zeta3) {
        $this->zeta3 = $zeta3;
    }

    function setZetaExento($zetaExento) {
        $this->zetaExento = $zetaExento;
    }

    function setZetaExcluido($zetaExcluido) {
        $this->zetaExcluido = $zetaExcluido;
    }

    function setZetaSim($zetaSim) {
        $this->zetaSim = $zetaSim;
    }

}
