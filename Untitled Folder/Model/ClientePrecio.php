<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * ClientePrecio
 *
 * @ORM\Table(name="cliente_precio")
 * @ORM\Entity
 */
class ClientePrecio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clpr_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clprCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer")
     */
    private $cliCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer")
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="clpr_precio", type="integer")
     */
    private $clprPrecio;


    /**
     * Get clprCodigo
     *
     * @return integer 
     */
    public function getClprCodigo()
    {
        return $this->clprCodigo;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return ClientePrecio
     */
    public function setCliCodigo($cliCodigo)
    {
        $this->cliCodigo = $cliCodigo;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo()
    {
        return $this->cliCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return ClientePrecio
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
     * Set clprPrecio
     *
     * @param integer $clprPrecio
     * @return ClientePrecio
     */
    public function setClprPrecio($clprPrecio)
    {
        $this->clprPrecio = $clprPrecio;

        return $this;
    }

    /**
     * Get clprPrecio
     *
     * @return integer 
     */
    public function getClprPrecio()
    {
        return $this->clprPrecio;
    }
}
