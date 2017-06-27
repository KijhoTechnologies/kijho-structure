<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * PrestamosEntrada
 *
 * @ORM\Table(name="prestamos_entrada", indexes={@ORM\Index(name="prestamo_entrada_FKIndex1", columns={"prod_codigo"})})
 * @ORM\Entity
 */
class PrestamosEntrada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pree_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $preeCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pree_tipo", type="integer", nullable=true)
     */
    private $preeTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pree_estado", type="integer", nullable=true)
     */
    private $preeEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="pree_persona", type="string", length=100, nullable=true)
     */
    private $preePersona;

    /**
     * @var string
     *
     * @ORM\Column(name="pree_telefono", type="string", length=100, nullable=true)
     */
    private $preeTelefono;

    /**
     * @var float
     *
     * @ORM\Column(name="pree_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $preeCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_codigo", type="integer", nullable=false)
     */
    private $presCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="pree_valorUnidad", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $preeValorunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="pree_iva", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $preeIva;


    /**
     * Get preeCodigo
     *
     * @return integer 
     */
    public function getPreeCodigo()
    {
        return $this->preeCodigo;
    }

    /**
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return PrestamosEntrada
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
     * Set preeTipo
     *
     * @param integer $preeTipo
     * @return PrestamosEntrada
     */
    public function setPreeTipo($preeTipo)
    {
        $this->preeTipo = $preeTipo;

        return $this;
    }

    /**
     * Get preeTipo
     *
     * @return integer 
     */
    public function getPreeTipo()
    {
        return $this->preeTipo;
    }

    /**
     * Set preeEstado
     *
     * @param integer $preeEstado
     * @return PrestamosEntrada
     */
    public function setPreeEstado($preeEstado)
    {
        $this->preeEstado = $preeEstado;

        return $this;
    }

    /**
     * Get preeEstado
     *
     * @return integer 
     */
    public function getPreeEstado()
    {
        return $this->preeEstado;
    }

    /**
     * Set preePersona
     *
     * @param string $preePersona
     * @return PrestamosEntrada
     */
    public function setPreePersona($preePersona)
    {
        $this->preePersona = $preePersona;

        return $this;
    }

    /**
     * Get preePersona
     *
     * @return string 
     */
    public function getPreePersona()
    {
        return $this->preePersona;
    }

    /**
     * Set preeTelefono
     *
     * @param string $preeTelefono
     * @return PrestamosEntrada
     */
    public function setPreeTelefono($preeTelefono)
    {
        $this->preeTelefono = $preeTelefono;

        return $this;
    }

    /**
     * Get preeTelefono
     *
     * @return string 
     */
    public function getPreeTelefono()
    {
        return $this->preeTelefono;
    }

    /**
     * Set preeCantidad
     *
     * @param float $preeCantidad
     * @return PrestamosEntrada
     */
    public function setPreeCantidad($preeCantidad)
    {
        $this->preeCantidad = $preeCantidad;

        return $this;
    }

    /**
     * Get preeCantidad
     *
     * @return float 
     */
    public function getPreeCantidad()
    {
        return $this->preeCantidad;
    }

    /**
     * Set presCodigo
     *
     * @param integer $presCodigo
     * @return PrestamosEntrada
     */
    public function setPresCodigo($presCodigo)
    {
        $this->presCodigo = $presCodigo;

        return $this;
    }

    /**
     * Get presCodigo
     *
     * @return integer 
     */
    public function getPresCodigo()
    {
        return $this->presCodigo;
    }

    /**
     * Set preeValorunidad
     *
     * @param string $preeValorunidad
     * @return PrestamosEntrada
     */
    public function setPreeValorunidad($preeValorunidad)
    {
        $this->preeValorunidad = $preeValorunidad;

        return $this;
    }

    /**
     * Get preeValorunidad
     *
     * @return string 
     */
    public function getPreeValorunidad()
    {
        return $this->preeValorunidad;
    }

    /**
     * Set preeIva
     *
     * @param string $preeIva
     * @return PrestamosEntrada
     */
    public function setPreeIva($preeIva)
    {
        $this->preeIva = $preeIva;

        return $this;
    }

    /**
     * Get preeIva
     *
     * @return string 
     */
    public function getPreeIva()
    {
        return $this->preeIva;
    }
}
