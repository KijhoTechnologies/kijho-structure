<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Cliente
 *
 * @author jocampo
 */

/**
 * @ORM\Entity(repositoryClass="ClienteRepository")
 * @ORM\Table(name="cliente")
 */
class Cliente {

    //Errores de inserción de nuevos clientes
    const CLIENT_ALREADY_EXIST = 'CU-E01';
    //Errores de código QR de cliente
    const CUSTOMER_QRCODE_ALREADY_ASSIGNED = 'CU-EQR-01';

    //Error de cliente no encontrado

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", name="cli_codigo", length=10)
     * @ORM\GeneratedValue
     */
    protected $id;

    //Errores de código QR de cliente
//    const CUSTOMER_QRCODE_ALREADY_ASSIGNED = 'CU-EQR-01';
    //Error de cliente no encontrado

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_nombre_empresa", length=100)
     */
    protected $nombreEmpresa;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_identificacion", length=100)
     */
    protected $identificacion;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_nombre_apellido", length=100)
     */
    protected $nombreApellido;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Barrios")
     * @ORM\JoinColumn(name="cli_barrio_id", referencedColumnName="cod_barrio")
     */
    protected $barrio;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_direccion", length=100)
     */
    protected $direccion;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_depto", length=100)
     */
    protected $departamento;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_ciudad", length=100)
     */
    protected $ciudad;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_movil", length=100)
     */
    protected $movil;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_email", length=100)
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_telefono", length=100)
     */
    protected $telefono;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_descuento", length=2)
     */
    protected $descuento;
    //Enum
    /**
     * @var string
     * @ORM\Column(type="string", name="cli_aplica_retencion", nullable=true,  options={"default"="no"})
     */
    protected $retencion;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_aplica_reteiva", nullable=true, options={"default"="no"})
     */
    protected $reteiva;

    /**
     * @var int
     * @ORM\Column(type="float", name="cli_tarifa_reteica", nullable=true, precision=10, scale=2)
     */
    protected $tarifaReteIca;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_aplica_reteica", options={"default"="No"})
     */
    protected $reteica;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_aplica_retecree", options={"default"="No"})
     */
    protected $retecree;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_tipoPersona", length=50)
     */
    protected $tipoPersona;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_regimen_cliente", length=100)
     */
    protected $regimen;

    /**
     * @var string
     * @ORM\Column(type="string", name="cli_nombre_comercial", length=100)
     */
    protected $nombreComercial;

    /**
     * @var string
     * @ORM\Column(type="decimal", name="cli_descuentoPorcentual", precision=11, scale=3, nullable=TRUE, options={"default"=0.000})
     */
    protected $descuentoPorcentual;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Zona")
     * @ORM\JoinColumn(name="cli_zona_id")
     */
    protected $zona;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_fecha_nacimiento", type="string", length=30, nullable=true)
     */
    private $cliFechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_descripcion", type="string", length=300, nullable=true)
     */
    private $cliDescripcion;

    /**
     * @var boolean
     * 
     * @ORM\Column(type="boolean", name="cli_cupo_credito", nullable=true, options={"default"=FALSE})
     */
    private $cliCupoCredito;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", name="cli_monto_cupo_credito", precision=11, scale=2, nullable=true, options={"default"=0.00})
     */
    private $cliMontoCupoCredito;

    /**
     * @var boolean
     * 
     * @ORM\Column(type="boolean", name="cli_borrado", nullable=FALSE, options={"default"=FALSE})
     */
    private $deleted;

     /**
     * @ORM\OneToMany(targetEntity="ClienteRegalo", mappedBy="customer")
     */
    private $giftClient;
    
    /**
     * @ORM\OneToMany(targetEntity="ClienteCodigoQr", mappedBy="customer")
     */
    private $qrCode;

//    
    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
        $this->cliNombreApellido = '';
        $this->deleted = false;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     * @return Cliente
     */
    public function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string 
     */
    public function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     * @return Cliente
     */
    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string 
     */
    public function getIdentificacion() {
        return $this->identificacion;
    }

    /**
     * Set nombreApellido
     *
     * @param string $nombreApellido
     * @return Cliente
     */
    public function setNombreApellido($nombreApellido) {
        $this->nombreApellido = $nombreApellido;

        return $this;
    }

