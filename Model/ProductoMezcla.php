<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoMezcla
 *
 * @ORM\Table(name="producto_mezcla")
 * @ORM\Entity
 */
class ProductoMezcla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prmez_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prmezCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prmez_producto", type="integer", nullable=false)
     */
    private $prmezProducto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="prmez_prodprimario", type="integer", nullable=false)
     */
    private $prmezProdprimario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prmez_cantidad", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $prmezCantidad = '0.000';



    /**
     * Get prmezCodigo
     *
     * @return integer
     */
    public function getPrmezCodigo()
    {
        return $this->prmezCodigo;
    }

    /**
     * Set prmezProducto
     *
     * @param integer $prmezProducto
     *
     * @return ProductoMezcla
     */
    public function setPrmezProducto($prmezProducto)
    {
        $this->prmezProducto = $prmezProducto;

        return $this;
    }

    /**
     * Get prmezProducto
     *
     * @return integer
     */
    public function getPrmezProducto()
    {
        return $this->prmezProducto;
    }

    /**
     * Set prmezProdprimario
     *
     * @param integer $prmezProdprimario
     *
     * @return ProductoMezcla
     */
    public function setPrmezProdprimario($prmezProdprimario)
    {
        $this->prmezProdprimario = $prmezProdprimario;

        return $this;
    }

    /**
     * Get prmezProdprimario
     *
     * @return integer
     */
    public function getPrmezProdprimario()
    {
        return $this->prmezProdprimario;
    }

    /**
     * Set prmezCantidad
     *
     * @param string $prmezCantidad
     *
     * @return ProductoMezcla
     */
    public function setPrmezCantidad($prmezCantidad)
    {
        $this->prmezCantidad = $prmezCantidad;

        return $this;
    }

    /**
     * Get prmezCantidad
     *
     * @return string
     */
    public function getPrmezCantidad()
    {
        return $this->prmezCantidad;
    }
}
