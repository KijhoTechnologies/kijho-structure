<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="ProductoRepository")
 */
class Producto {

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
//    private $prodCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_nombre", type="string", length=100, nullable=true)
     */
    private $name;
//    private $prodNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta", type="string", length=10, nullable=true)
     */
    private $prodColanta;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta2", type="string", length=10, nullable=true)
     */
    private $prodColanta2;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta3", type="string", length=10, nullable=true)
     */
    private $prodColanta3;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta4", type="string", length=10, nullable=true)
     */
    private $prodColanta4;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta5", type="string", length=10, nullable=true)
     */
    private $prodColanta5;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta6", type="string", length=10, nullable=true)
     */
    private $prodColanta6;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta7", type="string", length=10, nullable=true)
     */
    private $prodColanta7;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta8", type="string", length=10, nullable=true)
     */
    private $prodColanta8;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta9", type="string", length=10, nullable=true)
     */
    private $prodColanta9;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_colanta10", type="string", length=10, nullable=true)
     */
    private $prodColanta10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prod_FreeLance", type="boolean", nullable=false, options={"default"=0})
     */
    private $prodFreelance;

    /**
     * @var integer
     * 
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumn(name="prod_categoria", referencedColumnName="cat_codigo")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_comentario", type="string", length=100, nullable=true)
     */
    private $prodComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_foto_original", type="string", length=100, nullable=true)
     */
    private $prodFotoOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_foto_renombre", type="string", length=100, nullable=true)
     */
    private $prodFotoRenombre;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_costo_unit", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $prodCostoUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_costo_produccion", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $prodCostoProduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_venta_unit", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $prodVentaUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_bonificacion", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $prodBonificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_venta_credito", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $prodVentaCredito;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_venta_mayorista", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $prodVentaMayorista;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_venta_minima", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $prodVentaMinima;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_costo_promedio", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $prodCostoPromedio;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_por_desc", type="string", length=100, nullable=true)
     */
    private $prodPorDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras", type="string", length=50, nullable=false)
     */
    private $prodCodBarras;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras2", type="string", length=50, nullable=false)
     */
    private $prodCodBarras2;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras3", type="string", length=50, nullable=false)
     */
    private $prodCodBarras3;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras4", type="string", length=50, nullable=false)
     */
    private $prodCodBarras4;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras5", type="string", length=50, nullable=false)
     */
    private $prodCodBarras5;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras6", type="string", length=50, nullable=false)
     */
    private $prodCodBarras6;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras7", type="string", length=50, nullable=false)
     */
    private $prodCodBarras7;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras8", type="string", length=50, nullable=false)
     */
    private $prodCodBarras8;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras9", type="string", length=50, nullable=false)
     */
    private $prodCodBarras9;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_cod_barras10", type="string", length=50, nullable=false)
     */
    private $prodCodBarras10;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_iva", type="string", length=10, nullable=false)
     */
    private $prodIva;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_cant_stock", type="integer", nullable=false)
     */
    private $prodCantStock;

