<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajero
 *
 * @ORM\Table(name="mensajero")
 * @ORM\Entity
 */
class Mensajero
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mens_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mensId;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_nombre", type="string", length=100, nullable=true)
     */
    private $mensNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_apellido", type="string", length=100, nullable=true)
     */
    private $mensApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_identificacion", type="string", length=100, nullable=true)
     */
    private $mensIdentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_celular", type="string", length=100, nullable=true)
     */
    private $mensCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_direccion", type="string", length=500, nullable=true)
     */
    private $mensDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_codigo", type="string", length=100, nullable=true)
     */
    private $mensCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="mens_estado", type="string", length=2, nullable=true)
     */
    private $mensEstado;



    /**
     * Get mensId
     *
     * @return integer
     */
    public function getMensId()
    {
        return $this->mensId;
    }

    /**
     * Set mensNombre
     *
     * @param string $mensNombre
     *
     * @return Mensajero
     */
    public function setMensNombre($mensNombre)
    {
        $this->mensNombre = $mensNombre;

        return $this;
    }

    /**
     * Get mensNombre
     *
     * @return string
     */
    public function getMensNombre()
    {
        return $this->mensNombre;
    }

    /**
     * Set mensApellido
     *
     * @param string $mensApellido
     *
     * @return Mensajero
     */
    public function setMensApellido($mensApellido)
    {
        $this->mensApellido = $mensApellido;

        return $this;
    }

    /**
     * Get mensApellido
     *
     * @return string
     */
    public function getMensApellido()
    {
        return $this->mensApellido;
    }

    /**
     * Set mensIdentificacion
     *
     * @param string $mensIdentificacion
     *
     * @return Mensajero
     */
    public function setMensIdentificacion($mensIdentificacion)
    {
        $this->mensIdentificacion = $mensIdentificacion;

        return $this;
    }

    /**
     * Get mensIdentificacion
     *
     * @return string
     */
    public function getMensIdentificacion()
    {
        return $this->mensIdentificacion;
    }

    /**
     * Set mensCelular
     *
     * @param string $mensCelular
     *
     * @return Mensajero
     */
    public function setMensCelular($mensCelular)
    {
        $this->mensCelular = $mensCelular;

        return $this;
    }

    /**
     * Get mensCelular
     *
     * @return string
     */
    public function getMensCelular()
    {
        return $this->mensCelular;
    }

    /**
     * Set mensDireccion
     *
     * @param string $mensDireccion
     *
     * @return Mensajero
     */
    public function setMensDireccion($mensDireccion)
    {
        $this->mensDireccion = $mensDireccion;

        return $this;
    }

    /**
     * Get mensDireccion
     *
     * @return string
     */
    public function getMensDireccion()
    {
        return $this->mensDireccion;
    }

    /**
     * Set mensCodigo
     *
     * @param string $mensCodigo
     *
     * @return Mensajero
     */
    public function setMensCodigo($mensCodigo)
    {
        $this->mensCodigo = $mensCodigo;

        return $this;
    }

    /**
     * Get mensCodigo
     *
     * @return string
     */
    public function getMensCodigo()
    {
        return $this->mensCodigo;
    }

    /**
     * Set mensEstado
     *
     * @param string $mensEstado
     *
     * @return Mensajero
     */
    public function setMensEstado($mensEstado)
    {
        $this->mensEstado = $mensEstado;

        return $this;
    }

    /**
     * Get mensEstado
     *
     * @return string
     */
    public function getMensEstado()
    {
        return $this->mensEstado;
    }
}
