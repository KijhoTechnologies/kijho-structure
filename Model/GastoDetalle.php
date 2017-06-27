<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * GastoDetalle
 *
 * @ORM\Table(name="gasto_detalle")
 * @ORM\Entity
 */
class GastoDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gd_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gdCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="gasfk_codigo", type="integer", nullable=false)
     */
    private $gasfkCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_factura", type="integer", nullable=false)
     */
    private $codFactura;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_separado", type="integer", nullable=true)
     */
    private $codSeparado;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_factura_fisica", type="string", length=30, nullable=false)
     */
    private $codFacturaFisica;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiga_codigo", type="integer", nullable=false)
     */
    private $tigaCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_codigo_contable", type="integer", nullable=true)
     */
    private $gasCodigoContable;

    /**
     * @var integer
     *
     * @ORM\Column(name="iva16", type="integer", nullable=false)
     */
    private $iva16;

    /**
     * @var integer
     *
     * @ORM\Column(name="iva10", type="integer", nullable=false)
     */
    private $iva10;

    /**
     * @var integer
     *
     * @ORM\Column(name="impoConsumo", type="integer", nullable=true)
     */
    private $impoconsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="subtotal", type="integer", nullable=false)
     */
    private $subtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_retefuente", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasRetefuente;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_reteiva", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteiva;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_reteica", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteica;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="integer", nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="iva5", type="integer", nullable=true)
     */
    private $iva5;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_recibo_mercancia", type="integer", nullable=true)
     */
    private $codReciboMercancia;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_excluido", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasExcluido;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_exento", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasExento;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_rete_cree", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gasReteCree;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="text", length=65535, nullable=true)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="gas_tipoPersona", type="string", length=50, nullable=true)
     */
    private $gasTipopersona;


    /**
     * Get gdCodigo
     *
     * @return integer 
     */
    public function getGdCodigo()
    {
        return $this->gdCodigo;
    }

    /**
     * Set gasfkCodigo
     *
     * @param integer $gasfkCodigo
     * @return GastoDetalle
     */
    public function setGasfkCodigo($gasfkCodigo)
    {
        $this->gasfkCodigo = $gasfkCodigo;

        return $this;
    }

    /**
     * Get gasfkCodigo
     *
     * @return integer 
     */
    public function getGasfkCodigo()
    {
        return $this->gasfkCodigo;
    }

    /**
     * Set codFactura
     *
     * @param integer $codFactura
     * @return GastoDetalle
     */
    public function setCodFactura($codFactura)
    {
        $this->codFactura = $codFactura;

        return $this;
    }

    /**
     * Get codFactura
     *
     * @return integer 
     */
    public function getCodFactura()
    {
        return $this->codFactura;
    }

    /**
     * Set codSeparado
     *
     * @param integer $codSeparado
     * @return GastoDetalle
     */
    public function setCodSeparado($codSeparado)
    {
        $this->codSeparado = $codSeparado;

        return $this;
    }

    /**
     * Get codSeparado
     *
     * @return integer 
     */
    public function getCodSeparado()
    {
        return $this->codSeparado;
    }

    /**
     * Set codFacturaFisica
     *
     * @param string $codFacturaFisica
     * @return GastoDetalle
     */
    public function setCodFacturaFisica($codFacturaFisica)
    {
        $this->codFacturaFisica = $codFacturaFisica;

        return $this;
    }

    /**
     * Get codFacturaFisica
     *
     * @return string 
     */
    public function getCodFacturaFisica()
    {
        return $this->codFacturaFisica;
    }

    /**
     * Set tigaCodigo
     *
     * @param integer $tigaCodigo
     * @return GastoDetalle
     */
    public function setTigaCodigo($tigaCodigo)
    {
        $this->tigaCodigo = $tigaCodigo;

        return $this;
    }

    /**
     * Get tigaCodigo
     *
     * @return integer 
     */
    public function getTigaCodigo()
    {
        return $this->tigaCodigo;
    }

    /**
     * Set gasCodigoContable
     *
     * @param integer $gasCodigoContable
     * @return GastoDetalle
     */
    public function setGasCodigoContable($gasCodigoContable)
    {
        $this->gasCodigoContable = $gasCodigoContable;

        return $this;
    }

    /**
     * Get gasCodigoContable
     *
     * @return integer 
     */
    public function getGasCodigoContable()
    {
        return $this->gasCodigoContable;
    }

    /**
     * Set iva16
     *
     * @param integer $iva16
     * @return GastoDetalle
     */
    public function setIva16($iva16)
    {
        $this->iva16 = $iva16;

        return $this;
    }

    /**
     * Get iva16
     *
     * @return integer 
     */
    public function getIva16()
    {
        return $this->iva16;
    }

    /**
     * Set iva10
     *
     * @param integer $iva10
     * @return GastoDetalle
     */
    public function setIva10($iva10)
    {
        $this->iva10 = $iva10;

        return $this;
    }

    /**
     * Get iva10
     *
     * @return integer 
     */
    public function getIva10()
    {
        return $this->iva10;
    }

    /**
     * Set impoconsumo
     *
     * @param integer $impoconsumo
     * @return GastoDetalle
     */
    public function setImpoconsumo($impoconsumo)
    {
        $this->impoconsumo = $impoconsumo;

        return $this;
    }

    /**
     * Get impoconsumo
     *
     * @return integer 
     */
    public function getImpoconsumo()
    {
        return $this->impoconsumo;
    }

    /**
     * Set subtotal
     *
     * @param integer $subtotal
     * @return GastoDetalle
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return integer 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set gasRetefuente
     *
     * @param string $gasRetefuente
     * @return GastoDetalle
     */
    public function setGasRetefuente($gasRetefuente)
    {
        $this->gasRetefuente = $gasRetefuente;

        return $this;
    }

    /**
     * Get gasRetefuente
     *
     * @return string 
     */
    public function getGasRetefuente()
    {
        return $this->gasRetefuente;
    }

    /**
     * Set gasReteiva
     *
     * @param string $gasReteiva
     * @return GastoDetalle
     */
    public function setGasReteiva($gasReteiva)
    {
        $this->gasReteiva = $gasReteiva;

        return $this;
    }

    /**
     * Get gasReteiva
     *
     * @return string 
     */
    public function getGasReteiva()
    {
        return $this->gasReteiva;
    }

    /**
     * Set gasReteica
     *
     * @param string $gasReteica
     * @return GastoDetalle
     */
    public function setGasReteica($gasReteica)
    {
        $this->gasReteica = $gasReteica;

        return $this;
    }

    /**
     * Get gasReteica
     *
     * @return string 
     */
    public function getGasReteica()
    {
        return $this->gasReteica;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return GastoDetalle
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set iva5
     *
     * @param integer $iva5
     * @return GastoDetalle
     */
    public function setIva5($iva5)
    {
        $this->iva5 = $iva5;

        return $this;
    }

    /**
     * Get iva5
     *
     * @return integer 
     */
    public function getIva5()
    {
        return $this->iva5;
    }

    /**
     * Set codReciboMercancia
     *
     * @param integer $codReciboMercancia
     * @return GastoDetalle
     */
    public function setCodReciboMercancia($codReciboMercancia)
    {
        $this->codReciboMercancia = $codReciboMercancia;

        return $this;
    }

    /**
     * Get codReciboMercancia
     *
     * @return integer 
     */
    public function getCodReciboMercancia()
    {
        return $this->codReciboMercancia;
    }

    /**
     * Set gasExcluido
     *
     * @param string $gasExcluido
     * @return GastoDetalle
     */
    public function setGasExcluido($gasExcluido)
    {
        $this->gasExcluido = $gasExcluido;

        return $this;
    }

    /**
     * Get gasExcluido
     *
     * @return string 
     */
    public function getGasExcluido()
    {
        return $this->gasExcluido;
    }

    /**
     * Set gasExento
     *
     * @param string $gasExento
     * @return GastoDetalle
     */
    public function setGasExento($gasExento)
    {
        $this->gasExento = $gasExento;

        return $this;
    }

    /**
     * Get gasExento
     *
     * @return string 
     */
    public function getGasExento()
    {
        return $this->gasExento;
    }

    /**
     * Set gasReteCree
     *
     * @param string $gasReteCree
     * @return GastoDetalle
     */
    public function setGasReteCree($gasReteCree)
    {
        $this->gasReteCree = $gasReteCree;

        return $this;
    }

    /**
     * Get gasReteCree
     *
     * @return string 
     */
    public function getGasReteCree()
    {
        return $this->gasReteCree;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     * @return GastoDetalle
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set gasTipopersona
     *
     * @param string $gasTipopersona
     * @return GastoDetalle
     */
    public function setGasTipopersona($gasTipopersona)
    {
        $this->gasTipopersona = $gasTipopersona;

        return $this;
    }

    /**
     * Get gasTipopersona
     *
     * @return string 
     */
    public function getGasTipopersona()
    {
        return $this->gasTipopersona;
    }
}
