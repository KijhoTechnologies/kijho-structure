<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoModificador
 *
 * @ORM\Table(name="producto_modificador")
 * @ORM\Entity
 */
class ProductoModificador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prdmod_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prdmodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prdmod_producto", type="integer", nullable=false)
     */
    private $prdmodProducto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="prdmod_categoria", type="integer", nullable=false)
     */
    private $prdmodCategoria = '0';



    /**
     * Get prdmodCodigo
     *
     * @return integer
     */
    public function getPrdmodCodigo()
    {
        return $this->prdmodCodigo;
    }

    /**
     * Set prdmodProducto
     *
     * @param integer $prdmodProducto
     *
     * @return ProductoModificador
     */
    public function setPrdmodProducto($prdmodProducto)
    {
        $this->prdmodProducto = $prdmodProducto;

        return $this;
    }

    /**
     * Get prdmodProducto
     *
     * @return integer
     */
    public function getPrdmodProducto()
    {
        return $this->prdmodProducto;
    }

    /**
     * Set prdmodCategoria
     *
     * @param integer $prdmodCategoria
     *
     * @return ProductoModificador
     */
    public function setPrdmodCategoria($prdmodCategoria)
    {
        $this->prdmodCategoria = $prdmodCategoria;

        return $this;
    }

    /**
     * Get prdmodCategoria
     *
     * @return integer
     */
    public function getPrdmodCategoria()
    {
        return $this->prdmodCategoria;
    }
}
