<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * TipoMovimiento
 *
 * @ORM\Table(name="tipo_movimiento")
 * @ORM\Entity
 */
class TipoMovimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tm_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_tipo", type="string", nullable=false)
     */
    private $tmTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_codigo_contable", type="string", length=10, nullable=true)
     */
    private $tmCodigoContable;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_descripcion", type="string", length=50, nullable=false)
     */
    private $tmDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tm_rete_uvt", type="integer", nullable=true)
     */
    private $tmReteUvt;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_rete_tarifa", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $tmReteTarifa;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_rete_base_pesos", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tmReteBasePesos;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_rete_iva", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $tmReteIva;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_base_rete_ica", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $tmBaseReteIca;

    /**
     * @var string
     *
     * @ORM\Column(name="tm_tarifa_rete_ica", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tmTarifaReteIca;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean",nullable=true, options={"default"=false})
     */
    private $deleted;


    /**
     * Get tmCodigo
     *
     * @return integer 
     */
    public function getTmCodigo()
    {
        return $this->tmCodigo;
    }

    /**
     * Set tmTipo
     *
     * @param string $tmTipo
     * @return TipoMovimiento
     */
    public function setTmTipo($tmTipo)
    {
        $this->tmTipo = $tmTipo;

        return $this;
    }

    /**
     * Get tmTipo
     *
     * @return string 
     */
    public function getTmTipo()
    {
        return $this->tmTipo;
    }

    /**
     * Set tmCodigoContable
     *
     * @param string $tmCodigoContable
     * @return TipoMovimiento
     */
    public function setTmCodigoContable($tmCodigoContable)
    {
        $this->tmCodigoContable = $tmCodigoContable;

        return $this;
    }

    /**
     * Get tmCodigoContable
     *
     * @return string 
     */
    public function getTmCodigoContable()
    {
        return $this->tmCodigoContable;
    }

    /**
     * Set tmDescripcion
     *
     * @param string $tmDescripcion
     * @return TipoMovimiento
     */
    public function setTmDescripcion($tmDescripcion)
    {
        $this->tmDescripcion = $tmDescripcion;

        return $this;
    }

    /**
     * Get tmDescripcion
     *
     * @return string 
     */
    public function getTmDescripcion()
    {
        return $this->tmDescripcion;
    }

    /**
     * Set tmReteUvt
     *
     * @param integer $tmReteUvt
     * @return TipoMovimiento
     */
    public function setTmReteUvt($tmReteUvt)
    {
        $this->tmReteUvt = $tmReteUvt;

        return $this;
    }

    /**
     * Get tmReteUvt
     *
     * @return integer 
     */
    public function getTmReteUvt()
    {
        return $this->tmReteUvt;
    }

    /**
     * Set tmReteTarifa
     *
     * @param string $tmReteTarifa
     * @return TipoMovimiento
     */
    public function setTmReteTarifa($tmReteTarifa)
    {
        $this->tmReteTarifa = $tmReteTarifa;

        return $this;
    }

    /**
     * Get tmReteTarifa
     *
     * @return string 
     */
    public function getTmReteTarifa()
    {
        return $this->tmReteTarifa;
    }

    /**
     * Set tmReteBasePesos
     *
     * @param string $tmReteBasePesos
     * @return TipoMovimiento
     */
    public function setTmReteBasePesos($tmReteBasePesos)
    {
        $this->tmReteBasePesos = $tmReteBasePesos;

        return $this;
    }

    /**
     * Get tmReteBasePesos
     *
     * @return string 
     */
    public function getTmReteBasePesos()
    {
        return $this->tmReteBasePesos;
    }

    /**
     * Set tmReteIva
     *
     * @param string $tmReteIva
     * @return TipoMovimiento
     */
    public function setTmReteIva($tmReteIva)
    {
        $this->tmReteIva = $tmReteIva;

        return $this;
    }

    /**
     * Get tmReteIva
     *
     * @return string 
     */
    public function getTmReteIva()
    {
        return $this->tmReteIva;
    }

    /**
     * Set tmBaseReteIca
     *
     * @param string $tmBaseReteIca
     * @return TipoMovimiento
     */
    public function setTmBaseReteIca($tmBaseReteIca)
    {
        $this->tmBaseReteIca = $tmBaseReteIca;

        return $this;
    }

    /**
     * Get tmBaseReteIca
     *
     * @return string 
     */
    public function getTmBaseReteIca()
    {
        return $this->tmBaseReteIca;
    }

    /**
     * Set tmTarifaReteIca
     *
     * @param string $tmTarifaReteIca
     * @return TipoMovimiento
     */
    public function setTmTarifaReteIca($tmTarifaReteIca)
    {
        $this->tmTarifaReteIca = $tmTarifaReteIca;

        return $this;
    }

    /**
     * Get tmTarifaReteIca
     *
     * @return string 
     */
    public function getTmTarifaReteIca()
    {
        return $this->tmTarifaReteIca;
    }
    
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }
}
