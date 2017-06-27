<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Pago
 *
 * @ORM\Table(name="pago")
 * @ORM\Entity
 */
class Pago
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
     * @ORM\Column(name="facv_codigo", type="integer", nullable=false)
     */
    private $facvCodigo;

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

    public function __construct(FacturaVentas $saleInvoice) {
        $this->facvCodigo = $saleInvoice;
        $this->pagTotal = $saleInvoice->getFacvTotal();
    }


        /**
     * Set facvCodigo
     *
     * @param integer $facvCodigo
     * @return Pago
     */
    public function setFacvCodigo($facvCodigo)
    {
        $this->facvCodigo = $facvCodigo;

        return $this;
    }

    /**
     * Get facvCodigo
     *
     * @return integer 
     */
    public function getFacvCodigo()
    {
        return $this->facvCodigo;
    }

    /**
     * Set pagTotal
     *
     * @param integer $pagTotal
     * @return Pago
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
     * @return Pago
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
     * @return Pago
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
