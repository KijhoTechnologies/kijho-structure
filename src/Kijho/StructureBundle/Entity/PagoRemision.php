<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * PagoRemision
 *
 * @ORM\Table(name="pago_remision")
 * @ORM\Entity
 */
class PagoRemision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pag_rem_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagRemCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="rem_codigo", type="integer", nullable=true)
     */
    private $remCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="pag_total", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $pagTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="pag_efectivo", type="decimal", precision=11, scale=0, nullable=true)
     */
    private $pagEfectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="pag_cambio", type="decimal", precision=11, scale=0, nullable=true)
     */
    private $pagCambio;


    /**
     * Get pagRemCodigo
     *
     * @return integer 
     */
    public function getPagRemCodigo()
    {
        return $this->pagRemCodigo;
    }

    /**
     * Set remCodigo
     *
     * @param integer $remCodigo
     * @return PagoRemision
     */
    public function setRemCodigo($remCodigo)
    {
        $this->remCodigo = $remCodigo;

        return $this;
    }

    /**
     * Get remCodigo
     *
     * @return integer 
     */
    public function getRemCodigo()
    {
        return $this->remCodigo;
    }

    /**
     * Set pagTotal
     *
     * @param string $pagTotal
     * @return PagoRemision
     */
    public function setPagTotal($pagTotal)
    {
        $this->pagTotal = $pagTotal;

        return $this;
    }

    /**
     * Get pagTotal
     *
     * @return string 
     */
    public function getPagTotal()
    {
        return $this->pagTotal;
    }

    /**
     * Set pagEfectivo
     *
     * @param string $pagEfectivo
     * @return PagoRemision
     */
    public function setPagEfectivo($pagEfectivo)
    {
        $this->pagEfectivo = $pagEfectivo;

        return $this;
    }

    /**
     * Get pagEfectivo
     *
     * @return string 
     */
    public function getPagEfectivo()
    {
        return $this->pagEfectivo;
    }

    /**
     * Set pagCambio
     *
     * @param string $pagCambio
     * @return PagoRemision
     */
    public function setPagCambio($pagCambio)
    {
        $this->pagCambio = $pagCambio;

        return $this;
    }

    /**
     * Get pagCambio
     *
     * @return string 
     */
    public function getPagCambio()
    {
        return $this->pagCambio;
    }
}
