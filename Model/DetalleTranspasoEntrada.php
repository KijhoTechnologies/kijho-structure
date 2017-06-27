<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * DetalleTranspasoEntrada
 *
 * @ORM\Table(name="detalle_transpaso_entrada")
 * @ORM\Entity(repositoryClass="DetalleTranspasoEntradaRepository")
 */
class DetalleTranspasoEntrada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="detrent_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $detrentCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fk", type="integer", nullable=false)
     */
    private $idFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_procodent", type="integer", nullable=false)
     */
    private $tranProcodent;

    /**
     * @var float
     *
     * @ORM\Column(name="tran_procodentcant", type="float", precision=10, scale=0, nullable=false)
     */
    private $tranProcodentcant;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_prod_costo", type="integer", nullable=false)
     */
    private $tranProdCosto;


    /**
     * Get detrentCodigo
     *
     * @return integer 
     */
    public function getDetrentCodigo()
    {
        return $this->detrentCodigo;
    }

    /**
     * Set idFk
     *
     * @param integer $idFk
     * @return DetalleTranspasoEntrada
     */
    public function setIdFk($idFk)
    {
        $this->idFk = $idFk;

        return $this;
    }

    /**
     * Get idFk
     *
     * @return integer 
     */
    public function getIdFk()
    {
        return $this->idFk;
    }

    /**
     * Set tranProcodent
     *
     * @param integer $tranProcodent
     * @return DetalleTranspasoEntrada
     */
    public function setTranProcodent($tranProcodent)
    {
        $this->tranProcodent = $tranProcodent;

        return $this;
    }

    /**
     * Get tranProcodent
     *
     * @return integer 
     */
    public function getTranProcodent()
    {
        return $this->tranProcodent;
    }

    /**
     * Set tranProcodentcant
     *
     * @param float $tranProcodentcant
     * @return DetalleTranspasoEntrada
     */
    public function setTranProcodentcant($tranProcodentcant)
    {
        $this->tranProcodentcant = $tranProcodentcant;

        return $this;
    }

    /**
     * Get tranProcodentcant
     *
     * @return float 
     */
    public function getTranProcodentcant()
    {
        return $this->tranProcodentcant;
    }

    /**
     * Set tranProdCosto
     *
     * @param integer $tranProdCosto
     * @return DetalleTranspasoEntrada
     */
    public function setTranProdCosto($tranProdCosto)
    {
        $this->tranProdCosto = $tranProdCosto;

        return $this;
    }

    /**
     * Get tranProdCosto
     *
     * @return integer 
     */
    public function getTranProdCosto()
    {
        return $this->tranProdCosto;
    }
}
