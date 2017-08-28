<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * DetalleDevolucionCliente
 *
 * @ORM\Table(name="detalle_devolucion_cliente")
 * @ORM\Entity(repositoryClass="DetalleDevolucionClienteRepository")
 */
class DetalleDevolucionCliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ddecl_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ddeclCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="decl_codigo", type="integer", nullable=false)
     */
    private $declCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="ddecl_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $ddeclCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ddecl_costo_unit", type="integer", nullable=true)
     */
    private $ddeclCostoUnit;

    /**
     * @var integer
     *
     * @ORM\Column(name="ddecl_venta_unit", type="integer", nullable=true)
     */
    private $ddeclVentaUnit;

    /**
     * @var integer
     *
     * @ORM\Column(name="ddecl_total", type="integer", nullable=true)
     */
    private $ddeclTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ddecl_fecha", type="date", nullable=false)
     */
    private $ddeclFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ddecl_hora", type="string", length=100, nullable=false)
     */
    private $ddeclHora;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="ddecl_cod_barras", type="string", length=50, nullable=true)
     */
    private $ddeclCodBarras;

    
    
    /**
     * Get ddeclCodigo
     *
     * @return integer 
     */
    public function getDdeclCodigo()
    {
        return $this->ddeclCodigo;
    }

    /**
     * Set declCodigo
     *
     * @param integer $declCodigo
     * @return DetalleDevolucionCliente
     */
    public function setDeclCodigo($declCodigo)
    {
        $this->declCodigo = $declCodigo;

        return $this;
    }

    /**
     * Get declCodigo
     *
     * @return integer 
     */
    public function getDeclCodigo()
    {
        return $this->declCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return DetalleDevolucionCliente
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
     * Set ddeclCantidad
     *
     * @param float $ddeclCantidad
     * @return DetalleDevolucionCliente
     */
    public function setDdeclCantidad($ddeclCantidad)
    {
        $this->ddeclCantidad = $ddeclCantidad;

        return $this;
    }

    /**
     * Get ddeclCantidad
     *
     * @return float 
     */
    public function getDdeclCantidad()
    {
        return $this->ddeclCantidad;
    }

    /**
     * Set ddeclCostoUnit
     *
     * @param integer $ddeclCostoUnit
     * @return DetalleDevolucionCliente
     */
    public function setDdeclCostoUnit($ddeclCostoUnit)
    {
        $this->ddeclCostoUnit = $ddeclCostoUnit;

        return $this;
    }

    /**
     * Get ddeclCostoUnit
     *
     * @return integer 
     */
    public function getDdeclCostoUnit()
    {
        return $this->ddeclCostoUnit;
    }

    /**
     * Set ddeclVentaUnit
     *
     * @param integer $ddeclVentaUnit
     * @return DetalleDevolucionCliente
     */
    public function setDdeclVentaUnit($ddeclVentaUnit)
    {
        $this->ddeclVentaUnit = $ddeclVentaUnit;

        return $this;
    }

    /**
     * Get ddeclVentaUnit
     *
     * @return integer 
     */
    public function getDdeclVentaUnit()
    {
        return $this->ddeclVentaUnit;
    }

    /**
     * Set ddeclTotal
     *
     * @param integer $ddeclTotal
     * @return DetalleDevolucionCliente
     */
    public function setDdeclTotal($ddeclTotal)
    {
        $this->ddeclTotal = $ddeclTotal;

        return $this;
    }

    /**
     * Get ddeclTotal
     *
     * @return integer 
     */
    public function getDdeclTotal()
    {
        return $this->ddeclTotal;
    }

    /**
     * Set ddeclFecha
     *
     * @param \DateTime $ddeclFecha
     * @return DetalleDevolucionCliente
     */
    public function setDdeclFecha($ddeclFecha)
    {
        $this->ddeclFecha = $ddeclFecha;

        return $this;
    }

    /**
     * Get ddeclFecha
     *
     * @return \DateTime 
     */
    public function getDdeclFecha()
    {
        return $this->ddeclFecha;
    }

    /**
     * Set ddeclHora
     *
     * @param string $ddeclHora
     * @return DetalleDevolucionCliente
     */
    public function setDdeclHora($ddeclHora)
    {
        $this->ddeclHora = $ddeclHora;

        return $this;
    }

    /**
     * Get ddeclHora
     *
     * @return string 
     */
    public function getDdeclHora()
    {
        return $this->ddeclHora;
    }
}
