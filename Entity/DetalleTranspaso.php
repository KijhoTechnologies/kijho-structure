<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;





/**
 * DetalleTranspaso
 *
 * @ORM\Table(name="detalle_transpaso")
 * @ORM\Entity(repositoryClass="DetalleTranspasoRepository")
 */
class DetalleTranspaso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="detrsal_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $detrsalCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fk", type="integer", nullable=false)
     */
    private $idFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_procodsal", type="integer", nullable=false)
     */
    private $tranProcodsal;

    /**
     * @var float
     *
     * @ORM\Column(name="tran_procodsalcant", type="float", precision=10, scale=0, nullable=false)
     */
    private $tranProcodsalcant;

    /**
     * @var integer
     *
     * @ORM\Column(name="tran_prod_costo", type="integer", nullable=false)
     */
    private $tranProdCosto;


    /**
     * Get detrsalCodigo
     *
     * @return integer 
     */
    public function getDetrsalCodigo()
    {
        return $this->detrsalCodigo;
    }

    /**
     * Set idFk
     *
     * @param integer $idFk
     * @return DetalleTranspaso
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
     * Set tranProcodsal
     *
     * @param integer $tranProcodsal
     * @return DetalleTranspaso
     */
    public function setTranProcodsal($tranProcodsal)
    {
        $this->tranProcodsal = $tranProcodsal;

        return $this;
    }

    /**
     * Get tranProcodsal
     *
     * @return integer 
     */
    public function getTranProcodsal()
    {
        return $this->tranProcodsal;
    }

    /**
     * Set tranProcodsalcant
     *
     * @param float $tranProcodsalcant
     * @return DetalleTranspaso
     */
    public function setTranProcodsalcant($tranProcodsalcant)
    {
        $this->tranProcodsalcant = $tranProcodsalcant;

        return $this;
    }

    /**
     * Get tranProcodsalcant
     *
     * @return float 
     */
    public function getTranProcodsalcant()
    {
        return $this->tranProcodsalcant;
    }

    /**
     * Set tranProdCosto
     *
     * @param integer $tranProdCosto
     * @return DetalleTranspaso
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
