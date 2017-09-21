<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesapedido
 *
 * @ORM\Table(name="mesapedido")
 * @ORM\Entity
 */
class Mesapedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mp_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mpCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="mp_mesa", type="integer", nullable=true)
     */
    private $mpMesa;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_estado", type="string", length=15, nullable=true)
     */
    private $mpEstado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_fecha", type="date", nullable=true)
     */
    private $mpFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_hora", type="time", nullable=true)
     */
    private $mpHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="mp_codCliente", type="integer", nullable=true)
     */
    private $mpCodcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_valorTotal", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $mpValortotal;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_usuario", type="string", length=50, nullable=true)
     */
    private $mpUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_mesero", type="string", length=60, nullable=true)
     */
    private $mpMesero;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pago", type="string", length=2, nullable=true)
     */
    private $mpPago = 'NO';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_hora_entrega", type="time", nullable=true)
     */
    private $mpHoraEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_subMesa", type="string", length=2, nullable=false)
     */
    private $mpSubmesa;

    /**
     * @var integer
     *
     * @ORM\Column(name="mp_facvcodigo", type="integer", nullable=false)
     */
    private $mpFacvcodigo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_comandaFisica", type="string", length=30, nullable=false)
     */
    private $mpComandafisica;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_dirCliente", type="string", length=150, nullable=false)
     */
    private $mpDircliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="mp_mensajero", type="integer", nullable=false)
     */
    private $mpMensajero;

    /**
     * @var integer
     *
     * @ORM\Column(name="mp_precio_domicilio", type="integer", nullable=false)
     */
    private $mpPrecioDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="mp_valor_domicilio", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $mpValorDomicilio;



    /**
     * Get mpCodigo
     *
     * @return integer
     */
    public function getMpCodigo()
    {
        return $this->mpCodigo;
    }

    /**
     * Set mpMesa
     *
     * @param integer $mpMesa
     *
     * @return Mesapedido
     */
    public function setMpMesa($mpMesa)
    {
        $this->mpMesa = $mpMesa;

        return $this;
    }

    /**
     * Get mpMesa
     *
     * @return integer
     */
    public function getMpMesa()
    {
        return $this->mpMesa;
    }

    /**
     * Set mpEstado
     *
     * @param string $mpEstado
     *
     * @return Mesapedido
     */
    public function setMpEstado($mpEstado)
    {
        $this->mpEstado = $mpEstado;

        return $this;
    }

    /**
     * Get mpEstado
     *
     * @return string
     */
    public function getMpEstado()
    {
        return $this->mpEstado;
    }

    /**
     * Set mpFecha
     *
     * @param \DateTime $mpFecha
     *
     * @return Mesapedido
     */
    public function setMpFecha($mpFecha)
    {
        $this->mpFecha = $mpFecha;

        return $this;
    }

    /**
     * Get mpFecha
     *
     * @return \DateTime
     */
    public function getMpFecha()
    {
        return $this->mpFecha;
    }

    /**
     * Set mpHora
     *
     * @param \DateTime $mpHora
     *
     * @return Mesapedido
     */
    public function setMpHora($mpHora)
    {
        $this->mpHora = $mpHora;

        return $this;
    }

    /**
     * Get mpHora
     *
     * @return \DateTime
     */
    public function getMpHora()
    {
        return $this->mpHora;
    }

    /**
     * Set mpCodcliente
     *
     * @param integer $mpCodcliente
     *
     * @return Mesapedido
     */
    public function setMpCodcliente($mpCodcliente)
    {
        $this->mpCodcliente = $mpCodcliente;

        return $this;
    }

    /**
     * Get mpCodcliente
     *
     * @return integer
     */
    public function getMpCodcliente()
    {
        return $this->mpCodcliente;
    }

    /**
     * Set mpValortotal
     *
     * @param string $mpValortotal
     *
     * @return Mesapedido
     */
    public function setMpValortotal($mpValortotal)
    {
        $this->mpValortotal = $mpValortotal;

        return $this;
    }

    /**
     * Get mpValortotal
     *
     * @return string
     */
    public function getMpValortotal()
    {
        return $this->mpValortotal;
    }

    /**
     * Set mpUsuario
     *
     * @param string $mpUsuario
     *
     * @return Mesapedido
     */
    public function setMpUsuario($mpUsuario)
    {
        $this->mpUsuario = $mpUsuario;

        return $this;
    }

    /**
     * Get mpUsuario
     *
     * @return string
     */
    public function getMpUsuario()
    {
        return $this->mpUsuario;
    }

    /**
     * Set mpMesero
     *
     * @param string $mpMesero
     *
     * @return Mesapedido
     */
    public function setMpMesero($mpMesero)
    {
        $this->mpMesero = $mpMesero;

        return $this;
    }

    /**
     * Get mpMesero
     *
     * @return string
     */
    public function getMpMesero()
    {
        return $this->mpMesero;
    }

    /**
     * Set mpPago
     *
     * @param string $mpPago
     *
     * @return Mesapedido
     */
    public function setMpPago($mpPago)
    {
        $this->mpPago = $mpPago;

        return $this;
    }

    /**
     * Get mpPago
     *
     * @return string
     */
    public function getMpPago()
    {
        return $this->mpPago;
    }

    /**
     * Set mpHoraEntrega
     *
     * @param \DateTime $mpHoraEntrega
     *
     * @return Mesapedido
     */
    public function setMpHoraEntrega($mpHoraEntrega)
    {
        $this->mpHoraEntrega = $mpHoraEntrega;

        return $this;
    }

    /**
     * Get mpHoraEntrega
     *
     * @return \DateTime
     */
    public function getMpHoraEntrega()
    {
        return $this->mpHoraEntrega;
    }

    /**
     * Set mpSubmesa
     *
     * @param string $mpSubmesa
     *
     * @return Mesapedido
     */
    public function setMpSubmesa($mpSubmesa)
    {
        $this->mpSubmesa = $mpSubmesa;

        return $this;
    }

    /**
     * Get mpSubmesa
     *
     * @return string
     */
    public function getMpSubmesa()
    {
        return $this->mpSubmesa;
    }

    /**
     * Set mpFacvcodigo
     *
     * @param integer $mpFacvcodigo
     *
     * @return Mesapedido
     */
    public function setMpFacvcodigo($mpFacvcodigo)
    {
        $this->mpFacvcodigo = $mpFacvcodigo;

        return $this;
    }

    /**
     * Get mpFacvcodigo
     *
     * @return integer
     */
    public function getMpFacvcodigo()
    {
        return $this->mpFacvcodigo;
    }

    /**
     * Set mpComandafisica
     *
     * @param string $mpComandafisica
     *
     * @return Mesapedido
     */
    public function setMpComandafisica($mpComandafisica)
    {
        $this->mpComandafisica = $mpComandafisica;

        return $this;
    }

    /**
     * Get mpComandafisica
     *
     * @return string
     */
    public function getMpComandafisica()
    {
        return $this->mpComandafisica;
    }

    /**
     * Set mpDircliente
     *
     * @param string $mpDircliente
     *
     * @return Mesapedido
     */
    public function setMpDircliente($mpDircliente)
    {
        $this->mpDircliente = $mpDircliente;

        return $this;
    }

    /**
     * Get mpDircliente
     *
     * @return string
     */
    public function getMpDircliente()
    {
        return $this->mpDircliente;
    }

    /**
     * Set mpMensajero
     *
     * @param integer $mpMensajero
     *
     * @return Mesapedido
     */
    public function setMpMensajero($mpMensajero)
    {
        $this->mpMensajero = $mpMensajero;

        return $this;
    }

    /**
     * Get mpMensajero
     *
     * @return integer
     */
    public function getMpMensajero()
    {
        return $this->mpMensajero;
    }

    /**
     * Set mpPrecioDomicilio
     *
     * @param integer $mpPrecioDomicilio
     *
     * @return Mesapedido
     */
    public function setMpPrecioDomicilio($mpPrecioDomicilio)
    {
        $this->mpPrecioDomicilio = $mpPrecioDomicilio;

        return $this;
    }

    /**
     * Get mpPrecioDomicilio
     *
     * @return integer
     */
    public function getMpPrecioDomicilio()
    {
        return $this->mpPrecioDomicilio;
    }

    /**
     * Set mpValorDomicilio
     *
     * @param string $mpValorDomicilio
     *
     * @return Mesapedido
     */
    public function setMpValorDomicilio($mpValorDomicilio)
    {
        $this->mpValorDomicilio = $mpValorDomicilio;

        return $this;
    }

    /**
     * Get mpValorDomicilio
     *
     * @return string
     */
    public function getMpValorDomicilio()
    {
        return $this->mpValorDomicilio;
    }
}
