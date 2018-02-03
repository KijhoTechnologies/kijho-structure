<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaProveedores
 *
 * @ORM\Table(name="factura_proveedores", indexes={@ORM\Index(name="factura_proveedores_FKIndex1", columns={"prov_codigo"})})
 * @ORM\Entity
 */
class FacturaProveedores {

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facpCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prov_codigo", type="integer", nullable=false)
     */
    private $provCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_subtotal", type="integer", nullable=true)
     */
    private $facpSubtotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_valor", type="integer", nullable=true)
     */
    private $facpValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facp_fecha", type="date", nullable=true)
     */
    private $facpFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_hora", type="string", length=100, nullable=true)
     */
    private $facpHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_estado", type="integer", nullable=false)
     */
    private $facpEstado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="facp_anulada", type="boolean", nullable=false, options={"default" = false})
     */
    private $facpAnulada;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_num_fac_pr", type="string", length=255, nullable=false)
     */
    private $facpNumFacPr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="facp_fecha_pago", type="date", nullable=false)
     */
    private $facpFechaPago;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_iva16", type="integer", nullable=true)
     */
    private $facpIva16;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_iva10", type="integer", nullable=true)
     */
    private $facpIva10;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_excento", type="integer", nullable=true)
     */
    private $facpExcento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_caja", type="integer", nullable=false)
     */
    private $codCaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_usuario", type="integer", nullable=false)
     */
    private $codUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="descuento", type="integer", nullable=false)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_ajuste", type="string", nullable=false)
     */
    private $tipoAjuste;

    /**
     * @var integer
     *
     * @ORM\Column(name="ajuste_peso", type="integer", nullable=false)
     */
    private $ajustePeso;

    /**
     * @var integer
     *
     * @ORM\Column(name="facp_iva5", type="integer", nullable=true)
     */
    private $facpIva5;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_excluido", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facpExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_reteFuente", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facpRetefuente;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_reteIca", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facpReteica;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_reteIva", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facpReteiva;

    /**
     * @var string
     *
     * @ORM\Column(name="facp_reteCree", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $facpRetecree;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="cedula_cliente", type="string", nullable=true)
     */
    private $cedulaCliente;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="nombre_cliente", type="string", nullable=true)
     */
    private $nombreCliente;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * @var string
     *
     * @ORM\Column(name="telefono_cliente", type="string", nullable=true)
     */
    private $telefonoCliente;

    /**
     * Get facpCodigo
     *
     * @return integer 
     */
    public function getFacpCodigo() {
        return $this->facpCodigo;
    }

    /**
     * Set provCodigo
     *
     * @param integer $provCodigo
     * @return FacturaProveedores
     */
    public function setProvCodigo($provCodigo) {
        $this->provCodigo = $provCodigo;

        return $this;
    }

    /**
     * Get provCodigo
     *
     * @return integer 
     */
    public function getProvCodigo() {
        return $this->provCodigo;
    }

    /**
     * Set facpSubtotal
     *
     * @param integer $facpSubtotal
     * @return FacturaProveedores
     */
    public function setFacpSubtotal($facpSubtotal) {
        $this->facpSubtotal = $facpSubtotal;

        return $this;
    }

    /**
     * Get facpSubtotal
     *
     * @return integer 
     */
    public function getFacpSubtotal() {
        return $this->facpSubtotal;
    }

    /**
     * Set facpValor
     *
     * @param integer $facpValor
     * @return FacturaProveedores
     */
    public function setFacpValor($facpValor) {
        $this->facpValor = $facpValor;

        return $this;
    }

    /**
     * Get facpValor
     *
     * @return integer 
     */
    public function getFacpValor() {
        return $this->facpValor;
    }

    /**
     * Set facpFecha
     *
     * @param \DateTime $facpFecha
     * @return FacturaProveedores
     */
    public function setFacpFecha($facpFecha) {
        $this->facpFecha = $facpFecha;

        return $this;
    }

    /**
     * Get facpFecha
     *
     * @return \DateTime 
     */
    public function getFacpFecha() {
        return $this->facpFecha;
    }

    /**
     * Set facpHora
     *
     * @param string $facpHora
     * @return FacturaProveedores
     */
    public function setFacpHora($facpHora) {
        $this->facpHora = $facpHora;

        return $this;
    }

    /**
     * Get facpHora
     *
     * @return string 
     */
    public function getFacpHora() {
        return $this->facpHora;
    }

    /**
     * Set facpEstado
     *
     * @param integer $facpEstado
     * @return FacturaProveedores
     */
    public function setFacpEstado($facpEstado) {
        $this->facpEstado = $facpEstado;

        return $this;
    }

    /**
     * Get facpEstado
     *
     * @return integer 
     */
    public function getFacpEstado() {
        return $this->facpEstado;
    }

    /**
     * Get facpAnulada
     * 
     * @return boolean
     */
    public function getFacpAnulada() {
        return $this->facpAnulada;
    }

    /**
     * Set facpAnulada
     * 
     * @param boolean $facpAnulada
     * @return FacturaProveedores
     */
    public function setFacpAnulada($facpAnulada) {
        $this->facpAnulada = $facpAnulada;
    }

    /**
     * Set facpNumFacPr
     *
     * @param string $facpNumFacPr
     * @return FacturaProveedores
     */
    public function setFacpNumFacPr($facpNumFacPr) {
        $this->facpNumFacPr = $facpNumFacPr;

        return $this;
    }

    /**
     * Get facpNumFacPr
     *
     * @return string 
     */
    public function getFacpNumFacPr() {
        return $this->facpNumFacPr;
    }

    /**
     * Set facpFechaPago
     *
     * @param \DateTime $facpFechaPago
     * @return FacturaProveedores
     */
    public function setFacpFechaPago($facpFechaPago) {
        $this->facpFechaPago = $facpFechaPago;

        return $this;
    }

    /**
     * Get facpFechaPago
     *
     * @return \DateTime 
     */
    public function getFacpFechaPago() {
        return $this->facpFechaPago;
    }

    /**
     * Set facpIva16
     *
     * @param integer $facpIva16
     * @return FacturaProveedores
     */
    public function setFacpIva16($facpIva16) {
        $this->facpIva16 = $facpIva16;

        return $this;
    }

    /**
     * Get facpIva16
     *
     * @return integer 
     */
    public function getFacpIva16() {
        return $this->facpIva16;
    }

    /**
     * Set facpIva10
     *
     * @param integer $facpIva10
     * @return FacturaProveedores
     */
    public function setFacpIva10($facpIva10) {
        $this->facpIva10 = $facpIva10;

        return $this;
    }

    /**
     * Get facpIva10
     *
     * @return integer 
     */
    public function getFacpIva10() {
        return $this->facpIva10;
    }

    /**
     * Set facpExcento
     *
     * @param integer $facpExcento
     * @return FacturaProveedores
     */
    public function setFacpExcento($facpExcento) {
        $this->facpExcento = $facpExcento;

        return $this;
    }

    /**
     * Get facpExcento
     *
     * @return integer 
     */
    public function getFacpExcento() {
        return $this->facpExcento;
    }

    /**
     * Set codCaja
     *
     * @param integer $codCaja
     * @return FacturaProveedores
     */
    public function setCodCaja($codCaja) {
        $this->codCaja = $codCaja;

        return $this;
    }

    /**
     * Get codCaja
     *
     * @return integer 
     */
    public function getCodCaja() {
        return $this->codCaja;
    }

    /**
     * Set codUsuario
     *
     * @param integer $codUsuario
     * @return FacturaProveedores
     */
    public function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;

        return $this;
    }

    /**
     * Get codUsuario
     *
     * @return integer 
     */
    public function getCodUsuario() {
        return $this->codUsuario;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     * @return FacturaProveedores
     */
    public function setDescuento($descuento) {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return integer 
     */
    public function getDescuento() {
        return $this->descuento;
    }

    /**
     * Set tipoAjuste
     *
     * @param string $tipoAjuste
     * @return FacturaProveedores
     */
    public function setTipoAjuste($tipoAjuste) {
        $this->tipoAjuste = $tipoAjuste;

        return $this;
    }

    /**
     * Get tipoAjuste
     *
     * @return string 
     */
    public function getTipoAjuste() {
        return $this->tipoAjuste;
    }

    /**
     * Set ajustePeso
     *
     * @param integer $ajustePeso
     * @return FacturaProveedores
     */
    public function setAjustePeso($ajustePeso) {
        $this->ajustePeso = $ajustePeso;

        return $this;
    }

    /**
     * Get ajustePeso
     *
     * @return integer 
     */
    public function getAjustePeso() {
        return $this->ajustePeso;
    }

    /**
     * Set facpIva5
     *
     * @param integer $facpIva5
     * @return FacturaProveedores
     */
    public function setFacpIva5($facpIva5) {
        $this->facpIva5 = $facpIva5;

        return $this;
    }

    /**
     * Get facpIva5
     *
     * @return integer 
     */
    public function getFacpIva5() {
        return $this->facpIva5;
    }

    /**
     * Set facpExcluido
     *
     * @param string $facpExcluido
     * @return FacturaProveedores
     */
    public function setFacpExcluido($facpExcluido) {
        $this->facpExcluido = $facpExcluido;

        return $this;
    }

    /**
     * Get facpExcluido
     *
     * @return string 
     */
    public function getFacpExcluido() {
        return $this->facpExcluido;
    }

    /**
     * Set facpRetefuente
     *
     * @param string $facpRetefuente
     * @return FacturaProveedores
     */
    public function setFacpRetefuente($facpRetefuente) {
        $this->facpRetefuente = $facpRetefuente;

        return $this;
    }

    /**
     * Get facpRetefuente
     *
     * @return string 
     */
    public function getFacpRetefuente() {
        return $this->facpRetefuente;
    }

    /**
     * Set facpReteica
     *
     * @param string $facpReteica
     * @return FacturaProveedores
     */
    public function setFacpReteica($facpReteica) {
        $this->facpReteica = $facpReteica;

        return $this;
    }

    /**
     * Get facpReteica
     *
     * @return string 
     */
    public function getFacpReteica() {
        return $this->facpReteica;
    }

    /**
     * Set facpReteiva
     *
     * @param string $facpReteiva
     * @return FacturaProveedores
     */
    public function setFacpReteiva($facpReteiva) {
        $this->facpReteiva = $facpReteiva;

        return $this;
    }

    /**
     * Get facpReteiva
     *
     * @return string 
     */
    public function getFacpReteiva() {
        return $this->facpReteiva;
    }

    /**
     * Set facpRetecree
     *
     * @param string $facpRetecree
     * @return FacturaProveedores
     */
    public function setFacpRetecree($facpRetecree) {
        $this->facpRetecree = $facpRetecree;

        return $this;
    }

    /**
     * Get facpRetecree
     *
     * @return string 
     */
    public function getFacpRetecree() {
        return $this->facpRetecree;
    }

    function getCedulaCliente() {
        return $this->cedulaCliente;
    }

    function getNombreCliente() {
        return $this->nombreCliente;
    }

    function getTelefonoCliente() {
        return $this->telefonoCliente;
    }

    function setCedulaCliente($cedulaCliente) {
        $this->cedulaCliente = $cedulaCliente;
    }

    function setNombreCliente($nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    function setTelefonoCliente($telefonoCliente) {
        $this->telefonoCliente = $telefonoCliente;
    }

}
