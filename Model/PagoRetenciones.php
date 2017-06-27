<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * PagoRetenciones
 *
 * @ORM\Table(name="pago_retenciones")
 * @ORM\Entity
 */
class PagoRetenciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cod_pago_retencion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codPagoRetencion;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pago_retencion", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $valorPagoRetencion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_egreso_pagoRetencion", type="integer", nullable=true)
     */
    private $codEgresoPagoretencion;


    /**
     * Get codPagoRetencion
     *
     * @return integer 
     */
    public function getCodPagoRetencion()
    {
        return $this->codPagoRetencion;
    }

    /**
     * Set valorPagoRetencion
     *
     * @param string $valorPagoRetencion
     * @return PagoRetenciones
     */
    public function setValorPagoRetencion($valorPagoRetencion)
    {
        $this->valorPagoRetencion = $valorPagoRetencion;

        return $this;
    }

    /**
     * Get valorPagoRetencion
     *
     * @return string 
     */
    public function getValorPagoRetencion()
    {
        return $this->valorPagoRetencion;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return PagoRetenciones
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return PagoRetenciones
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set codEgresoPagoretencion
     *
     * @param integer $codEgresoPagoretencion
     * @return PagoRetenciones
     */
    public function setCodEgresoPagoretencion($codEgresoPagoretencion)
    {
        $this->codEgresoPagoretencion = $codEgresoPagoretencion;

        return $this;
    }

    /**
     * Get codEgresoPagoretencion
     *
     * @return integer 
     */
    public function getCodEgresoPagoretencion()
    {
        return $this->codEgresoPagoretencion;
    }
}
