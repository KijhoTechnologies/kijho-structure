<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity
 */
class Proveedor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prov_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $provCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_nombre", type="string", length=100, nullable=true)
     */
    private $provNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_nit", type="string", length=100, nullable=true)
     */
    private $provNit;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_aplica_retefuente", type="string", nullable=true)
     */
    private $provAplicaRetefuente;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_direccion", type="string", length=100, nullable=true)
     */
    private $provDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_contacto", type="string", length=100, nullable=true)
     */
    private $provContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_telefono", type="string", length=100, nullable=true)
     */
    private $provTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_celular", type="string", length=100, nullable=true)
     */
    private $provCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_tel_contacto", type="string", length=100, nullable=true)
     */
    private $provTelContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_nota", type="text", nullable=true)
     */
    private $provNota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prov_tipo", type="boolean", nullable=true)
     */
    private $provTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_tipoRegimen", type="string", nullable=true)
     */
    private $provTiporegimen;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_ciudad", type="string", length=50, nullable=true)
     */
    private $provCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_tarifaCree", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $provTarifacree;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_departamento", type="string", length=50, nullable=true)
     */
    private $provDepartamento;

    /**
     * @var string
     *
     * @ORM\Column(name="prov_tipoProveedor", type="string", length=50, nullable=true)
     */
    private $provTipoproveedor;


    /**
     * Get provCodigo
     *
     * @return integer 
     */
    public function getProvCodigo()
    {
        return $this->provCodigo;
    }

    /**
     * Set provNombre
     *
     * @param string $provNombre
     * @return Proveedor
     */
    public function setProvNombre($provNombre)
    {
        $this->provNombre = $provNombre;

        return $this;
    }

    /**
     * Get provNombre
     *
     * @return string 
     */
    public function getProvNombre()
    {
        return $this->provNombre;
    }

    /**
     * Set provNit
     *
     * @param string $provNit
     * @return Proveedor
     */
    public function setProvNit($provNit)
    {
        $this->provNit = $provNit;

        return $this;
    }

    /**
     * Get provNit
     *
     * @return string 
     */
    public function getProvNit()
    {
        return $this->provNit;
    }

    /**
     * Set provAplicaRetefuente
     *
     * @param string $provAplicaRetefuente
     * @return Proveedor
     */
    public function setProvAplicaRetefuente($provAplicaRetefuente)
    {
        $this->provAplicaRetefuente = $provAplicaRetefuente;

        return $this;
    }

    /**
     * Get provAplicaRetefuente
     *
     * @return string 
     */
    public function getProvAplicaRetefuente()
    {
        return $this->provAplicaRetefuente;
    }

    /**
     * Set provDireccion
     *
     * @param string $provDireccion
     * @return Proveedor
     */
    public function setProvDireccion($provDireccion)
    {
        $this->provDireccion = $provDireccion;

        return $this;
    }

    /**
     * Get provDireccion
     *
     * @return string 
     */
    public function getProvDireccion()
    {
        return $this->provDireccion;
    }

    /**
     * Set provContacto
     *
     * @param string $provContacto
     * @return Proveedor
     */
    public function setProvContacto($provContacto)
    {
        $this->provContacto = $provContacto;

        return $this;
    }

    /**
     * Get provContacto
     *
     * @return string 
     */
    public function getProvContacto()
    {
        return $this->provContacto;
    }

    /**
     * Set provTelefono
     *
     * @param string $provTelefono
     * @return Proveedor
     */
    public function setProvTelefono($provTelefono)
    {
        $this->provTelefono = $provTelefono;

        return $this;
    }

    /**
     * Get provTelefono
     *
     * @return string 
     */
    public function getProvTelefono()
    {
        return $this->provTelefono;
    }

    /**
     * Set provCelular
     *
     * @param string $provCelular
     * @return Proveedor
     */
    public function setProvCelular($provCelular)
    {
        $this->provCelular = $provCelular;

        return $this;
    }

    /**
     * Get provCelular
     *
     * @return string 
     */
    public function getProvCelular()
    {
        return $this->provCelular;
    }

    /**
     * Set provTelContacto
     *
     * @param string $provTelContacto
     * @return Proveedor
     */
    public function setProvTelContacto($provTelContacto)
    {
        $this->provTelContacto = $provTelContacto;

        return $this;
    }

    /**
     * Get provTelContacto
     *
     * @return string 
     */
    public function getProvTelContacto()
    {
        return $this->provTelContacto;
    }

    /**
     * Set provNota
     *
     * @param string $provNota
     * @return Proveedor
     */
    public function setProvNota($provNota)
    {
        $this->provNota = $provNota;

        return $this;
    }

    /**
     * Get provNota
     *
     * @return string 
     */
    public function getProvNota()
    {
        return $this->provNota;
    }

    /**
     * Set provTipo
     *
     * @param boolean $provTipo
     * @return Proveedor
     */
    public function setProvTipo($provTipo)
    {
        $this->provTipo = $provTipo;

        return $this;
    }

    /**
     * Get provTipo
     *
     * @return boolean 
     */
    public function getProvTipo()
    {
        return $this->provTipo;
    }

    /**
     * Set provTiporegimen
     *
     * @param string $provTiporegimen
     * @return Proveedor
     */
    public function setProvTiporegimen($provTiporegimen)
    {
        $this->provTiporegimen = $provTiporegimen;

        return $this;
    }

    /**
     * Get provTiporegimen
     *
     * @return string 
     */
    public function getProvTiporegimen()
    {
        return $this->provTiporegimen;
    }

    /**
     * Set provCiudad
     *
     * @param string $provCiudad
     * @return Proveedor
     */
    public function setProvCiudad($provCiudad)
    {
        $this->provCiudad = $provCiudad;

        return $this;
    }

    /**
     * Get provCiudad
     *
     * @return string 
     */
    public function getProvCiudad()
    {
        return $this->provCiudad;
    }

    /**
     * Set provTarifacree
     *
     * @param string $provTarifacree
     * @return Proveedor
     */
    public function setProvTarifacree($provTarifacree)
    {
        $this->provTarifacree = $provTarifacree;

        return $this;
    }

    /**
     * Get provTarifacree
     *
     * @return string 
     */
    public function getProvTarifacree()
    {
        return $this->provTarifacree;
    }

    /**
     * Set provDepartamento
     *
     * @param string $provDepartamento
     * @return Proveedor
     */
    public function setProvDepartamento($provDepartamento)
    {
        $this->provDepartamento = $provDepartamento;

        return $this;
    }

    /**
     * Get provDepartamento
     *
     * @return string 
     */
    public function getProvDepartamento()
    {
        return $this->provDepartamento;
    }

    /**
     * Set provTipoproveedor
     *
     * @param string $provTipoproveedor
     * @return Proveedor
     */
    public function setProvTipoproveedor($provTipoproveedor)
    {
        $this->provTipoproveedor = $provTipoproveedor;

        return $this;
    }

    /**
     * Get provTipoproveedor
     *
     * @return string 
     */
    public function getProvTipoproveedor()
    {
        return $this->provTipoproveedor;
    }
}
