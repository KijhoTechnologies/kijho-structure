<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;





/**
 * ConfiguracionCodigoBarras
 *
 * @ORM\Table(name="configuracion_codigo_barras")
 * @ORM\Entity
 */
class ConfiguracionCodigoBarras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codbar_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codbarCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="codbar_supported", type="string", length=50, nullable=true)
     */
    private $codbarSupported;

    /**
     * @var string
     *
     * @ORM\Column(name="codbar_tipo_archivo", type="string", length=10, nullable=true)
     */
    private $codbarTipoArchivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="codbar_dpi", type="integer", nullable=true)
     */
    private $codbarDpi;

    /**
     * @var integer
     *
     * @ORM\Column(name="codbar_ancho", type="integer", nullable=true)
     */
    private $codbarAncho;

    /**
     * @var integer
     *
     * @ORM\Column(name="codbar_alto", type="integer", nullable=true)
     */
    private $codbarAlto;

    /**
     * @var integer
     *
     * @ORM\Column(name="codbar_rotacion", type="integer", nullable=true)
     */
    private $codbarRotacion;

    /**
     * @var string
     *
     * @ORM\Column(name="codbar_letra", type="string", length=50, nullable=true)
     */
    private $codbarLetra;

    /**
     * @var integer
     *
     * @ORM\Column(name="codbar_tam_letra", type="integer", nullable=true)
     */
    private $codbarTamLetra;


    /**
     * Get codbarCodigo
     *
     * @return integer 
     */
    public function getCodbarCodigo()
    {
        return $this->codbarCodigo;
    }

    /**
     * Set codbarSupported
     *
     * @param string $codbarSupported
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarSupported($codbarSupported)
    {
        $this->codbarSupported = $codbarSupported;

        return $this;
    }

    /**
     * Get codbarSupported
     *
     * @return string 
     */
    public function getCodbarSupported()
    {
        return $this->codbarSupported;
    }

    /**
     * Set codbarTipoArchivo
     *
     * @param string $codbarTipoArchivo
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarTipoArchivo($codbarTipoArchivo)
    {
        $this->codbarTipoArchivo = $codbarTipoArchivo;

        return $this;
    }

    /**
     * Get codbarTipoArchivo
     *
     * @return string 
     */
    public function getCodbarTipoArchivo()
    {
        return $this->codbarTipoArchivo;
    }

    /**
     * Set codbarDpi
     *
     * @param integer $codbarDpi
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarDpi($codbarDpi)
    {
        $this->codbarDpi = $codbarDpi;

        return $this;
    }

    /**
     * Get codbarDpi
     *
     * @return integer 
     */
    public function getCodbarDpi()
    {
        return $this->codbarDpi;
    }

    /**
     * Set codbarAncho
     *
     * @param integer $codbarAncho
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarAncho($codbarAncho)
    {
        $this->codbarAncho = $codbarAncho;

        return $this;
    }

    /**
     * Get codbarAncho
     *
     * @return integer 
     */
    public function getCodbarAncho()
    {
        return $this->codbarAncho;
    }

    /**
     * Set codbarAlto
     *
     * @param integer $codbarAlto
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarAlto($codbarAlto)
    {
        $this->codbarAlto = $codbarAlto;

        return $this;
    }

    /**
     * Get codbarAlto
     *
     * @return integer 
     */
    public function getCodbarAlto()
    {
        return $this->codbarAlto;
    }

    /**
     * Set codbarRotacion
     *
     * @param integer $codbarRotacion
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarRotacion($codbarRotacion)
    {
        $this->codbarRotacion = $codbarRotacion;

        return $this;
    }

    /**
     * Get codbarRotacion
     *
     * @return integer 
     */
    public function getCodbarRotacion()
    {
        return $this->codbarRotacion;
    }

    /**
     * Set codbarLetra
     *
     * @param string $codbarLetra
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarLetra($codbarLetra)
    {
        $this->codbarLetra = $codbarLetra;

        return $this;
    }

    /**
     * Get codbarLetra
     *
     * @return string 
     */
    public function getCodbarLetra()
    {
        return $this->codbarLetra;
    }

    /**
     * Set codbarTamLetra
     *
     * @param integer $codbarTamLetra
     * @return ConfiguracionCodigoBarras
     */
    public function setCodbarTamLetra($codbarTamLetra)
    {
        $this->codbarTamLetra = $codbarTamLetra;

        return $this;
    }

    /**
     * Get codbarTamLetra
     *
     * @return integer 
     */
    public function getCodbarTamLetra()
    {
        return $this->codbarTamLetra;
    }
}
