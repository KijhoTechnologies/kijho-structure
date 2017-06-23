<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * PagoSeparado
 *
 * @ORM\Table(name="pago_separado")
 * @ORM\Entity
 */
class PagoSeparado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pag_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="sep_codigo", type="integer", nullable=false)
     */
    private $sepCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pag_total", type="integer", nullable=false)
     */
    private $pagTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="pag_efectivo", type="integer", nullable=false)
     */
    private $pagEfectivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pag_cambio", type="integer", nullable=false)
     */
    private $pagCambio;


    /**
     * Get pagCodigo
     *
     * @return integer 
     */
    public function getPagCodigo()
    {
        return $this->pagCodigo;
    }

    /**
     * Set sepCodigo
     *
     * @param integer $sepCodigo
     * @return PagoSeparado
     */
    public function setSepCodigo($sepCodigo)
    {
        $this->sepCodigo = $sepCodigo;

        return $this;
    }

    /**
     * Get sepCodigo
     *
     * @return integer 
     */
    public function getSepCodigo()
    {
        return $this->sepCodigo;
    }

    /**
     * Set pagTotal
     *
     * @param integer $pagTotal
     * @return PagoSeparado
     */
    public function setPagTotal($pagTotal)
    {
        $this->pagTotal = $pagTotal;

        return $this;
    }

    /**
     * Get pagTotal
     *
     * @return integer 
     */
    public function getPagTotal()
    {
        return $this->pagTotal;
    }

    /**
     * Set pagEfectivo
     *
     * @param integer $pagEfectivo
     * @return PagoSeparado
     */
    public function setPagEfectivo($pagEfectivo)
    {
        $this->pagEfectivo = $pagEfectivo;

        return $this;
    }

    /**
     * Get pagEfectivo
     *
     * @return integer 
     */
    public function getPagEfectivo()
    {
        return $this->pagEfectivo;
    }

    /**
     * Set pagCambio
     *
     * @param integer $pagCambio
     * @return PagoSeparado
     */
    public function setPagCambio($pagCambio)
    {
        $this->pagCambio = $pagCambio;

        return $this;
    }

    /**
     * Get pagCambio
     *
     * @return integer 
     */
    public function getPagCambio()
    {
        return $this->pagCambio;
    }
}
