<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaImpuestos
 *
 * @ORM\Table(name="factura_impuestos")
 * @ORM\Entity(repositoryClass="FacturaImpuestosRepository")
 */
class FacturaImpuestos {

    /**
     * @var integer
     *
     * @ORM\Column(name="fac_imp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fac_tipo", type="integer", nullable=false)
     */
    private $facTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fac_codigo", type="integer", nullable=false)
     */
    private $facCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="fac_imp_valor", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $facImpValor;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="fac_imp_iva", type="integer", nullable=false)
     */
    private $facImpIva;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fi_d", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $fiD;

    

    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set facTipo
     *
     * @param integer $facTipo
     * @return FacturaImpuestos
     */
    public function setFacTipo($facTipo) {
        $this->facTipo = $facTipo;

        return $this;
    }

    /**
     * Get facTipo
     *
     * @return integer 
     */
    public function getFacTipo() {
        return $this->facTipo;
    }

    /**
     * Set facCodigo
     *
     * @param integer $facCodigo
     * @return FacturaImpuestos
     */
    public function setFacCodigo($facCodigo) {
        $this->facCodigo = $facCodigo;

        return $this;
    }

    /**
     * Get facCodigo
     *
     * @return integer 
     */
    public function getFacCodigo() {
        return $this->facCodigo;
    }
    
    /**
     * Set facImpValor
     *
     * @param string $facImpValor
     * @return FacturaImpuestos
     */
    public function setFacImpValor($facImpValor) {
        $this->facImpValor = $facImpValor;

        return $this;
    }

    /**
     * Get facImpValor
     *
     * @return string 
     */
    public function getFacImpValor() {
        return $this->facImpValor;
    }
    
    /**
     * Set facImpIva
     *
     * @param integer $facImpIva
     * @return FacturaImpuestos
     */
    public function setFacImpIva($facImpIva) {
        $this->facImpIva = $facImpIva;

        return $this;
    }

    /**
     * Get facImpIva
     *
     * @return integer 
     */
    public function getFacImpIva() {
        return $this->facImpIva;
    }
    
    /**
     * Set fiD
     *
     * @param string $fiD
     * @return FacturaImpuestos
     */
    public function setFiD($fiD) {
        $this->fiD = $fiD;

        return $this;
    }

    /**
     * Get fiD
     *
     * @return string 
     */
    public function getFiD() {
        return $this->fiD;
    }

    

}
