<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * ProveedorRegalo
 *
 * @ORM\Table(name="proveedor_regalo")
 * @ORM\Entity
 */
class ProveedorRegalo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prre_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prreCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prov_codigo", type="integer", nullable=false)
     */
    private $provCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="prre_valor", type="integer", nullable=false)
     */
    private $prreValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prre_fecha", type="date", nullable=false)
     */
    private $prreFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="prre_hora", type="string", length=100, nullable=false)
     */
    private $prreHora;

    /**
     * @var string
     *
     * @ORM\Column(name="prre_concepto", type="text", nullable=false)
     */
    private $prreConcepto;


    /**
     * Get prreCodigo
     *
     * @return integer 
     */
    public function getPrreCodigo()
    {
        return $this->prreCodigo;
    }

    /**
     * Set provCodigo
     *
     * @param integer $provCodigo
     * @return ProveedorRegalo
     */
    public function setProvCodigo($provCodigo)
    {
        $this->provCodigo = $provCodigo;

        return $this;
    }

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
     * Set prreValor
     *
     * @param integer $prreValor
     * @return ProveedorRegalo
     */
    public function setPrreValor($prreValor)
    {
        $this->prreValor = $prreValor;

        return $this;
    }

    /**
     * Get prreValor
     *
     * @return integer 
     */
    public function getPrreValor()
    {
        return $this->prreValor;
    }

    /**
     * Set prreFecha
     *
     * @param \DateTime $prreFecha
     * @return ProveedorRegalo
     */
    public function setPrreFecha($prreFecha)
    {
        $this->prreFecha = $prreFecha;

        return $this;
    }

    /**
     * Get prreFecha
     *
     * @return \DateTime 
     */
    public function getPrreFecha()
    {
        return $this->prreFecha;
    }

    /**
     * Set prreHora
     *
     * @param string $prreHora
     * @return ProveedorRegalo
     */
    public function setPrreHora($prreHora)
    {
        $this->prreHora = $prreHora;

        return $this;
    }

    /**
     * Get prreHora
     *
     * @return string 
     */
    public function getPrreHora()
    {
        return $this->prreHora;
    }

    /**
     * Set prreConcepto
     *
     * @param string $prreConcepto
     * @return ProveedorRegalo
     */
    public function setPrreConcepto($prreConcepto)
    {
        $this->prreConcepto = $prreConcepto;

        return $this;
    }

    /**
     * Get prreConcepto
     *
     * @return string 
     */
    public function getPrreConcepto()
    {
        return $this->prreConcepto;
    }
}
