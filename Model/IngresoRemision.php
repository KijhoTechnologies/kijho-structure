<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * IngresoRemision
 *
 * @ORM\Table(name="ingreso_remision")
 * @ORM\Entity
 */
class IngresoRemision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ingr_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ingrCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ingr_valor", type="integer", nullable=true)
     */
    private $ingrValor;

    /**
     * @var string
     *
     * @ORM\Column(name="ingr_nit", type="string", length=30, nullable=false)
     */
    private $ingrNit;

    /**
     * @var string
     *
     * @ORM\Column(name="ingr_persona", type="string", length=50, nullable=false)
     */
    private $ingrPersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="ingr_movimiento_contable", type="integer", nullable=false)
     */
    private $ingrMovimientoContable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ingr_fecha", type="date", nullable=true)
     */
    private $ingrFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ingr_hora", type="string", length=100, nullable=true)
     */
    private $ingrHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_factura", type="integer", nullable=false)
     */
    private $codFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="ingr_descripcion", type="string", length=100, nullable=false)
     */
    private $ingrDescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_venta_servicio", type="integer", nullable=false)
     */
    private $codVentaServicio;


    /**
     * Get ingrCodigo
     *
     * @return integer 
     */
    public function getIngrCodigo()
    {
        return $this->ingrCodigo;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return IngresoRemision
     */
    public function setUsuCodigo($usuCodigo)
    {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo()
    {
        return $this->usuCodigo;
    }

    /**
     * Set ingrValor
     *
     * @param integer $ingrValor
     * @return IngresoRemision
     */
    public function setIngrValor($ingrValor)
    {
        $this->ingrValor = $ingrValor;

        return $this;
    }

    /**
     * Get ingrValor
     *
     * @return integer 
     */
    public function getIngrValor()
    {
        return $this->ingrValor;
    }

    /**
     * Set ingrNit
     *
     * @param string $ingrNit
     * @return IngresoRemision
     */
    public function setIngrNit($ingrNit)
    {
        $this->ingrNit = $ingrNit;

        return $this;
    }

    /**
     * Get ingrNit
     *
     * @return string 
     */
    public function getIngrNit()
    {
        return $this->ingrNit;
    }

    /**
     * Set ingrPersona
     *
     * @param string $ingrPersona
     * @return IngresoRemision
     */
    public function setIngrPersona($ingrPersona)
    {
        $this->ingrPersona = $ingrPersona;

        return $this;
    }

    /**
     * Get ingrPersona
     *
     * @return string 
     */
    public function getIngrPersona()
    {
        return $this->ingrPersona;
    }

    /**
     * Set ingrMovimientoContable
     *
     * @param integer $ingrMovimientoContable
     * @return IngresoRemision
     */
    public function setIngrMovimientoContable($ingrMovimientoContable)
    {
        $this->ingrMovimientoContable = $ingrMovimientoContable;

        return $this;
    }

    /**
     * Get ingrMovimientoContable
     *
     * @return integer 
     */
    public function getIngrMovimientoContable()
    {
        return $this->ingrMovimientoContable;
    }

    /**
     * Set ingrFecha
     *
     * @param \DateTime $ingrFecha
     * @return IngresoRemision
     */
    public function setIngrFecha($ingrFecha)
    {
        $this->ingrFecha = $ingrFecha;

        return $this;
    }

    /**
     * Get ingrFecha
     *
     * @return \DateTime 
     */
    public function getIngrFecha()
    {
        return $this->ingrFecha;
    }

    /**
     * Set ingrHora
     *
     * @param string $ingrHora
     * @return IngresoRemision
     */
    public function setIngrHora($ingrHora)
    {
        $this->ingrHora = $ingrHora;

        return $this;
    }

    /**
     * Get ingrHora
     *
     * @return string 
     */
    public function getIngrHora()
    {
        return $this->ingrHora;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return IngresoRemision
     */
    public function setCodCaja($codCaja)
    {
        $this->codCaja = $codCaja;

        return $this;
    }

    /**
     * Get codCaja
     *
     * @return integer 
     */
    public function getCodCaja()
    {
        return $this->codCaja;
    }

    /**
     * Set codFactura
     *
     * @param integer $codFactura
     * @return IngresoRemision
     */
    public function setCodFactura($codFactura)
    {
        $this->codFactura = $codFactura;

        return $this;
    }

    /**
     * Get codFactura
     *
     * @return integer 
     */
    public function getCodFactura()
    {
        return $this->codFactura;
    }

    /**
     * Set ingrDescripcion
     *
     * @param string $ingrDescripcion
     * @return IngresoRemision
     */
    public function setIngrDescripcion($ingrDescripcion)
    {
        $this->ingrDescripcion = $ingrDescripcion;

        return $this;
    }

    /**
     * Get ingrDescripcion
     *
     * @return string 
     */
    public function getIngrDescripcion()
    {
        return $this->ingrDescripcion;
    }

    /**
     * Set codVentaServicio
     *
     * @param integer $codVentaServicio
     * @return IngresoRemision
     */
    public function setCodVentaServicio($codVentaServicio)
    {
        $this->codVentaServicio = $codVentaServicio;

        return $this;
    }

    /**
     * Get codVentaServicio
     *
     * @return integer 
     */
    public function getCodVentaServicio()
    {
        return $this->codVentaServicio;
    }
    }
