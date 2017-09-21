<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesa
 *
 * @ORM\Table(name="mesa")
 * @ORM\Entity
 */
class Mesa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="m_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="m_estado", type="string", length=10, nullable=true)
     */
    private $mEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="m_puestos", type="integer", nullable=true)
     */
    private $mPuestos;

    /**
     * @var integer
     *
     * @ORM\Column(name="m_puestosAdd", type="integer", nullable=false)
     */
    private $mPuestosadd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="m_piso", type="integer", nullable=true)
     */
    private $mPiso = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="m_nombre", type="string", length=50, nullable=true)
     */
    private $mNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="m_observacion", type="text", length=65535, nullable=true)
     */
    private $mObservacion;



    /**
     * Get mCodigo
     *
     * @return integer
     */
    public function getMCodigo()
    {
        return $this->mCodigo;
    }

    /**
     * Set mEstado
     *
     * @param string $mEstado
     *
     * @return Mesa
     */
    public function setMEstado($mEstado)
    {
        $this->mEstado = $mEstado;

        return $this;
    }

    /**
     * Get mEstado
     *
     * @return string
     */
    public function getMEstado()
    {
        return $this->mEstado;
    }

    /**
     * Set mPuestos
     *
     * @param integer $mPuestos
     *
     * @return Mesa
     */
    public function setMPuestos($mPuestos)
    {
        $this->mPuestos = $mPuestos;

        return $this;
    }

    /**
     * Get mPuestos
     *
     * @return integer
     */
    public function getMPuestos()
    {
        return $this->mPuestos;
    }

    /**
     * Set mPuestosadd
     *
     * @param integer $mPuestosadd
     *
     * @return Mesa
     */
    public function setMPuestosadd($mPuestosadd)
    {
        $this->mPuestosadd = $mPuestosadd;

        return $this;
    }

    /**
     * Get mPuestosadd
     *
     * @return integer
     */
    public function getMPuestosadd()
    {
        return $this->mPuestosadd;
    }

    /**
     * Set mPiso
     *
     * @param integer $mPiso
     *
     * @return Mesa
     */
    public function setMPiso($mPiso)
    {
        $this->mPiso = $mPiso;

        return $this;
    }

    /**
     * Get mPiso
     *
     * @return integer
     */
    public function getMPiso()
    {
        return $this->mPiso;
    }

    /**
     * Set mNombre
     *
     * @param string $mNombre
     *
     * @return Mesa
     */
    public function setMNombre($mNombre)
    {
        $this->mNombre = $mNombre;

        return $this;
    }

    /**
     * Get mNombre
     *
     * @return string
     */
    public function getMNombre()
    {
        return $this->mNombre;
    }

    /**
     * Set mObservacion
     *
     * @param string $mObservacion
     *
     * @return Mesa
     */
    public function setMObservacion($mObservacion)
    {
        $this->mObservacion = $mObservacion;

        return $this;
    }

    /**
     * Get mObservacion
     *
     * @return string
     */
    public function getMObservacion()
    {
        return $this->mObservacion;
    }
}
