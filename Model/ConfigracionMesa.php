<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigracionMesa
 *
 * @ORM\Table(name="configracion_mesa")
 * @ORM\Entity
 */
class ConfigracionMesa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="confme_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $confmeCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="confme_piso", type="integer", nullable=false)
     */
    private $confmePiso;

    /**
     * @var string
     *
     * @ORM\Column(name="confme_impFactura", type="string", length=50, nullable=false)
     */
    private $confmeImpfactura;

    /**
     * @var string
     *
     * @ORM\Column(name="confme_impTiquet", type="string", length=50, nullable=false)
     */
    private $confmeImptiquet;



    /**
     * Get confmeCodigo
     *
     * @return integer
     */
    public function getConfmeCodigo()
    {
        return $this->confmeCodigo;
    }

    /**
     * Set confmePiso
     *
     * @param integer $confmePiso
     *
     * @return ConfigracionMesa
     */
    public function setConfmePiso($confmePiso)
    {
        $this->confmePiso = $confmePiso;

        return $this;
    }

    /**
     * Get confmePiso
     *
     * @return integer
     */
    public function getConfmePiso()
    {
        return $this->confmePiso;
    }

    /**
     * Set confmeImpfactura
     *
     * @param string $confmeImpfactura
     *
     * @return ConfigracionMesa
     */
    public function setConfmeImpfactura($confmeImpfactura)
    {
        $this->confmeImpfactura = $confmeImpfactura;

        return $this;
    }

    /**
     * Get confmeImpfactura
     *
     * @return string
     */
    public function getConfmeImpfactura()
    {
        return $this->confmeImpfactura;
    }

    /**
     * Set confmeImptiquet
     *
     * @param string $confmeImptiquet
     *
     * @return ConfigracionMesa
     */
    public function setConfmeImptiquet($confmeImptiquet)
    {
        $this->confmeImptiquet = $confmeImptiquet;

        return $this;
    }

    /**
     * Get confmeImptiquet
     *
     * @return string
     */
    public function getConfmeImptiquet()
    {
        return $this->confmeImptiquet;
    }
}
