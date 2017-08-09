<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Vendedor
 *
 * @ORM\Table(name="vendedor")
 * @ORM\Entity(repositoryClass="VendedorRepository")
 */
class Vendedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vendedor", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $idVendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_nombre", type="string", length=100, nullable=true)
     */
    private $vendNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_apellido", type="string", length=100, nullable=true)
     */
    private $vendApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_identificacion", type="string", length=100, nullable=true)
     */
    private $vendIdentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_celular", type="string", length=100, nullable=true)
     */
    private $vendCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_direccion", type="string", length=500, nullable=true)
     */
    private $vendDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_codigo", type="string", length=100, nullable=true)
     */
    private $vendCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="vend_estado", type="string", nullable=true)
     */
    private $vendEstado;


    /**
     * Get idVendedor
     *
     * @return integer 
     */
    public function getIdVendedor()
    {
        return $this->idVendedor;
    }

    /**
     * Set vendNombre
     *
     * @param string $vendNombre
     * @return Vendedor
     */
    public function setVendNombre($vendNombre)
    {
        $this->vendNombre = $vendNombre;

        return $this;
    }

    /**
     * Get vendNombre
     *
     * @return string 
     */
    public function getVendNombre()
    {
        return $this->vendNombre;
    }

    /**
     * Set vendApellido
     *
     * @param string $vendApellido
     * @return Vendedor
     */
    public function setVendApellido($vendApellido)
    {
        $this->vendApellido = $vendApellido;

        return $this;
    }

    /**
     * Get vendApellido
     *
     * @return string 
     */
    public function getVendApellido()
    {
        return $this->vendApellido;
    }

    /**
     * Set vendIdentificacion
     *
     * @param string $vendIdentificacion
     * @return Vendedor
     */
    public function setVendIdentificacion($vendIdentificacion)
    {
        $this->vendIdentificacion = $vendIdentificacion;

        return $this;
    }

    /**
     * Get vendIdentificacion
     *
     * @return string 
     */
    public function getVendIdentificacion()
    {
        return $this->vendIdentificacion;
    }

    /**
     * Set vendCelular
     *
     * @param string $vendCelular
     * @return Vendedor
     */
    public function setVendCelular($vendCelular)
    {
        $this->vendCelular = $vendCelular;

        return $this;
    }

    /**
     * Get vendCelular
     *
     * @return string 
     */
    public function getVendCelular()
    {
        return $this->vendCelular;
    }

    /**
     * Set vendDireccion
     *
     * @param string $vendDireccion
     * @return Vendedor
     */
    public function setVendDireccion($vendDireccion)
    {
        $this->vendDireccion = $vendDireccion;

        return $this;
    }

    /**
     * Get vendDireccion
     *
     * @return string 
     */
    public function getVendDireccion()
    {
        return $this->vendDireccion;
    }

    /**
     * Set vendCodigo
     *
     * @param string $vendCodigo
     * @return Vendedor
     */
    public function setVendCodigo($vendCodigo)
    {
        $this->vendCodigo = $vendCodigo;

        return $this;
    }

    /**
     * Get vendCodigo
     *
     * @return string 
     */
    public function getVendCodigo()
    {
        return $this->vendCodigo;
    }

    /**
     * Set vendEstado
     *
     * @param string $vendEstado
     * @return Vendedor
     */
    public function setVendEstado($vendEstado)
    {
        $this->vendEstado = $vendEstado;

        return $this;
    }

    /**
     * Get vendEstado
     *
     * @return string 
     */
    public function getVendEstado()
    {
        return $this->vendEstado;
    }
    
    public function getName(){
        return $this->vendNombre.' '.$this->vendApellido;
    }
}
