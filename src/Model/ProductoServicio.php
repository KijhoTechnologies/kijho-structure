<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoServicio
 *
 * @ORM\Table(name="producto_servicio")
 * @ORM\Entity
 */
class ProductoServicio {

    /**
     * @var integer
     *
     * @ORM\Column(name="prodserv_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodservCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="prodserv_nombre", type="string", length=60, nullable=false)
     */
    private $prodservNombre;

    /**
     * @var float
     *
     * @ORM\Column(name="prodserv_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $prodservPorcentaje;

    /**
     * @var string
     *
     * @ORM\Column(name="prodserv_categoria", type="string", nullable=false)
     */
    private $prodservCategoria;

    /**
     * @var integer
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @ORM\Column(name="prodserv_precio_compra", type="integer", nullable=true)
     */
    private $prodservPrecioCompra;

    /**
     * @var integer
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @ORM\Column(name="prodserv_precio_venta", type="integer", nullable=true)
     */
    private $prodservPrecioVenta;

    /**
     * @var integer
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @ORM\Column(name="prodserv_utilidad", type="integer", nullable=true)
     */
    private $prodservUtilidad;

    /**
     * Get prodservCodigo
     *
     * @return integer 
     */
    public function getProdservCodigo() {
        return $this->prodservCodigo;
    }

    /**
     * Set prodservNombre
     *
     * @param string $prodservNombre
     * @return ProductoServicio
     */
    public function setProdservNombre($prodservNombre) {
        $this->prodservNombre = $prodservNombre;

        return $this;
    }

    /**
     * Get prodservNombre
     *
     * @return string 
     */
    public function getProdservNombre() {
        return $this->prodservNombre;
    }

    /**
     * Set prodservPorcentaje
     *
     * @param float $prodservPorcentaje
     * @return ProductoServicio
     */
    public function setProdservPorcentaje($prodservPorcentaje) {
        $this->prodservPorcentaje = $prodservPorcentaje;

        return $this;
    }

    /**
     * Get prodservPorcentaje
     *
     * @return float 
     */
    public function getProdservPorcentaje() {
        return $this->prodservPorcentaje;
    }

    /**
     * Set prodservCategoria
     *
     * @param string $prodservCategoria
     * @return ProductoServicio
     */
    public function setProdservCategoria($prodservCategoria) {
        $this->prodservCategoria = $prodservCategoria;

        return $this;
    }

    /**
     * Get prodservCategoria
     *
     * @return string 
     */
    public function getProdservCategoria() {
        return $this->prodservCategoria;
    }

    function getProdservPrecioCompra() {
        return $this->prodservPrecioCompra;
    }

    function getProdservPrecioVenta() {
        return $this->prodservPrecioVenta;
    }

    function getProdservUtilidad() {
        return $this->prodservUtilidad;
    }

    function setProdservPrecioCompra($prodservPrecioCompra) {
        $this->prodservPrecioCompra = $prodservPrecioCompra;
    }

    function setProdservPrecioVenta($prodservPrecioVenta) {
        $this->prodservPrecioVenta = $prodservPrecioVenta;
    }

    function setProdservUtilidad($prodservUtilidad) {
        $this->prodservUtilidad = $prodservUtilidad;
    }

}
