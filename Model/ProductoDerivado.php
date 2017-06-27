<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Juan Ocampo <jocampo@kijho.com>
 * ProductoDerivado
 * Esta entidad representa la relación  entre productos base o materias primas,
 * y los productos que derivan de estas.
 *
 * @ORM\Table(name="producto_derivado")
 * @ORM\Entity
 */
class ProductoDerivado {
    /**
     * @var integer
     * 
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="baseProducts")
     * @ORM\JoinColumn(name="producto", referencedColumnName="prod_codigo", nullable=false)
     */
    private $product;
    
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="materia_prima", referencedColumnName="prod_codigo", nullable=false)
     */
    private $rawProduct;
    
    /**
     * @var integer
     * @ORM\Column(name="cantidad", nullable=false)
     */
    private $amount;
    
    public function getId(){
        return $this->id;
    }
    
    public function setProduct(Producto $product){
        $this->product = $product;
        return $this;
    }
    
    public function getProduct(){
        return $this->product;
    }
    
    public function setRawProduct(Producto $rawProduct){
        $this->rawProduct = $rawProduct;
        return $this;
    }
    
    public function getRawProduct(){
        return $this->rawProduct;
    }
    
    public function setAmount($amount){
        $this->amount = $amount;
    }
    
    public function getAmount(){
        return $this->amount;
    }
    
}
