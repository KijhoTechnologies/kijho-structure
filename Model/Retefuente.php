<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Retefuente
 *
 * @ORM\Table(name="retefuente")
 * @ORM\Entity
 */
class Retefuente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rete_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reteCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="rete_codigo_cuenta", type="string", length=50, nullable=true)
     */
    private $reteCodigoCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="rete_nombre", type="text", length=65535, nullable=true)
     */
    private $reteNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="rete_base_pesos", type="integer", nullable=true)
     */
    private $reteBasePesos;

    /**
     * @var string
     *
     * @ORM\Column(name="rete_tarifa", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $reteTarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="rete_Uvt", type="integer", nullable=true)
     */
    private $reteUvt;


    /**
     * Get reteCodigo
     *
     * @return integer 
     */
    public function getReteCodigo()
    {
        return $this->reteCodigo;
    }

    /**
     * Set reteCodigoCuenta
     *
     * @param string $reteCodigoCuenta
     * @return Retefuente
     */
    public function setReteCodigoCuenta($reteCodigoCuenta)
    {
        $this->reteCodigoCuenta = $reteCodigoCuenta;

        return $this;
    }

    /**
     * Get reteCodigoCuenta
     *
     * @return string 
     */
    public function getReteCodigoCuenta()
    {
        return $this->reteCodigoCuenta;
    }

    /**
     * Set reteNombre
     *
     * @param string $reteNombre
     * @return Retefuente
     */
    public function setReteNombre($reteNombre)
    {
        $this->reteNombre = $reteNombre;

        return $this;
    }

    /**
     * Get reteNombre
     *
     * @return string 
     */
    public function getReteNombre()
    {
        return $this->reteNombre;
    }

    /**
     * Set reteBasePesos
     *
     * @param integer $reteBasePesos
     * @return Retefuente
     */
    public function setReteBasePesos($reteBasePesos)
    {
        $this->reteBasePesos = $reteBasePesos;

        return $this;
    }

    /**
     * Get reteBasePesos
     *
     * @return integer 
     */
    public function getReteBasePesos()
    {
        return $this->reteBasePesos;
    }

    /**
     * Set reteTarifa
     *
     * @param string $reteTarifa
     * @return Retefuente
     */
    public function setReteTarifa($reteTarifa)
    {
        $this->reteTarifa = $reteTarifa;

        return $this;
    }

    /**
     * Get reteTarifa
     *
     * @return string 
     */
    public function getReteTarifa()
    {
        return $this->reteTarifa;
    }

    /**
     * Set reteUvt
     *
     * @param integer $reteUvt
     * @return Retefuente
     */
    public function setReteUvt($reteUvt)
    {
        $this->reteUvt = $reteUvt;

        return $this;
    }

    /**
     * Get reteUvt
     *
     * @return integer 
     */
    public function getReteUvt()
    {
        return $this->reteUvt;
    }
}
