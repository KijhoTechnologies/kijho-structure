<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;


/**
 * Prestamo
 *
 * @ORM\Table(name="prestamo", indexes={@ORM\Index(name="prestamo_FKIndex1", columns={"prod_codigo"})})
 * @ORM\Entity(repositoryClass="PrestamoRepository")
 */
class Prestamo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pres_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $presCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_codigo", type="integer", nullable=false)
     */
    private $prodCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prod_costo", type="integer", nullable=false)
     */
    private $prodCosto;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_estado", type="integer", nullable=true)
     */
    private $presEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_persona", type="string", length=100, nullable=true)
     */
    private $presPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_telefono", type="string", length=100, nullable=true)
     */
    private $presTelefono;

    /**
     * @var float
     *
     * @ORM\Column(name="pres_cantidad", type="float", precision=10, scale=0, nullable=true)
     */
    private $presCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_tipo", type="integer", nullable=true)
     */
    private $presTipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pres_fecha", type="date", nullable=true)
     */
    private $presFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_hora", type="string", length=100, nullable=false)
     */
    private $presHora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pres_fecha_pago", type="date", nullable=true)
     */
    private $presFechaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_hora_pago", type="string", length=100, nullable=true)
     */
    private $presHoraPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=true)
     */
    private $usuCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_eliminado", type="integer", nullable=false)
     */
    private $presEliminado;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_total", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $presTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_factura", type="integer", nullable=true)
     */
    private $presFactura;


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
     * Set prodCodigo
     *
     * @param integer $prodCodigo
     * @return Prestamo
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
     * Set prodCosto
     *
     * @param integer $prodCosto
     * @return Prestamo
     */
    public function setProdCosto($prodCosto)
    {
        $this->prodCosto = $prodCosto;

        return $this;
    }

    /**
     * Get prodCosto
     *
     * @return integer 
     */
    public function getProdCosto()
    {
        return $this->prodCosto;
    }

    /**
     * Set presEstado
     *
     * @param integer $presEstado
     * @return Prestamo
     */
    public function setPresEstado($presEstado)
    {
        $this->presEstado = $presEstado;

        return $this;
    }

    /**
     * Get presEstado
     *
     * @return integer 
     */
    public function getPresEstado()
    {
        return $this->presEstado;
    }

    /**
     * Set presPersona
     *
     * @param string $presPersona
     * @return Prestamo
     */
    public function setPresPersona($presPersona)
    {
        $this->presPersona = $presPersona;

        return $this;
    }

    /**
     * Get presPersona
     *
     * @return string 
     */
    public function getPresPersona()
    {
        return $this->presPersona;
    }

    /**
     * Set presTelefono
     *
     * @param string $presTelefono
     * @return Prestamo
     */
    public function setPresTelefono($presTelefono)
    {
        $this->presTelefono = $presTelefono;

        return $this;
    }

    /**
     * Get presTelefono
     *
     * @return string 
     */
    public function getPresTelefono()
    {
        return $this->presTelefono;
    }

    /**
     * Set presCantidad
     *
     * @param float $presCantidad
     * @return Prestamo
     */
    public function setPresCantidad($presCantidad)
    {
        $this->presCantidad = $presCantidad;

        return $this;
    }

    /**
     * Get presCantidad
     *
     * @return float 
     */
    public function getPresCantidad()
    {
        return $this->presCantidad;
    }

    /**
     * Set presTipo
     *
     * @param integer $presTipo
     * @return Prestamo
     */
    public function setPresTipo($presTipo)
    {
        $this->presTipo = $presTipo;

        return $this;
    }

    /**
     * Get presTipo
     *
     * @return integer 
     */
    public function getPresTipo()
    {
        return $this->presTipo;
    }

    /**
     * Set presFecha
     *
     * @param \DateTime $presFecha
     * @return Prestamo
     */
    public function setPresFecha($presFecha)
    {
        $this->presFecha = $presFecha;

        return $this;
    }

    /**
     * Get presFecha
     *
     * @return \DateTime 
     */
    public function getPresFecha()
    {
        return $this->presFecha;
    }

    /**
     * Set presHora
     *
     * @param string $presHora
     * @return Prestamo
     */
    public function setPresHora($presHora)
    {
        $this->presHora = $presHora;

        return $this;
    }

    /**
     * Get presHora
     *
     * @return string 
     */
    public function getPresHora()
    {
        return $this->presHora;
    }

    /**
     * Set presFechaPago
     *
     * @param \DateTime $presFechaPago
     * @return Prestamo
     */
    public function setPresFechaPago($presFechaPago)
    {
        $this->presFechaPago = $presFechaPago;

        return $this;
    }

    /**
     * Get presFechaPago
     *
     * @return \DateTime 
     */
    public function getPresFechaPago()
    {
        return $this->presFechaPago;
    }

    /**
     * Set presHoraPago
     *
     * @param string $presHoraPago
     * @return Prestamo
     */
    public function setPresHoraPago($presHoraPago)
    {
        $this->presHoraPago = $presHoraPago;

        return $this;
    }

    /**
     * Get presHoraPago
     *
     * @return string 
     */
    public function getPresHoraPago()
    {
        return $this->presHoraPago;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return Prestamo
     */
    public function setUsuCodigo($usuCodigo)
    {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo()
    {
        return $this->usuCodigo;
    }

    /**
     * Set presEliminado
     *
     * @param integer $presEliminado
     * @return Prestamo
     */
    public function setPresEliminado($presEliminado)
    {
        $this->presEliminado = $presEliminado;

        return $this;
    }

    /**
     * Get presEliminado
     *
     * @return integer 
     */
    public function getPresEliminado()
    {
        return $this->presEliminado;
    }

    /**
     * Set presTotal
     *
     * @param string $presTotal
     * @return Prestamo
     */
    public function setPresTotal($presTotal)
    {
        $this->presTotal = $presTotal;

        return $this;
    }

    /**
     * Get presTotal
     *
     * @return string 
     */
    public function getPresTotal()
    {
        return $this->presTotal;
    }

    /**
     * Set presFactura
     *
     * @param integer $presFactura
     * @return Prestamo
     */
    public function setPresFactura($presFactura)
    {
        $this->presFactura = $presFactura;

        return $this;
    }

    /**
     * Get presFactura
     *
     * @return integer 
     */
    public function getPresFactura()
    {
        return $this->presFactura;
    }
}
