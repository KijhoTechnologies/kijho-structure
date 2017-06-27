<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * Rifa
 *
 * @ORM\Table(name="rifa")
 * @ORM\Entity
 */
class Rifa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rif_consecutivo", type="integer", nullable=false)
     */
    private $rifConsecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="rif_descripcion", type="string", length=50, nullable=false)
     */
    private $rifDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="rif_fecha", type="string", length=50, nullable=false)
     */
    private $rifFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="rif_texto", type="string", length=50, nullable=false)
     */
    private $rifTexto;

    /**
     * @var integer
     *
     * @ORM\Column(name="rif_consecutivo_x", type="integer", nullable=false)
     */
    private $rifConsecutivoX;

    /**
     * @var integer
     *
     * @ORM\Column(name="rif_descripcion_x", type="integer", nullable=false)
     */
    private $rifDescripcionX;

    /**
     * @var integer
     *
     * @ORM\Column(name="rif_fecha_x", type="integer", nullable=false)
     */
    private $rifFechaX;

    /**
     * @var integer
     *
     * @ORM\Column(name="rif_texto_x", type="integer", nullable=false)
     */
    private $rifTextoX;

    /**
     * @var string
     *
     * @ORM\Column(name="rif_modulo_ventas", type="string", nullable=false)
     */
    private $rifModuloVentas;

    /**
     * @var integer
     *
     * @ORM\Column(name="rif_rango_dinero", type="integer", nullable=false)
     */
    private $rifRangoDinero;


    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rifConsecutivo
     *
     * @param integer $rifConsecutivo
     * @return Rifa
     */
    public function setRifConsecutivo($rifConsecutivo)
    {
        $this->rifConsecutivo = $rifConsecutivo;

        return $this;
    }

    /**
     * Get rifConsecutivo
     *
     * @return integer 
     */
    public function getRifConsecutivo()
    {
        return $this->rifConsecutivo;
    }

    /**
     * Set rifDescripcion
     *
     * @param string $rifDescripcion
     * @return Rifa
     */
    public function setRifDescripcion($rifDescripcion)
    {
        $this->rifDescripcion = $rifDescripcion;

        return $this;
    }

    /**
     * Get rifDescripcion
     *
     * @return string 
     */
    public function getRifDescripcion()
    {
        return $this->rifDescripcion;
    }

    /**
     * Set rifFecha
     *
     * @param string $rifFecha
     * @return Rifa
     */
    public function setRifFecha($rifFecha)
    {
        $this->rifFecha = $rifFecha;

        return $this;
    }

    /**
     * Get rifFecha
     *
     * @return string 
     */
    public function getRifFecha()
    {
        return $this->rifFecha;
    }

    /**
     * Set rifTexto
     *
     * @param string $rifTexto
     * @return Rifa
     */
    public function setRifTexto($rifTexto)
    {
        $this->rifTexto = $rifTexto;

        return $this;
    }

    /**
     * Get rifTexto
     *
     * @return string 
     */
    public function getRifTexto()
    {
        return $this->rifTexto;
    }

    /**
     * Set rifConsecutivoX
     *
     * @param integer $rifConsecutivoX
     * @return Rifa
     */
    public function setRifConsecutivoX($rifConsecutivoX)
    {
        $this->rifConsecutivoX = $rifConsecutivoX;

        return $this;
    }

    /**
     * Get rifConsecutivoX
     *
     * @return integer 
     */
    public function getRifConsecutivoX()
    {
        return $this->rifConsecutivoX;
    }

    /**
     * Set rifDescripcionX
     *
     * @param integer $rifDescripcionX
     * @return Rifa
     */
    public function setRifDescripcionX($rifDescripcionX)
    {
        $this->rifDescripcionX = $rifDescripcionX;

        return $this;
    }

    /**
     * Get rifDescripcionX
     *
     * @return integer 
     */
    public function getRifDescripcionX()
    {
        return $this->rifDescripcionX;
    }

    /**
     * Set rifFechaX
     *
     * @param integer $rifFechaX
     * @return Rifa
     */
    public function setRifFechaX($rifFechaX)
    {
        $this->rifFechaX = $rifFechaX;

        return $this;
    }

    /**
     * Get rifFechaX
     *
     * @return integer 
     */
    public function getRifFechaX()
    {
        return $this->rifFechaX;
    }

    /**
     * Set rifTextoX
     *
     * @param integer $rifTextoX
     * @return Rifa
     */
    public function setRifTextoX($rifTextoX)
    {
        $this->rifTextoX = $rifTextoX;

        return $this;
    }

    /**
     * Get rifTextoX
     *
     * @return integer 
     */
    public function getRifTextoX()
    {
        return $this->rifTextoX;
    }

    /**
     * Set rifModuloVentas
     *
     * @param string $rifModuloVentas
     * @return Rifa
     */
    public function setRifModuloVentas($rifModuloVentas)
    {
        $this->rifModuloVentas = $rifModuloVentas;

        return $this;
    }

    /**
     * Get rifModuloVentas
     *
     * @return string 
     */
    public function getRifModuloVentas()
    {
        return $this->rifModuloVentas;
    }

    /**
     * Set rifRangoDinero
     *
     * @param integer $rifRangoDinero
     * @return Rifa
     */
    public function setRifRangoDinero($rifRangoDinero)
    {
        $this->rifRangoDinero = $rifRangoDinero;

        return $this;
    }

    /**
     * Get rifRangoDinero
     *
     * @return integer 
     */
    public function getRifRangoDinero()
    {
        return $this->rifRangoDinero;
    }
}