    /**
     * Get nombreApellido
     *
     * @return string 
     */
    public function getNombreApellido() {
        return $this->nombreApellido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cliente
     */
    public function setDireccion($direccion) {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Cliente
     */
    public function setDepartamento($departamento) {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento() {
        return $this->departamento;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Cliente
     */
    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad() {
        return $this->ciudad;
    }

    /**
     * Set movil
     *
     * @param string $movil
     * @return Cliente
     */
    public function setMovil($movil) {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil() {
        return $this->movil;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Cliente
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Cliente
     */
    public function setDescuento($descuento) {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento() {
        return $this->descuento;
    }

    /**
     * Set retencion
     *
     * @param string $retencion
     * @return Cliente
     */
    public function setRetencion($retencion) {
        $this->retencion = $retencion;

        return $this;
    }

    /**
     * Get retencion
     *
     * @return string 
     */
    public function getRetencion() {
        return $this->retencion;
    }

    /**
     * Set reteiva
     *
     * @param string $reteiva
     * @return Cliente
     */
    public function setReteiva($reteiva) {
        $this->reteiva = $reteiva;

        return $this;
    }

    /**
     * Get reteiva
     *
     * @return string 
     */
    public function getReteiva() {
        return $this->reteiva;
    }

    /**
     * Set tarifaReteIca
     *
     * @param float $tarifaReteIca
     * @return Cliente
     */
    public function setTarifaReteIca($tarifaReteIca) {
        $this->tarifaReteIca = $tarifaReteIca;

        return $this;
    }

    /**
     * Get tarifaReteIca
     *
     * @return float 
     */
    public function getTarifaReteIca() {
        return $this->tarifaReteIca;
    }

    /**
     * Set reteica
     *
     * @param string $reteica
     * @return Cliente
     */
    public function setReteica($reteica) {
        $this->reteica = $reteica;

        return $this;
    }

    /**
     * Get reteica
     *
     * @return string 
     */
    public function getReteica() {
        return $this->reteica;
    }

    /**
     * Set retecree
     *
     * @param string $retecree
     * @return Cliente
     */
    public function setRetecree($retecree) {
        $this->retecree = $retecree;

        return $this;
    }

    /**
     * Get retecree
     *
     * @return string 
     */
    public function getRetecree() {
        return $this->retecree;
    }

    /**
     * Set tipoPersona
     *
     * @param string $tipoPersona
     * @return Cliente
     */
    public function setTipoPersona($tipoPersona) {
        $this->tipoPersona = $tipoPersona;

        return $this;
    }

    /**
     * Get tipoPersona
     *
     * @return string 
     */
    public function getTipoPersona() {
        return $this->tipoPersona;
    }

    /**
     * Set regimen
     *
     * @param string $regimen
     * @return Cliente
     */
    public function setRegimen($regimen) {
        $this->regimen = $regimen;

        return $this;
    }

    /**
     * Get regimen
     *
     * @return string 
     */
    public function getRegimen() {
        return $this->regimen;
    }

    /**
     * Set nombreComercial
     *
     * @param string $nombreComercial
     * @return Cliente
     */
    public function setNombreComercial($nombreComercial) {
        $this->nombreComercial = $nombreComercial;

        return $this;
    }

    /**
     * Get nombreComercial
     *
     * @return string 
     */
    public function getNombreComercial() {
        return $this->nombreComercial;
    }

    /**
     * Set descuentoPorcentual
     *
     * @param string $descuentoPorcentual
     * @return Cliente
     */
    public function setDescuentoPorcentual($descuentoPorcentual) {
        $this->descuentoPorcentual = $descuentoPorcentual;

        return $this;
    }

    /**
     * Get descuentoPorcentual
     *
     * @return string 
     */
    public function getDescuentoPorcentual() {
        return $this->descuentoPorcentual;
    }

    /**
     * Set barrio
     *
     * @param \Barrios $barrio
     * @return Cliente
     */
    public function setBarrio(Barrios $barrio = null) {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio
     *
     * @return \Barrios 
     */
    public function getBarrio() {
        return $this->barrio;
    }

    /**
     * Set zona
     *
     * @param \Zona $zona
     * @return Cliente
     */
    public function setZona(Zona $zona = null) {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return \Zona 
     */
    public function getZona() {
        return $this->zona;
    }

    /**
     * Set deleted
     * 
     * @param boolean $delete
     * @return Cliente
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

    public function getCliFechaNacimiento() {
        return $this->cliFechaNacimiento;
    }

    public function getCliDescripcion() {
        return $this->cliDescripcion;
    }

    public function getCliCupoCredito() {
        return $this->cliCupoCredito;
    }

    public function getCliMontoCupoCredito() {
        return $this->cliMontoCupoCredito;
    }

    public function setCliFechaNacimiento($cliFechaNacimiento) {
        $this->cliFechaNacimiento = $cliFechaNacimiento;
    }

    public function setCliDescripcion($cliDescripcion) {
        $this->cliDescripcion = $cliDescripcion;
    }

    public function setCliCupoCredito($cliCupoCredito) {
        $this->cliCupoCredito = $cliCupoCredito;
    }

    public function setCliMontoCupoCredito($cliMontoCupoCredito) {
        $this->cliMontoCupoCredito = $cliMontoCupoCredito;
    }

//    public function getQrCode(){
//        return $this->qrCode;
//    }
}