    /**
     * @var float
     *
     * @ORM\Column(name="prod_porcentaje_liquidacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $prodPorcentajeLiquidacion;

    /**
     * @var float
     *
     * @ORM\Column(name="prod_inventario", type="float", precision=10, scale=0, nullable=true)
     */
    private $prodInventario;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_promocion", type="string", nullable=true)
     */
    private $prodPromocion;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_minim_cantidad", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $prodMinimCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_nuevo_valor", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $prodNuevoValor;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="materia_prima", type="boolean", nullable=false, options={"default"=false})
     */
    private $rawMaterial;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="prod_venta", type="boolean", nullable=false, options={"default"=true})
     */
    private $productSale;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="prod_delete", type="boolean", nullable=false, options={"default"=false})
     */
    private $deleted;

    /**
     * @ORM\Column(type="decimal", scale=2, name="peso", nullable=false, options={"default"=0})
     */
    private $weight;

    /**
     * Representa el estado del producto, 1 para activo, 0 para inactivo
     * @var boolean
     * 
     * @ORM\Column(name="prod_negativo", type="boolean", nullable=false, options={"default"=false})
     */
    private $negativos;

    /**
     * @ORM\OneToMany(targetEntity="ProductoDerivado", mappedBy="product")
     */
    private $baseProducts = null;

    /**
     * @var integer
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @ORM\Column(name="prod_utilidad", type="integer", nullable=true)
     */
    private $prodUtilidad;

    /**
     *  Atributo para restaurant app
     * @var string
     *
     * @ORM\Column(name="prod_materprima", type="string", length=2, options={"default"="NO"}, nullable=true)
     */
    private $prodMateriaPrima;

    /**
     *  Atributo para restaurant app
     * @var string
     *
     * @ORM\Column(name="prod_esventa", type="string", length=2, options={"default"="NO"}, nullable=true)
     */
    private $prodEsventa;

    /**
     *  Atributo para restaurant app
     * @var string
     *
     * @ORM\Column(name="prod_unidmedida", type="string", length=100, nullable=true)
     */
    private $prodUnidmedida;

    /**
     *  Atributo para restaurant app
     * @var string
     *
     * @ORM\Column(name="prod_vender", type="string", length=2, options={"default"="NO"}, nullable=true)
     */
    private $prodVender;

    /**
     *  Atributo para restaurant app
     * @var string
     *
     * @ORM\Column(name="prod_ventaDomicilio", type="decimal", precision=10, scale=2, options={"default"="0.00"}, nullable=true)
     */
    private $prodVentaDomicilio;

    /**
     * Atributo para restaurant app
     * 
     * @var integer
     * @ORM\Column(name="prod_im_codigo", type="integer", nullable=true)
     */
    private $prodImCodigo;

    /**
     * Atributo para restaurant app
     * 
     * @var integer
     * @ORM\Column(name="prod_impConsumo", type="decimal", precision=10, scale=2, options={"default"="0.00"}, nullable=true)
     */
    private $prodImpConsumo;

    public function __construct() {
        $this->baseProducts = new ArrayCollection();
        $this->weight = 0;
    }

    public function addBaseProd($product) {
        $this->baseProducts[] = $product;
    }

    public function getBaseProducts() {
        return $this->baseProducts;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
//    public function getProdCodigo()
    public function getId() {
//        return $this->prodCodigo;
        return $this->id;
    }

    /**
     * Set prodNombre
     *
     * @param string $prodNombre
     * @return Producto
     */
//    public function setProdNombre($prodNombre)
    public function setName($name) {
//        $this->prodNombre = $prodNombre;
        $this->name = $name;

        return $this;
    }

    /**
     * Get prodNombre
     *
     * @return string 
     */
//    public function getProdNombre()
    public function getName() {
//        return $this->prodNombre;
        return $this->name;
    }

    /**
     * Set prodColanta
     *
     * @param string $prodColanta
     * @return Producto
     */
    public function setProdColanta($prodColanta) {
        $this->prodColanta = $prodColanta;

        return $this;
    }

    /**
     * Get prodColanta
     *
     * @return string 
     */
    public function getProdColanta() {
        return $this->prodColanta;
    }

    /**
     * Set prodColanta2
     *
     * @param string $prodColanta2
     * @return Producto
     */
    public function setProdColanta2($prodColanta2) {
        $this->prodColanta2 = $prodColanta2;

        return $this;
    }

    /**
     * Get prodColanta2
     *
     * @return string 
     */
    public function getProdColanta2() {
        return $this->prodColanta2;
    }

    /**
     * Set prodColanta3
     *
     * @param string $prodColanta3
     * @return Producto
     */
    public function setProdColanta3($prodColanta3) {
        $this->prodColanta3 = $prodColanta3;

        return $this;
    }

    /**
     * Get prodColanta3
     *
     * @return string 
     */
    public function getProdColanta3() {
        return $this->prodColanta3;
    }

    /**
     * Set prodColanta4
     *
     * @param string $prodColanta4
     * @return Producto
     */
    public function setProdColanta4($prodColanta4) {
        $this->prodColanta4 = $prodColanta4;

        return $this;
    }

    /**
     * Get prodColanta4
     *
     * @return string 
     */
    public function getProdColanta4() {
        return $this->prodColanta4;
    }

    /**
     * Set prodColanta5
     *
     * @param string $prodColanta5
     * @return Producto
     */
    public function setProdColanta5($prodColanta5) {
        $this->prodColanta5 = $prodColanta5;

        return $this;
    }

    /**
     * Get prodColanta5
     *
     * @return string 
     */
    public function getProdColanta5() {
        return $this->prodColanta5;
    }

    /**
     * Set prodColanta6
     *
     * @param string $prodColanta6
     * @return Producto
     */
    public function setProdColanta6($prodColanta6) {
        $this->prodColanta6 = $prodColanta6;

        return $this;
    }

    /**
     * Get prodColanta6
     *
     * @return string 
     */
    public function getProdColanta6() {
        return $this->prodColanta6;
    }

    /**
     * Set prodColanta7
     *
     * @param string $prodColanta7
     * @return Producto
     */
    public function setProdColanta7($prodColanta7) {
        $this->prodColanta7 = $prodColanta7;

        return $this;
    }

    /**
     * Get prodColanta7
     *
     * @return string 
     */
    public function getProdColanta7() {
        return $this->prodColanta7;
    }

    /**
     * Set prodColanta8
     *
     * @param string $prodColanta8
     * @return Producto
     */
    public function setProdColanta8($prodColanta8) {
        $this->prodColanta8 = $prodColanta8;

        return $this;
    }

    /**
     * Get prodColanta8
     *
     * @return string 
     */
    public function getProdColanta8() {
        return $this->prodColanta8;
    }

    /**
     * Set prodColanta9
     *
     * @param string $prodColanta9
     * @return Producto
     */
    public function setProdColanta9($prodColanta9) {
        $this->prodColanta9 = $prodColanta9;

        return $this;
    }

    /**
     * Get prodColanta9
     *
     * @return string 
     */
    public function getProdColanta9() {
        return $this->prodColanta9;
    }

    /**
     * Set prodColanta10
     *
     * @param string $prodColanta10
     * @return Producto
     */
    public function setProdColanta10($prodColanta10) {
        $this->prodColanta10 = $prodColanta10;

        return $this;
    }

    /**
     * Get prodColanta10
     *
     * @return string 
     */
    public function getProdColanta10() {
        return $this->prodColanta10;
    }

    /**
     * Set prodFreelance
     *
     * @param boolean $prodFreelance
     * @return Producto
     */
    public function setProdFreelance($prodFreelance) {
        $this->prodFreelance = $prodFreelance;

        return $this;
    }

    /**
     * Get prodFreelance
     *
     * @return boolean 
     */
    public function getProdFreelance() {
        return $this->prodFreelance;
    }

    /**
     * Set prodCategoria
     *
     * @param integer $prodCategoria
     * @return Producto
     */
    public function setCategory(Categoria $category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get prodCategoria
     *
     * @return integer 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set prodComentario
     *
     * @param string $prodComentario
     * @return Producto
     */
    public function setProdComentario($prodComentario) {
        $this->prodComentario = $prodComentario;

        return $this;
    }

    /**
     * Get prodComentario
     *
     * @return string 
     */
    public function getProdComentario() {
        return $this->prodComentario;
    }

    /**
     * Set prodFotoOriginal
     *
     * @param string $prodFotoOriginal
     * @return Producto
     */
    public function setProdFotoOriginal($prodFotoOriginal) {
        $this->prodFotoOriginal = $prodFotoOriginal;

        return $this;
    }

    /**
     * Get prodFotoOriginal
     *
     * @return string 
     */
    public function getProdFotoOriginal() {
        return $this->prodFotoOriginal;
    }

    /**
     * Set prodFotoRenombre
     *
     * @param string $prodFotoRenombre
     * @return Producto
     */
    public function setProdFotoRenombre($prodFotoRenombre) {
        $this->prodFotoRenombre = $prodFotoRenombre;

        return $this;
    }

    /**
     * Get prodFotoRenombre
     *
     * @return string 
     */
    public function getProdFotoRenombre() {
        return $this->prodFotoRenombre;
    }

    /**
     * Set prodCostoUnit
     *
     * @param string $prodCostoUnit
     * @return Producto
     */
    public function setProdCostoUnit($prodCostoUnit) {
        $this->prodCostoUnit = $prodCostoUnit;

        return $this;
    }

    /**
     * Get prodCostoUnit
     *
     * @return string 
     */
    public function getProdCostoUnit() {
        return $this->prodCostoUnit;
    }

    /**
     * Set prodCostoProduccion
     *
     * @param string $prodCostoProduccion
     * @return Producto
     */
    public function setProdCostoProduccion($prodCostoProduccion) {
        $this->prodCostoProduccion = $prodCostoProduccion;

        return $this;
    }

    /**
     * Get prodCostoProduccion
     *
     * @return string 
     */
    public function getProdCostoProduccion() {
        return $this->prodCostoProduccion;
    }

    /**
     * Set prodVentaUnit
     *
     * @param string $prodVentaUnit
     * @return Producto
     */
    public function setProdVentaUnit($prodVentaUnit) {
        $this->prodVentaUnit = $prodVentaUnit;

        return $this;
    }

    /**
     * Get prodVentaUnit
     *
     * @return string 
     */
    public function getProdVentaUnit() {
        return $this->prodVentaUnit;
    }

    /**
     * Set prodBonificacion
     *
     * @param string $prodBonificacion
     * @return Producto
     */
    public function setProdBonificacion($prodBonificacion) {
        $this->prodBonificacion = $prodBonificacion;

        return $this;
    }

    /**
     * Get prodBonificacion
     *
     * @return string 
     */
    public function getProdBonificacion() {
        return $this->prodBonificacion;
    }

    /**
     * Set prodVentaCredito
     *
     * @param string $prodVentaCredito
     * @return Producto
     */
    public function setProdVentaCredito($prodVentaCredito) {
        $this->prodVentaCredito = $prodVentaCredito;

        return $this;
    }

    /**
     * Get prodVentaCredito
     *
     * @return string 
     */
    public function getProdVentaCredito() {
        return $this->prodVentaCredito;
    }

    /**
     * Set prodVentaMayorista
     *
     * @param string $prodVentaMayorista
     * @return Producto
     */
    public function setProdVentaMayorista($prodVentaMayorista) {
        $this->prodVentaMayorista = $prodVentaMayorista;

        return $this;
    }

    /**
     * Get prodVentaMayorista
     *
     * @return string 
     */
    public function getProdVentaMayorista() {
        return $this->prodVentaMayorista;
    }

    /**
     * Set prodVentaMinima
     *
     * @param string $prodVentaMinima
     * @return Producto
     */
    public function setProdVentaMinima($prodVentaMinima) {
        $this->prodVentaMinima = $prodVentaMinima;

        return $this;
    }

    /**
     * Get prodVentaMinima
     *
     * @return string 
     */
    public function getProdVentaMinima() {
        return $this->prodVentaMinima;
    }

    /**
     * Set prodCostoPromedio
     *
     * @param string $prodCostoPromedio
     * @return Producto
     */
    public function setProdCostoPromedio($prodCostoPromedio) {
        $this->prodCostoPromedio = $prodCostoPromedio;

        return $this;
    }

    /**
     * Get prodCostoPromedio
     *
     * @return string 
     */
    public function getProdCostoPromedio() {
        return $this->prodCostoPromedio;
    }

    /**
     * Set prodPorDesc
     *
     * @param string $prodPorDesc
     * @return Producto
     */
    public function setProdPorDesc($prodPorDesc) {
        $this->prodPorDesc = $prodPorDesc;

        return $this;
    }

    /**
     * Get prodPorDesc
     *
     * @return string 
     */
    public function getProdPorDesc() {
        return $this->prodPorDesc;
    }

    /**
     * Set prodCodBarras
     *
     * @param string $prodCodBarras
     * @return Producto
     */
    public function setProdCodBarras($prodCodBarras) {
        $this->prodCodBarras = $prodCodBarras;

        return $this;
    }

    /**
     * Get prodCodBarras
     *
     * @return string 
     */
    public function getProdCodBarras() {
        return $this->prodCodBarras;
    }

    /**
     * Set prodCodBarras2
     *
     * @param string $prodCodBarras2
     * @return Producto
     */
    public function setProdCodBarras2($prodCodBarras2) {
        $this->prodCodBarras2 = $prodCodBarras2;

        return $this;
    }

    /**
     * Get prodCodBarras2
     *
     * @return string 
     */
    public function getProdCodBarras2() {
        return $this->prodCodBarras2;
    }

    /**
     * Set prodCodBarras3
     *
     * @param string $prodCodBarras3
     * @return Producto
     */
    public function setProdCodBarras3($prodCodBarras3) {
        $this->prodCodBarras3 = $prodCodBarras3;

        return $this;
    }

    /**
     * Get prodCodBarras3
     *
     * @return string 
     */
    public function getProdCodBarras3() {
        return $this->prodCodBarras3;
    }

    /**
     * Set prodCodBarras4
     *
     * @param string $prodCodBarras4
     * @return Producto
     */
    public function setProdCodBarras4($prodCodBarras4) {
        $this->prodCodBarras4 = $prodCodBarras4;

        return $this;
    }

    /**
     * Get prodCodBarras4
     *
     * @return string 
     */
    public function getProdCodBarras4() {
        return $this->prodCodBarras4;
    }

    /**
     * Set prodCodBarras5
     *
     * @param string $prodCodBarras5
     * @return Producto
     */
    public function setProdCodBarras5($prodCodBarras5) {
        $this->prodCodBarras5 = $prodCodBarras5;

        return $this;
    }

    /**
     * Get prodCodBarras5
     *
     * @return string 
     */
    public function getProdCodBarras5() {
        return $this->prodCodBarras5;
    }

    /**
     * Set prodCodBarras6
     *
     * @param string $prodCodBarras6
     * @return Producto
     */
    public function setProdCodBarras6($prodCodBarras6) {
        $this->prodCodBarras6 = $prodCodBarras6;

        return $this;
    }

    /**
     * Get prodCodBarras6
     *
     * @return string 
     */
    public function getProdCodBarras6() {
        return $this->prodCodBarras6;
    }

    /**
     * Set prodCodBarras7
     *
     * @param string $prodCodBarras7
     * @return Producto
     */
    public function setProdCodBarras7($prodCodBarras7) {
        $this->prodCodBarras7 = $prodCodBarras7;

        return $this;
    }

    /**
     * Get prodCodBarras7
     *
     * @return string 
     */
    public function getProdCodBarras7() {
        return $this->prodCodBarras7;
    }

    /**
     * Set prodCodBarras8
     *
     * @param string $prodCodBarras8
     * @return Producto
     */
    public function setProdCodBarras8($prodCodBarras8) {
        $this->prodCodBarras8 = $prodCodBarras8;

        return $this;
    }

    /**
     * Get prodCodBarras8
     *
     * @return string 
     */
    public function getProdCodBarras8() {
        return $this->prodCodBarras8;
    }

    /**
     * Set prodCodBarras9
     *
     * @param string $prodCodBarras9
     * @return Producto
     */
    public function setProdCodBarras9($prodCodBarras9) {
        $this->prodCodBarras9 = $prodCodBarras9;

        return $this;
    }

    /**
     * Get prodCodBarras9
     *
     * @return string 
     */
    public function getProdCodBarras9() {
        return $this->prodCodBarras9;
    }

    /**
     * Set prodCodBarras10
     *
     * @param string $prodCodBarras10
     * @return Producto
     */
    public function setProdCodBarras10($prodCodBarras10) {
        $this->prodCodBarras10 = $prodCodBarras10;

        return $this;
    }

    /**
     * Get prodCodBarras10
     *
     * @return string 
     */
    public function getProdCodBarras10() {
        return $this->prodCodBarras10;
    }

    /**
     * Set prodIva
     *
     * @param string $prodIva
     * @return Producto
     */
    public function setProdIva($prodIva) {
        $this->prodIva = $prodIva;

        return $this;
    }

    /**
     * Get prodIva
     *
     * @return string 
     */
    public function getProdIva() {
        return $this->prodIva;
    }

    /**
     * Set prodCantStock
     *
     * @param integer $prodCantStock
     * @return Producto
     */
    public function setProdCantStock($prodCantStock) {
        $this->prodCantStock = $prodCantStock;

        return $this;
    }

    /**
     * Get prodCantStock
     *
     * @return integer 
     */
    public function getProdCantStock() {
        return $this->prodCantStock;
    }

    /**
     * Set prodPorcentajeLiquidacion
     *
     * @param float $prodPorcentajeLiquidacion
     * @return Producto
     */
    public function setProdPorcentajeLiquidacion($prodPorcentajeLiquidacion) {
        $this->prodPorcentajeLiquidacion = $prodPorcentajeLiquidacion;

        return $this;
    }

    /**
     * Get prodPorcentajeLiquidacion
     *
     * @return float 
     */
    public function getProdPorcentajeLiquidacion() {
        return $this->prodPorcentajeLiquidacion;
    }

    /**
     * Set prodInventario
     *
     * @param float $prodInventario
     * @return Producto
     */
    public function setProdInventario($prodInventario) {
        $this->prodInventario = $prodInventario;

        return $this;
    }

    /**
     * Get prodInventario
     *
     * @return float 
     */
    public function getProdInventario() {
        return $this->prodInventario;
    }

    /**
     * Set prodPromocion
     *
     * @param string $prodPromocion
     * @return Producto
     */
    public function setProdPromocion($prodPromocion) {
        $this->prodPromocion = $prodPromocion;

        return $this;
    }

    /**
     * Get prodPromocion
     *
     * @return string 
     */
    public function getProdPromocion() {
        return $this->prodPromocion;
    }

    /**
     * Set prodMinimCantidad
     *
     * @param string $prodMinimCantidad
     * @return Producto
     */
    public function setProdMinimCantidad($prodMinimCantidad) {
        $this->prodMinimCantidad = $prodMinimCantidad;

        return $this;
    }

    /**
     * Get prodMinimCantidad
     *
     * @return string 
     */
    public function getProdMinimCantidad() {
        return $this->prodMinimCantidad;
    }

    /**
     * Set prodNuevoValor
     *
     * @param string $prodNuevoValor
     * @return Producto
     */
    public function setProdNuevoValor($prodNuevoValor) {
        $this->prodNuevoValor = $prodNuevoValor;

        return $this;
    }

    /**
     * Get prodNuevoValor
     *
     * @return string 
     */
    public function getProdNuevoValor() {
        return $this->prodNuevoValor;
    }

    public function setRawMaterial($rawMaterial) {
        $this->rawMaterial = $rawMaterial;
        return $this;
    }

    public function getRawMaterial() {
        return $this->rawMaterial;
    }

    public function setProductSale($productSale) {
        $this->productSale = $productSale;
        return $this;
    }

    public function getProductSale() {
        return $this->productSale;
    }

    /**
     * Set deleted
     * 
     * @param boolean $delete
     * @return Producto
     */
    public function setDeleted($delete) {
        $this->deleted = $delete;

        return $this;
    }

    /**
     * Get deleted
     * 
     * @return boolean
     */
    public function getDeleted() {
        return $this->deleted;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function getWeight() {
        return $this->weight;
    }

    /**
     * Set negativos
     * 
     * @param boolean $delete
     * @return Producto
     */
    public function setFacNegativos($negativos) {
        $this->negativos = $negativos;

        return $this;
    }

    /**
     * Get negativos
     * 
     * @return boolean
     */
    public function getFacNegativos() {
        return $this->negativos;
    }

    function getNegativos() {
        return $this->negativos;
    }

    function getProdUtilidad() {
        return $this->prodUtilidad;
    }

    function setNegativos($negativos) {
        $this->negativos = $negativos;
    }

    function setProdUtilidad($prodUtilidad) {
        $this->prodUtilidad = $prodUtilidad;
    }

    function getProdMateriaPrima() {
        return $this->prodMateriaPrima;
    }

    function getProdEsventa() {
        return $this->prodEsventa;
    }

    function setProdMateriaPrima($prodMateriaPrima) {
        $this->prodMateriaPrima = $prodMateriaPrima;
    }

    function setProdEsventa($prodEsventa) {
        $this->prodEsventa = $prodEsventa;
    }

    function getProdUnidmedida() {
        return $this->prodUnidmedida;
    }

    function getProdVender() {
        return $this->prodVender;
    }

    function getProdVentaDomicilio() {
        return $this->prodVentaDomicilio;
    }

    function getProdImCodigo() {
        return $this->prodImCodigo;
    }

    function getProdImpConsumo() {
        return $this->prodImpConsumo;
    }

    function setProdUnidmedida($prodUnidmedida) {
        $this->prodUnidmedida = $prodUnidmedida;
    }

    function setProdVender($prodVender) {
        $this->prodVender = $prodVender;
    }

    function setProdVentaDomicilio($prodVentaDomicilio) {
        $this->prodVentaDomicilio = $prodVentaDomicilio;
    }

    function setProdImCodigo($prodImCodigo) {
        $this->prodImCodigo = $prodImCodigo;
    }

    function setProdImpConsumo($prodImpConsumo) {
        $this->prodImpConsumo = $prodImpConsumo;
    }

}
