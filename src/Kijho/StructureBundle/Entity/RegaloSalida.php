<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * RegaloSalida
 *
 * @ORM\Table(name="regalo_salida")
 * @ORM\Entity(repositoryClass="RegaloSalidaRepository")
 */
class RegaloSalida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resa_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="ClienteRegalo")
     * @ORM\JoinColumn(name="clre_codigo", referencedColumnName="clre_codigo", nullable=false)
     */
    private $clienteRegalo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="prod_codigo", referencedColumnName="prod_codigo", nullable=false)
     */
    private $product;

    /**
     * @var float
     *
     * @ORM\Column(name="resa_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $resaCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="resa_costo_unit", type="integer", nullable=false)
     */
    private $resaCostoUnit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resa_fecha", type="date", nullable=false)
     */
    private $resaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="resa_hora", type="string", length=100, nullable=false)
     */
    private $resaHora;


    /**
     * Get resaCodigo
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clreCodigo
     *
     * @param integer $clreCodigo
     * @return RegaloSalida
     */
    public function setClienteRegalo(ClienteRegalo $clienteRegalo)
    {
        $this->clienteRegalo = $clienteRegalo;

        return $this;
    }

    /**
     * Get clreCodigo
     *
     * @return integer 
     */
    public function getClienteRegalo()
    {
        return $this->clienteRegalo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return RegaloSalida
     */
    public function setProduct(Producto $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get prodCodigo
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set resaCantidad
     *
     * @param float $resaCantidad
     * @return RegaloSalida
     */
    public function setResaCantidad($resaCantidad)
    {
        $this->resaCantidad = $resaCantidad;

        return $this;
    }

    /**
     * Get resaCantidad
     *
     * @return float 
     */
    public function getResaCantidad()
    {
        return $this->resaCantidad;
    }

    /**
     * Set resaCostoUnit
     *
     * @param integer $resaCostoUnit
     * @return RegaloSalida
     */
    public function setResaCostoUnit($resaCostoUnit)
    {
        $this->resaCostoUnit = $resaCostoUnit;

        return $this;
    }

    /**
     * Get resaCostoUnit
     *
     * @return integer 
     */
    public function getResaCostoUnit()
    {
        return $this->resaCostoUnit;
    }

    /**
     * Set resaFecha
     *
     * @param \DateTime $resaFecha
     * @return RegaloSalida
     */
    public function setResaFecha(DateTime $resaFecha)
    {
        $this->resaFecha = $resaFecha;

        return $this;
    }

    /**
     * Get resaFecha
     *
     * @return \DateTime 
     */
    public function getResaFecha()
    {
        return $this->resaFecha;
    }

    /**
     * Set resaHora
     *
     * @param string $resaHora
     * @return RegaloSalida
     */
    public function setResaHora($resaHora)
    {
        $this->resaHora = $resaHora;

        return $this;
    }

    /**
     * Get resaHora
     *
     * @return string 
     */
    public function getResaHora()
    {
        return $this->resaHora;
    }
}
