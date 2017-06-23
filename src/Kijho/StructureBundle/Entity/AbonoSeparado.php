<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbonoSeparado
 *
 * @ORM\Table(name="abono_separado")
 * @ORM\Entity
 */
class AbonoSeparado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sepa_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sepaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="sep_codigo", type="integer", nullable=true)
     */
    private $sepCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sepa_fecha", type="date", nullable=true)
     */
    private $sepaFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="sepa_hora", type="string", length=50, nullable=true)
     */
    private $sepaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="sepa_abono", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepaAbono;

    /**
     * @var integer
     *
     * @ORM\Column(name="sepa_tipoPago", type="integer", nullable=true)
     */
    private $sepaTipopago;

    /**
     * @var string
     *
     * @ORM\Column(name="sepa_tipoTarjeta", type="string", nullable=true)
     */
    private $sepaTipotarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="sepa_nombreTarjeta", type="string", length=50, nullable=true)
     */
    private $sepaNombretarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="sepa_codigoVoucher", type="string", length=50, nullable=true)
     */
    private $sepaCodigovoucher;

    /**
     * @var string
     *
     * @ORM\Column(name="sepa_resta", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $sepaResta;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codigo", type="integer", nullable=false)
     */
    private $cliCodigo;


    /**
     * Get sepaCodigo
     *
     * @return integer 
     */
    public function getSepaCodigo()
    {
        return $this->sepaCodigo;
    }

    /**
     * Set sepCodigo
     *
     * @param integer $sepCodigo
     * @return AbonoSeparado
     */
    public function setSepCodigo($sepCodigo)
    {
        $this->sepCodigo = $sepCodigo;

        return $this;
    }

    /**
     * Get sepCodigo
     *
     * @return integer 
     */
    public function getSepCodigo()
    {
        return $this->sepCodigo;
    }

    /**
     * Set sepaFecha
     *
     * @param \DateTime $sepaFecha
     * @return AbonoSeparado
     */
    public function setSepaFecha($sepaFecha)
    {
        $this->sepaFecha = $sepaFecha;

        return $this;
    }

    /**
     * Get sepaFecha
     *
     * @return \DateTime 
     */
    public function getSepaFecha()
    {
        return $this->sepaFecha;
    }

    /**
     * Set sepaHora
     *
     * @param string $sepaHora
     * @return AbonoSeparado
     */
    public function setSepaHora($sepaHora)
    {
        $this->sepaHora = $sepaHora;

        return $this;
    }

    /**
     * Get sepaHora
     *
     * @return string 
     */
    public function getSepaHora()
    {
        return $this->sepaHora;
    }

    /**
     * Set sepaAbono
     *
     * @param string $sepaAbono
     * @return AbonoSeparado
     */
    public function setSepaAbono($sepaAbono)
    {
        $this->sepaAbono = $sepaAbono;

        return $this;
    }

    /**
     * Get sepaAbono
     *
     * @return string 
     */
    public function getSepaAbono()
    {
        return $this->sepaAbono;
    }

    /**
     * Set sepaTipopago
     *
     * @param integer $sepaTipopago
     * @return AbonoSeparado
     */
    public function setSepaTipopago($sepaTipopago)
    {
        $this->sepaTipopago = $sepaTipopago;

        return $this;
    }

    /**
     * Get sepaTipopago
     *
     * @return integer 
     */
    public function getSepaTipopago()
    {
        return $this->sepaTipopago;
    }

    /**
     * Set sepaTipotarjeta
     *
     * @param string $sepaTipotarjeta
     * @return AbonoSeparado
     */
    public function setSepaTipotarjeta($sepaTipotarjeta)
    {
        $this->sepaTipotarjeta = $sepaTipotarjeta;

        return $this;
    }

    /**
     * Get sepaTipotarjeta
     *
     * @return string 
     */
    public function getSepaTipotarjeta()
    {
        return $this->sepaTipotarjeta;
    }

    /**
     * Set sepaNombretarjeta
     *
     * @param string $sepaNombretarjeta
     * @return AbonoSeparado
     */
    public function setSepaNombretarjeta($sepaNombretarjeta)
    {
        $this->sepaNombretarjeta = $sepaNombretarjeta;

        return $this;
    }

    /**
     * Get sepaNombretarjeta
     *
     * @return string 
     */
    public function getSepaNombretarjeta()
    {
        return $this->sepaNombretarjeta;
    }

    /**
     * Set sepaCodigovoucher
     *
     * @param string $sepaCodigovoucher
     * @return AbonoSeparado
     */
    public function setSepaCodigovoucher($sepaCodigovoucher)
    {
        $this->sepaCodigovoucher = $sepaCodigovoucher;

        return $this;
    }

    /**
     * Get sepaCodigovoucher
     *
     * @return string 
     */
    public function getSepaCodigovoucher()
    {
        return $this->sepaCodigovoucher;
    }

    /**
     * Set sepaResta
     *
     * @param string $sepaResta
     * @return AbonoSeparado
     */
    public function setSepaResta($sepaResta)
    {
        $this->sepaResta = $sepaResta;

        return $this;
    }

    /**
     * Get sepaResta
     *
     * @return string 
     */
    public function getSepaResta()
    {
        return $this->sepaResta;
    }

    /**
     * Set cliCodigo
     *
     * @param integer $cliCodigo
     * @return AbonoSeparado
     */
    public function setCliCodigo($cliCodigo)
    {
        $this->cliCodigo = $cliCodigo;

        return $this;
    }

    /**
     * Get cliCodigo
     *
     * @return integer 
     */
    public function getCliCodigo()
    {
        return $this->cliCodigo;
    }
    
    }
