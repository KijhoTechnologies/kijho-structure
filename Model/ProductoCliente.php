<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;


/**
 * Producto cliente
 *
 * @ORM\Table(name="producto_cliente")
 * @ORM\Entity
 */
class ProductoCliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prodcli_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
   
    /**
     * Representa el estado del producto, si esta activo 0 o no 1 para el cliente
     * @var boolean
     *
     * @ORM\Column(name="procli_status", type="boolean", nullable=false)
     */
    private $state;

   /**
    * Representa el codigo del cliente
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="procli_cliente", referencedColumnName="cli_codigo")
     */
    private $cliCodigo;
    
      /**
       * Representa el codigo del producto
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="procli_producto", referencedColumnName="prod_codigo", nullable=true)
     */
    private $prodCodigo;
    
    function getId() {
        return $this->id;
    }

    function getState() {
        return $this->state;
    }

    function getCliCodigo() {
        return $this->cliCodigo;
    }

    function getProdCodigo() {
        return $this->prodCodigo;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setCliCodigo($cliCodigo) {
        $this->cliCodigo = $cliCodigo;
    }

    function setProdCodigo($prodCodigo) {
        $this->prodCodigo = $prodCodigo;
    }


    
}
