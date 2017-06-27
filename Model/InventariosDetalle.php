<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * InventariosDetalle
 *
 * @ORM\Table(name="inventarios_detalle")
 * @ORM\Entity
 */
class InventariosDetalle
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
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="inv_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $invCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="inv_invCodigo", type="integer", nullable=false)
     */
    private $invInvcodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_costoUnit", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $invCostounit;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_diferencia", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $invDiferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_existencias", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $invExistencias;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_tipo_ajuste", type="string", nullable=false)
     */
    private $invTipoAjuste;


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
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return InventariosDetalle
     */
    public function setProdCodigo($prodCodigo)
    {
        $this->prodCodigo = $prodCodigo;

        return $this;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProdCodigo()
    {
        return $this->prodCodigo;
    }

    /**
     * Set invCantidad
     *
     * @param float $invCantidad
     * @return InventariosDetalle
     */
    public function setInvCantidad($invCantidad)
    {
        $this->invCantidad = $invCantidad;

        return $this;
    }

    /**
     * Get invCantidad
     *
     * @return float 
     */
    public function getInvCantidad()
    {
        return $this->invCantidad;
    }

    /**
     * Set invInvcodigo
     *
     * @param integer $invInvcodigo
     * @return InventariosDetalle
     */
    public function setInvInvcodigo($invInvcodigo)
    {
        $this->invInvcodigo = $invInvcodigo;

        return $this;
    }

    /**
     * Get invInvcodigo
     *
     * @return integer 
     */
    public function getInvInvcodigo()
    {
        return $this->invInvcodigo;
    }

    /**
     * Set invCostounit
     *
     * @param string $invCostounit
     * @return InventariosDetalle
     */
    public function setInvCostounit($invCostounit)
    {
        $this->invCostounit = $invCostounit;

        return $this;
    }

    /**
     * Get invCostounit
     *
     * @return string 
     */
    public function getInvCostounit()
    {
        return $this->invCostounit;
    }

    /**
     * Set invDiferencia
     *
     * @param string $invDiferencia
     * @return InventariosDetalle
     */
    public function setInvDiferencia($invDiferencia)
    {
        $this->invDiferencia = $invDiferencia;

        return $this;
    }

    /**
     * Get invDiferencia
     *
     * @return string 
     */
    public function getInvDiferencia()
    {
        return $this->invDiferencia;
    }

    /**
     * Set invExistencias
     *
     * @param string $invExistencias
     * @return InventariosDetalle
     */
    public function setInvExistencias($invExistencias)
    {
        $this->invExistencias = $invExistencias;

        return $this;
    }

    /**
     * Get invExistencias
     *
     * @return string 
     */
    public function getInvExistencias()
    {
        return $this->invExistencias;
    }

    /**
     * Set invTipoAjuste
     *
     * @param string $invTipoAjuste
     * @return InventariosDetalle
     */
    public function setInvTipoAjuste($invTipoAjuste)
    {
        $this->invTipoAjuste = $invTipoAjuste;

        return $this;
    }

    /**
     * Get invTipoAjuste
     *
     * @return string 
     */
    public function getInvTipoAjuste()
    {
        return $this->invTipoAjuste;
    }
}
