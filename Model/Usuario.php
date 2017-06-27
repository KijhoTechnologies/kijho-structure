<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="UsuarioRepository")
 */
class Usuario {

    const USER_TIPE_ADMIN = 1;
    const USER_TIPE_SELLER = 2;
    const USER_TIPE_ADMINSPECIAL = 3;
    const USER_TIPE_SUPERADMIN = 4;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_nombre", type="string", length=100, nullable=true)
     */
    private $usuNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_apellido", type="string", length=100, nullable=true)
     */
    private $usuApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_telefono", type="string", length=100, nullable=true)
     */
    private $usuTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_login", type="string", length=100, nullable=true)
     */
    private $usuLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_pass", type="string", length=100, nullable=true)
     */
    private $usuPass;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_tipo", type="integer", nullable=true)
     */
    private $usuTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_estado", type="integer", nullable=false)
     */
    private $usuEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="usu_access_code", type="string", length=200, nullable=true)
     */
    private $usuAccessCode;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="usu_delete", type="boolean", nullable=false, options={"default"= false})
     */
    private $deleted;

    /**
     * @ORM\OneToMany(targetEntity="Zona", mappedBy="user")
     */
    private $userZone;

    public function __construct() {
        $this->userZone = new ArrayCollection();
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo() {
        return $this->usuCodigo;
    }

    /**
     * Set usuNombre
     *
     * @param string $usuNombre
     * @return Usuario
     */
    public function setUsuNombre($usuNombre) {
        $this->usuNombre = $usuNombre;

        return $this;
    }

    /**
     * Get usuNombre
     *
     * @return string 
     */
    public function getUsuNombre() {
        return $this->usuNombre;
    }

    /**
     * Set usuApellido
     *
     * @param string $usuApellido
     * @return Usuario
     */
    public function setUsuApellido($usuApellido) {
        $this->usuApellido = $usuApellido;

        return $this;
    }

    /**
     * Get usuApellido
     *
     * @return string 
     */
    public function getUsuApellido() {
        return $this->usuApellido;
    }

    /**
     * Set usuTelefono
     *
     * @param string $usuTelefono
     * @return Usuario
     */
    public function setUsuTelefono($usuTelefono) {
        $this->usuTelefono = $usuTelefono;

        return $this;
    }

    /**
     * Get usuTelefono
     *
     * @return string 
     */
    public function getUsuTelefono() {
        return $this->usuTelefono;
    }

    /**
     * Set usuLogin
     *
     * @param string $usuLogin
     * @return Usuario
     */
    public function setUsuLogin($usuLogin) {
        $this->usuLogin = $usuLogin;

        return $this;
    }

    /**
     * Get usuLogin
     *
     * @return string 
     */
    public function getUsuLogin() {
        return $this->usuLogin;
    }

    /**
     * Set usuPass
     *
     * @param string $usuPass
     * @return Usuario
     */
    public function setUsuPass($usuPass) {
        $this->usuPass = $usuPass;

        return $this;
    }

    /**
     * Get usuPass
     *
     * @return string 
     */
    public function getUsuPass() {
        return $this->usuPass;
    }

    /**
     * Set usuTipo
     *
     * @param integer $usuTipo
     * @return Usuario
     */
    public function setUsuTipo($usuTipo) {
        $this->usuTipo = $usuTipo;

        return $this;
    }

    /**
     * Get usuTipo
     *
     * @return integer 
     */
    public function getUsuTipo() {
        return $this->usuTipo;
    }

    /**
     * Set usuEstado
     *
     * @param integer $usuEstado
     * @return Usuario
     */
    public function setUsuEstado($usuEstado) {
        $this->usuEstado = $usuEstado;

        return $this;
    }

    /**
     * Get usuEstado
     *
     * @return integer 
     */
    public function getUsuEstado() {
        return $this->usuEstado;
    }

    /**
     * Set usuAccessCode
     *
     * @param string $usuAccessCode
     * @return Usuario
     */
    public function setUsuAccessCode($usuAccessCode) {
        $this->usuAccessCode = $usuAccessCode;

        return $this;
    }

    /**
     * Get usuAccessCode
     *
     * @return string 
     */
    public function getUsuAccessCode() {
        return $this->usuAccessCode;
    }

    /**
     * Set deleted
     * 
     * @param boolean $delete
     * @return Usuario
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

    public function addZone(Zona $zone) {
        $this->userZone[] = $zone;
        return $this;
    }

    public function getZone() {
        return $this->userZone;
    }

    public function getName() {
        return $this->getUsuNombre() . ' ' . $this->getUsuApellido();
    }

    function getUserZone() {
        return $this->userZone;
    }

    function setUserZone($userZone) {
        $this->userZone = $userZone;
    }

}
