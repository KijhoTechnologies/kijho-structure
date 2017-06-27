<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * ContabilidadNuevoGasto
 *
 * @ORM\Table(name="contabilidad_nuevo_gasto")
 * @ORM\Entity
 */
class ContabilidadNuevoGasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cong_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $congCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cong_fecha", type="date", nullable=false)
     */
    private $congFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cong_concepto", type="string", length=50, nullable=false)
     */
    private $congConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="cong_tipo", type="string", nullable=false)
     */
    private $congTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cong_valor", type="integer", nullable=false)
     */
    private $congValor;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;


    /**
     * Get congCodigo
     *
     * @return integer 
     */
    public function getCongCodigo()
    {
        return $this->congCodigo;
    }

    /**
     * Set congFecha
     *
     * @param \DateTime $congFecha
     * @return ContabilidadNuevoGasto
     */
    public function setCongFecha($congFecha)
    {
        $this->congFecha = $congFecha;

        return $this;
    }

    /**
     * Get congFecha
     *
     * @return \DateTime 
     */
    public function getCongFecha()
    {
        return $this->congFecha;
    }

    /**
     * Set congConcepto
     *
     * @param string $congConcepto
     * @return ContabilidadNuevoGasto
     */
    public function setCongConcepto($congConcepto)
    {
        $this->congConcepto = $congConcepto;

        return $this;
    }

    /**
     * Get congConcepto
     *
     * @return string 
     */
    public function getCongConcepto()
    {
        return $this->congConcepto;
    }

    /**
     * Set congTipo
     *
     * @param string $congTipo
     * @return ContabilidadNuevoGasto
     */
    public function setCongTipo($congTipo)
    {
        $this->congTipo = $congTipo;

        return $this;
    }

    /**
     * Get congTipo
     *
     * @return string 
     */
    public function getCongTipo()
    {
        return $this->congTipo;
    }

    /**
     * Set congValor
     *
     * @param integer $congValor
     * @return ContabilidadNuevoGasto
     */
    public function setCongValor($congValor)
    {
        $this->congValor = $congValor;

        return $this;
    }

    /**
     * Get congValor
     *
     * @return integer 
     */
    public function getCongValor()
    {
        return $this->congValor;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return ContabilidadNuevoGasto
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
     * Set codCaja
     *
     * @param integer $codCaja
     * @return ContabilidadNuevoGasto
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
}
