<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria {

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_nombre", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_descripcion", type="string", length=60, nullable=true)
     */
    private $catDescripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="cat_descuento", type="float", precision=10, scale=0, nullable=false)
     */
    private $catDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_estadoDesc", type="string", nullable=false)
     */
    private $catEstadodesc;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_precio_en_venta", type="string", nullable=false)
     */
    private $catPrecioEnVenta;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="cat_delete", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * Get catCodigo
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set catNombre
     *
     * @param string $catNombre
     * @return Categoria
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get catNombre
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set catDescripcion
     *
     * @param string $catDescripcion
     * @return Categoria
     */
    public function setCatDescripcion($catDescripcion) {
        $this->catDescripcion = $catDescripcion;

        return $this;
    }

    /**
     * Get catDescripcion
     *
     * @return string 
     */
    public function getCatDescripcion() {
        return $this->catDescripcion;
    }

    /**
     * Set catDescuento
     *
     * @param float $catDescuento
     * @return Categoria
     */
    public function setCatDescuento($catDescuento) {
        $this->catDescuento = $catDescuento;

        return $this;
    }

    /**
     * Get catDescuento
     *
     * @return float 
     */
    public function getCatDescuento() {
        return $this->catDescuento;
    }

    /**
     * Set catEstadodesc
     *
     * @param string $catEstadodesc
     * @return Categoria
     */
    public function setCatEstadodesc($catEstadodesc) {
        $this->catEstadodesc = $catEstadodesc;

        return $this;
    }

    /**
     * Get catEstadodesc
     *
     * @return string 
     */
    public function getCatEstadodesc() {
        return $this->catEstadodesc;
    }

    /**
     * Set catPrecioEnVenta
     *
     * @param string $catPrecioEnVenta
     * @return Categoria
     */
    public function setCatPrecioEnVenta($catPrecioEnVenta) {
        $this->catPrecioEnVenta = $catPrecioEnVenta;

        return $this;
    }

    /**
     * Get catPrecioEnVenta
     *
     * @return string 
     */
    public function getCatPrecioEnVenta() {
        return $this->catPrecioEnVenta;
    }
    
      /**
     * Set deleted
     * 
     * @param boolean $delete
     * @return Categoria
     */
    public function setDeleted($delete){
        $this->deleted = $delete;
        
        return $this;
    }
    
    /**
     * Get deleted
     * 
     * @return boolean
     */
    public function getDeleted(){
        return $this->deleted;
    }
    

}
